#!/bin/sh

echo "--------------------------------------------------"
echo "🚀 Starting Deployment Script"
echo "--------------------------------------------------"

# Cek apakah APP_KEY sudah ada
if [ -z "$APP_KEY" ]; then
    echo "⚠️ WARNING: APP_KEY is empty! Website will show 500 error."
    echo "Please set APP_KEY in Railway Variables."
fi

# Pastikan folder writable
chmod -R 777 storage bootstrap/cache

# Bersihkan cache
php artisan config:clear
php artisan cache:clear

# Coba migrasi database
echo "Attempting database migration..."
php artisan migrate --force || echo "Migration failed, check your DB variables."

# PORT DYNAMIC FIX
# Railway memberikan PORT secara dinamis. Kita ubah nginx.conf agar sesuai.
export PORT=${PORT:-8080}
echo "Configuring Nginx to internal port: 8080 -> External: $PORT"
sed -i "s/listen 8080;/listen ${PORT};/g" /etc/nginx/nginx.conf

echo "--------------------------------------------------"
echo "✅ Everything is ready. Starting Nginx & PHP-FPM..."
echo "--------------------------------------------------"

exec "$@"
