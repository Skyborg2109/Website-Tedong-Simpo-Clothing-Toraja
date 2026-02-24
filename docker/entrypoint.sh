#!/bin/sh

echo "--------------------------------------------------"
echo "🚀 Pre-startup Hard Clean"
echo "--------------------------------------------------"

# Hapus cache file secara manual agar Laravel terpaksa membaca variabel ENV yang baru
rm -rf bootstrap/cache/*.php
mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Jalankan clearing via artisan
php artisan config:clear
php artisan cache:clear

echo "Attempting database migration..."
php artisan migrate --force || echo "⚠️ Migration skipped."

# Konfigurasi Port
export PORT=${PORT:-8080}
sed -i "s/listen 8080;/listen ${PORT};/g" /etc/nginx/nginx.conf

echo "✅ Ready to start!"
exec "$@"
