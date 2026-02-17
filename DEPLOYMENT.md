# Deployment checklist — Amazing Grace Academy

Follow these steps on the **server** (or in your CI/CD) so the site doesn’t break in production.

## 1. Build frontend assets

```bash
npm ci
npm run build
```

This creates `public/build/manifest.json` and `public/build/assets/*`. **Deploy the whole `public/build` folder.** Without it, CSS and JS will not load.

## 2. Run Laravel deploy commands

```bash
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link
php artisan migrate --force
```

- **config:cache** — Caches `.env`-based config. Run this **on the server** after deploy (so `APP_URL`, `APP_ENV`, etc. are correct).
- **route:cache** — Caches routes (faster, required when using route cache). All routes are controller-based, so this is safe.
- **storage:link** — Creates `public/storage` → `storage/app/public`. Needed for event/product/online-class cover images and uploads.

## 3. Environment (.env) on the server

Set at least:

- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL=https://your-domain.com` (no trailing slash)
- `SESSION_DRIVER=database` (or `file`) — if `database`, run migrations so the `sessions` table exists
- `DB_*` — database credentials
- `MAIL_*` — if you use password reset or contact emails
- `PAYPACK_*` — if you use PayPack for payments

## 4. Permissions

Ensure the web server can write to:

- `storage/` (sessions, logs, cache)
- `bootstrap/cache/`

Example (Linux, web server user `www-data`):

```bash
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache
```

## 5. Optional: one-line deploy script

From the project root:

```bash
npm ci && npm run build && composer install --no-dev --optimize-autoloader && \
php artisan config:cache && php artisan route:cache && php artisan view:cache && \
php artisan storage:link && php artisan migrate --force
```

Run this **after** you’ve uploaded code and **after** `.env` is set on the server.

## What was fixed for deploy

- **Assets:** Layouts use `vite_built_assets()` so production always loads the built CSS/JS from the manifest (no broken fallback).
- **Admin panel:** Uses the same asset logic as the website so admin doesn’t break when `public/build` is present.
- **Auth:** Login/logout moved to `LoginController` so `php artisan route:cache` works (no route closures).
- **Caching:** Safe to use `config:cache`, `route:cache`, and `view:cache` after deploy.
