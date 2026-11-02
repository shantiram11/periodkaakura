# Period Kaa Kura

Website for the Period Kaa Kura podcast. Laravel 13, Filament 5 admin, Tailwind 4.

## Local setup (Herd)

```bash
herd isolate 8.4
composer install && npm install
cp .env.example .env && php artisan key:generate
php artisan migrate --seed
php artisan storage:link
php artisan episodes:sync   # first run downloads and resizes all cover art (~3 min)
npm run build               # or `npm run dev` while working on views
```

- Site: http://pkk.test
- Admin: http://pkk.test/admin (local login `test@example.com` / `password`, from `DatabaseSeeder`)

## How content works

- **Episodes** come from the Spotify for Podcasters RSS feed (`config/podcast.php`). `episodes:sync` runs hourly via the scheduler, or from the "Sync from feed" button in the admin. It only overwrites feed fields; topics, summary, transcript, YouTube ID and the featured flag are edited in the admin and never touched by the sync.
- **Cover art** is downloaded once per image and stored as a 600px WebP in `storage/app/public/episodes`.
- **Team, press and videos** are managed in the admin. Initial content, host photos and press screenshots were carried over from the WordPress site by `ContentSeeder` (images in `database/seeders/assets`).
- **Contact form** messages land in the admin Inbox and are emailed to `podcast.email`, with Reply-To set to the sender. Spam is handled by a honeypot field and a 5-per-10-minutes rate limit.

## Deploying

Staging deploys to development.periodkaakura.com with `scripts/deploy-staging.sh`. See [docs/DEPLOYMENT.md](docs/DEPLOYMENT.md) for the one-time Hostinger setup.

## Production

- Set `ADMIN_EMAILS` (comma-separated) to control who can access `/admin` outside local.
- Run the scheduler: `* * * * * php artisan schedule:run`.
- Configure real `MAIL_*` settings (locally mail goes to `storage/logs/laravel.log`).
- Old WordPress URLs `/feed` and `/sections/*` redirect to their new equivalents.
