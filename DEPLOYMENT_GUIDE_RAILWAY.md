# 🚀 Panduan Deployment - Tedong Simpo Clothes

Project ini telah disiapkan untuk deploy menggunakan **Docker**. Ini adalah standar industri yang memastikan aplikasi berjalan lancar di server mana pun (Railway, Fly.io, DigitalOcean, dll).

## 1. Persiapan Akun & Repo
1. Push project ini ke **GitHub**.
2. Buat akun di [Railway.app](https://railway.app/).

## 2. Langkah Deployment di Railway
1. Klik **"New Project"**.
2. Pilih **"Deploy from GitHub repo"**.
3. Pilih repository project ini.
4. Railway akan mendeteksi `Dockerfile` secara otomatis dan mulai membangun image.

## 3. Konfigurasi Database
1. Di dashboard Railway, klik **"New"** -> **"Database"** -> **"Add MySQL"**.
2. Tunggu hingga MySQL siap, lalu buka tab **Connect**. Salin semua kredensialnya.
3. Kembali ke project Laravel Anda di Railway, buka tab **Variables**.
4. Tambahkan variabel berikut (sesuaikan dengan kredensial MySQL tadi):
   - `DB_CONNECTION`: `mysql`
   - `DB_HOST`: `${{ MySQL.MYSQL_HOST }}`
   - `DB_PORT`: `${{ MySQL.MYSQL_PORT }}`
   - `DB_DATABASE`: `${{ MySQL.MYSQL_DATABASE }}`
   - `DB_USERNAME`: `${{ MySQL.MYSQL_USER }}`
   - `DB_PASSWORD`: `${{ MySQL.MYSQL_PASSWORD }}`

## 4. Variabel Penting Lainnya
Tambahkan juga variabel ini di tab **Variables**:
- `APP_KEY`: Jalankan `php artisan key:generate --show` di laptop Anda, lalu ambil kodenya.
- `APP_ENV`: `production`
- `APP_DEBUG`: `false`
- `APP_URL`: URL yang diberikan oleh Railway (contoh: `https://tedong-simpo.up.railway.app`).

## 5. Menjalankan Aset (Vite)
Aplikasi ini sudah dikonfigurasi menggunakan *Multi-stage Build* di Docker, sehingga aset (CSS/JS) sudah terkompilasi secara otomatis saat build di server.

---
**Catatan Penting:** 
Migrations akan dijalankan secara otomatis setiap kali Anda melakukan push ke GitHub berkat file `docker/entrypoint.sh`.
