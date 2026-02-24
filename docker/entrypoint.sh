#!/bin/sh

echo "--------------------------------------------------"
echo "� Checking Environment Variables..."
echo "DB_CONNECTION: $DB_CONNECTION"
echo "DB_HOST: $DB_HOST"
echo "DB_DATABASE: $DB_DATABASE"
if [ -z "$APP_KEY" ]; then echo "⚠️ WARNING: APP_KEY is EMPTY!"; fi
echo "--------------------------------------------------"

# Hard clear cache
rm -rf bootstrap/cache/*.php
mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Clear via artisan
php artisan config:clear
php artisan cache:clear

echo "Running migrations..."
php artisan migrate --force || echo "⚠️ Migration failed, checking connection..."

# Nginx port
export PORT=${PORT:-8080}
sed -i "s/listen 8080;/listen ${PORT};/g" /etc/nginx/nginx.conf

echo "✅ Startup sequence finished."
exec "$@"
