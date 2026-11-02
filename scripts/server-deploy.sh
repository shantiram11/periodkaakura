#!/usr/bin/env bash
#
# Runs on the server, inside the app checkout.
#
#   scripts/server-deploy.sh                  Update code, dependencies, database and caches.
#   scripts/server-deploy.sh link-webroot DIR Serve the site from this checkout's public/ folder
#                                             by replacing DIR (the domain's web root) with a symlink.
#                                             An existing DIR is moved aside, never deleted.
#
# Environment:
#   PHP_BIN            PHP 8.3+ binary (default: Hostinger's PHP 8.4, else `php`)
#   BRANCH             Git branch to deploy (default: the checked-out branch)
#   SKIP_EPISODE_SYNC  Set to 1 to skip importing episodes on first install

set -euo pipefail

APP_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$APP_DIR"

if [[ -z "${PHP_BIN:-}" ]]; then
    PHP_BIN=php
    [[ -x /opt/alt/php84/usr/bin/php ]] && PHP_BIN=/opt/alt/php84/usr/bin/php
fi

step() { printf '\n\033[1;31m==>\033[0m %s\n' "$*"; }
artisan() { "$PHP_BIN" artisan "$@"; }

composer_install() {
    local composer
    composer="$(command -v composer || true)"
    [[ -n "$composer" ]] || { echo "composer not found on this server" >&2; exit 1; }

    # Run composer under the same PHP as the app, so its platform checks and
    # post-install hooks (filament:upgrade) use PHP 8.3+.
    if head -n1 "$composer" | grep -q php; then
        "$PHP_BIN" "$composer" "$@"
    else
        "$composer" "$@"
    fi
}

link_webroot() {
    local web_root="${1:?usage: server-deploy.sh link-webroot /path/to/domain/public_html}"
    web_root="${web_root%/}"

    if [[ -L "$web_root" ]]; then
        rm "$web_root"
    elif [[ -e "$web_root" ]]; then
        local backup="${web_root}.backup-$(date +%Y%m%d%H%M%S)"
        mv "$web_root" "$backup"
        echo "Moved the existing web root to $backup"
    fi

    ln -s "$APP_DIR/public" "$web_root"
    echo "$web_root now serves $APP_DIR/public"
}

deploy() {
    "$PHP_BIN" -r 'exit(PHP_VERSION_ID >= 80300 ? 0 : 1);' \
        || { echo "PHP 8.3+ required; set PHP_BIN (found $("$PHP_BIN" -r 'echo PHP_VERSION;'))" >&2; exit 1; }

    step "Updating code"
    git fetch --quiet origin
    git merge --ff-only "origin/${BRANCH:-$(git rev-parse --abbrev-ref HEAD)}"

    local first_install=0
    if [[ ! -f .env ]]; then
        first_install=1
        step "First install: creating .env from .env.staging.example"
        cp .env.staging.example .env
    fi

    step "Installing PHP dependencies"
    composer_install install --no-dev --optimize-autoloader --no-interaction --prefer-dist

    if ! grep -q '^APP_KEY=base64:' .env; then
        artisan key:generate --force
    fi

    if grep -q '^DB_CONNECTION=sqlite' .env && [[ ! -f database/database.sqlite ]]; then
        touch database/database.sqlite
    fi

    step "Migrating the database"
    artisan migrate --force

    if (( first_install )); then
        step "Seeding team, press and videos"
        artisan db:seed --force

        if [[ "${SKIP_EPISODE_SYNC:-0}" != 1 ]]; then
            step "Importing episodes (first run downloads all cover art, a few minutes)"
            artisan episodes:sync
        fi
    fi

    [[ -L public/storage ]] || artisan storage:link

    step "Caching config, routes and views"
    artisan optimize
    artisan filament:optimize

    if [[ ! -f public/build/manifest.json ]]; then
        echo "Warning: public/build is missing. Upload built assets (scripts/deploy-staging.sh does this)." >&2
    fi

    if (( first_install )); then
        cat <<EOF

First install done. Still to do:
  1. Edit $APP_DIR/.env: set ADMIN_EMAILS, CONTACT_RECIPIENT (and mail settings),
     then run: $PHP_BIN artisan optimize
  2. Create your admin login: $PHP_BIN artisan make:filament-user
  3. Point the domain at the app: scripts/server-deploy.sh link-webroot <web root>
EOF
    fi

    step "Deployed $(git rev-parse --short HEAD)"
}

case "${1:-deploy}" in
    deploy) deploy ;;
    link-webroot) link_webroot "${2:-}" ;;
    *) echo "unknown command: $1" >&2; exit 1 ;;
esac
