#!/bin/sh

echo "--------------------------------------------------"
echo "🚀 Checking Environment Variables..."
echo "DB_CONNECTION: $DB_CONNECTION"
echo "DB_HOST: $DB_HOST"
echo "DB_PORT: $DB_PORT"
echo "DB_DATABASE: $DB_DATABASE"
if [ -z "$APP_KEY" ]; then 
    echo "⚠️ WARNING: APP_KEY is EMPTY! Laravel might not start."
else
    echo "✅ APP_KEY is set."
fi
echo "--------------------------------------------------"

# Hard clear cache
echo "🧹 Clearing caches..."
rm -rf bootstrap/cache/*.php
mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Clear via artisan
php artisan config:clear
php artisan cache:clear

echo "🔄 Running migrations (with 30s timeout)..."
# We use a timeout to prevent the whole container from hanging and causing a 502
timeout 30s php artisan migrate --force --no-interaction || echo "⚠️ Migration failed or timed out. Checking database connection is recommended."

# Nginx port
export PORT=${PORT:-8080}
echo "🌐 Configuring Nginx to listen on port: $PORT"
sed -i "s/listen 8080;/listen ${PORT};/g" /etc/nginx/nginx.conf

echo "✅ Startup sequence finished. Starting Supervisor..."
exec "$@"
