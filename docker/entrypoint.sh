#!/bin/sh

# JANGAN gunakan 'set -e' agar container tidak mati jika satu perintah gagal
echo "Checking Environment..."

# Pastikan folder writable
chmod -R 777 storage bootstrap/cache

# Bersihkan cache lama (lebih aman daripada config:cache di awal build)
php artisan config:clear
php artisan cache:clear

# Coba migrasi database (tidak akan menghentikan container jika gagal)
echo "Attempting database migration..."
php artisan migrate --force || echo "Migration failed, check your DB variables."

# Sesuaikan port Nginx dengan variabel $PORT dari Railway (Penting!)
export PORT=${PORT:-8080}
echo "Configuring Nginx to listen on port $PORT..."
sed -i "s/listen 8080;/listen ${PORT};/g" /etc/nginx/nginx.conf

echo "Starting Application Processes..."
exec "$@"
