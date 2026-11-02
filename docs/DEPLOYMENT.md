# Deploying to staging (development.periodkaakura.com)

The site runs on the Hostinger **Premium** shared plan. Staging lives on the existing
`development.periodkaakura.com` website; the live `periodkaakura.com` WordPress site is untouched.

**How it fits together**

```
~/apps/pkk-staging/            ← git checkout of the laravel-revamp branch (outside the web root)
    public/                    ← the only folder the web can see
~/domains/.../public_html  →   symlink to ~/apps/pkk-staging/public
```

Keeping the app outside `public_html` means `.env`, the database and the code can never be downloaded.

---

## One-time setup

### 1. In hPanel (the plan owner's account, so check with Priyanka first)

Open **Websites → development.periodkaakura.com**, then:

1. **Advanced → PHP Configuration → PHP version:** choose **PHP 8.4** and click **Update**.
   The required extensions (intl, zip, gd, fileinfo, mbstring, pdo_sqlite) are already enabled.
2. **Advanced → SSH Access:** click **Enable**. Note the IP, port and username
   (currently `62.72.50.22`, port `65002`, user `u356965166`, already the defaults in `scripts/deploy-staging.sh`).
3. **Optional but recommended:** in **SSH Access → SSH keys**, add your Mac's public key so you aren't asked for a password on every deploy:

   ```bash
   cat ~/.ssh/id_rsa.pub
   ```

4. **Optional:** **Advanced → Password Protect Directories** to put staging behind a username and password while the creators review it.

### 2. Find the subdomain's web root

```bash
ssh -p 65002 u356965166@62.72.50.22
ls -d ~/domains/*/public_html ~/domains/*/public_html/*/ 2>/dev/null
```

Look for the folder serving `development.periodkaakura.com`, usually
`~/domains/development.periodkaakura.com/public_html`. Keep that path for step 4.
Check which PHP the command line uses: `php -v`. If it's older than 8.3, the deploy script uses
`/opt/alt/php84/usr/bin/php` automatically.

### 3. First deploy (from your Mac)

```bash
scripts/deploy-staging.sh
```

This builds the assets, clones the repository to `~/apps/pkk-staging`, creates `.env` from
`.env.staging.example`, installs dependencies, creates the database, seeds the team/press/videos and
imports all episodes (the first import downloads every cover image, about 3 minutes).

### 4. Finish on the server

```bash
ssh -p 65002 u356965166@62.72.50.22
cd ~/apps/pkk-staging
nano .env                 # set ADMIN_EMAILS and CONTACT_RECIPIENT (see below)
php artisan optimize      # use /opt/alt/php84/usr/bin/php if `php -v` is older than 8.3
php artisan make:filament-user
scripts/server-deploy.sh link-webroot ~/domains/development.periodkaakura.com/public_html
```

`link-webroot` moves the old `public_html` aside as `public_html.backup-<date>` (nothing is deleted)
and replaces it with a link to the app.

| `.env` setting | Set it to |
|---|---|
| `ADMIN_EMAILS` | The email(s) you used in `make:filament-user`, comma-separated |
| `CONTACT_RECIPIENT` | Your own email, so test messages don't go to the creators |
| `MAIL_*` | Leave `MAIL_MAILER=log` for now, or create a mailbox under **Emails** in hPanel and fill in its username/password with `MAIL_MAILER=smtp` |

### 5. Cron job for the hourly episode sync

hPanel → **Advanced → Cron Jobs → Custom**, every minute (`* * * * *`):

```
/opt/alt/php84/usr/bin/php /home/u356965166/apps/pkk-staging/artisan schedule:run
```

---

## Every deploy after that

Commit and push to `laravel-revamp`, then:

```bash
scripts/deploy-staging.sh
```

It refuses to run with uncommitted or unpushed changes, so staging always matches GitHub.

## Checks after deploying

- https://development.periodkaakura.com loads with styles, and an episode page plays audio
- https://development.periodkaakura.com/admin logs in
- Response headers include `X-Robots-Tag: noindex, nofollow` (staging stays out of Google)

## Troubleshooting

| Problem | Fix |
|---|---|
| 500 error | `tail -50 ~/apps/pkk-staging/storage/logs/laravel-*.log` |
| Page has no styles | Run `scripts/deploy-staging.sh` again; it re-uploads `public/build` |
| Admin says 403 | Your email isn't in `ADMIN_EMAILS`; edit `.env`, then `php artisan optimize` |
| `.env` change has no effect | Config is cached: `php artisan optimize` |
| Episode artwork missing | `php artisan episodes:sync` |
