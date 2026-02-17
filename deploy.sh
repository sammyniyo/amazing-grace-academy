#!/usr/bin/env bash
# Run from project root on the server after code is deployed and .env is set.
set -e
echo "Building assets..."
npm ci
npm run build
echo "Composer install..."
composer install --no-dev --optimize-autoloader
echo "Laravel cache & migrate..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link 2>/dev/null || true
php artisan migrate --force
echo "Deploy done."
