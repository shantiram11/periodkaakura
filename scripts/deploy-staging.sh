#!/usr/bin/env bash
#
# Deploys the pushed laravel-revamp branch to development.periodkaakura.com.
# Run from your Mac:  scripts/deploy-staging.sh
#
# Builds the front-end assets here (shared hosting has no reliable Node),
# uploads them, then runs scripts/server-deploy.sh on the server over SSH.
# Override any setting below with an environment variable of the same name.

set -euo pipefail

DEPLOY_HOST="${DEPLOY_HOST:-62.72.50.22}"
DEPLOY_PORT="${DEPLOY_PORT:-65002}"
DEPLOY_USER="${DEPLOY_USER:-u356965166}"
DEPLOY_PATH="${DEPLOY_PATH:-apps/pkk-staging}"   # relative to the server's home directory
BRANCH="${BRANCH:-laravel-revamp}"
REPO_URL="${REPO_URL:-https://github.com/shantiram11/periodkaakura.git}"

cd "$(dirname "${BASH_SOURCE[0]}")/.."

step() { printf '\n\033[1;31m==>\033[0m %s\n' "$*"; }

# One SSH connection for the whole run, so a password is asked for at most once.
control_path="$(mktemp -u "${TMPDIR:-/tmp}/pkk-deploy.XXXXXX")"
ssh_opts=(-p "$DEPLOY_PORT" -o ControlMaster=auto -o "ControlPath=$control_path" -o ControlPersist=120)
remote() { ssh "${ssh_opts[@]}" "$DEPLOY_USER@$DEPLOY_HOST" "$@"; }
trap 'ssh "${ssh_opts[@]}" -O exit "$DEPLOY_USER@$DEPLOY_HOST" 2>/dev/null || true' EXIT

step "Checking that $BRANCH is committed and pushed"
if [[ -n "$(git status --porcelain)" ]]; then
    echo "You have uncommitted changes. Commit and push them first." >&2
    exit 1
fi
git fetch --quiet origin "$BRANCH"
if [[ "$(git rev-parse HEAD)" != "$(git rev-parse "origin/$BRANCH")" ]]; then
    echo "Local HEAD doesn't match origin/$BRANCH. Check out $BRANCH and push it first." >&2
    exit 1
fi

step "Building front-end assets"
npm ci --silent
npm run build

step "Preparing the server checkout ($DEPLOY_PATH)"
remote "set -e
    if [ ! -d '$DEPLOY_PATH/.git' ]; then
        mkdir -p \"\$(dirname '$DEPLOY_PATH')\"
        git clone --branch '$BRANCH' '$REPO_URL' '$DEPLOY_PATH'
    fi
    cd '$DEPLOY_PATH' && git fetch --quiet origin && git merge --ff-only 'origin/$BRANCH'"

step "Uploading assets"
rsync -az --delete -e "ssh ${ssh_opts[*]}" public/build/ "$DEPLOY_USER@$DEPLOY_HOST:$DEPLOY_PATH/public/build/"

step "Running the server deploy"
remote "cd '$DEPLOY_PATH' && BRANCH='$BRANCH' bash scripts/server-deploy.sh"
