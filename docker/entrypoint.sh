#!/bin/sh

# Jalankan optimasi cache Laravel (opsional tapi disarankan untuk produksi)
echo "Caching configuration and routes..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Cek apakah database sudah siap sebelum migrasi
echo "Attempting to run migrations..."
php artisan migrate --force || echo "Migrations failed, skipping for now. Make sure your DB variables are set correctly."

# Sesuaikan port Nginx dengan variabel $PORT dari Railway (Default ke 8080 jika tidak ada)
export PORT=${PORT:-8080}
sed -i "s/listen 8080;/listen ${PORT};/g" /etc/nginx/nginx.conf

echo "Starting Supervisor on port ${PORT}..."
exec "$@"
