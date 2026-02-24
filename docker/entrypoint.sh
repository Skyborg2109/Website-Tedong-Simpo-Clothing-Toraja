#!/bin/sh

echo "--------------------------------------------------"
echo "🚀 Starting Deployment Script"
echo "--------------------------------------------------"

# Pastikan folder storage dan cache ada dan bisa ditulis
mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Bersihkan cache lama agar variabel baru terbaca
php artisan config:clear
php artisan cache:clear

# Coba migrasi database
echo "Attempting database migration..."
php artisan migrate --force || echo "⚠️ Migration failed. This is normal if DB variables aren't set yet."

# Konfigurasi Port Nginx
export PORT=${PORT:-8080}
echo "Configuring Nginx to internal port: 8080 -> External: $PORT"
sed -i "s/listen 8080;/listen ${PORT};/g" /etc/nginx/nginx.conf

echo "--------------------------------------------------"
echo "✅ Application is ready!"
echo "--------------------------------------------------"

exec "$@"
