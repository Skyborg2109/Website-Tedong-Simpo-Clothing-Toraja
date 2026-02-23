# 🚀 QUICK START GUIDE - Tedong Simpo Clothes

## Langkah Cepat Memulai

### 1️⃣ Jalankan Server (Jika Belum)

```bash
cd c:\laragon\www\TedongSimpoClothes
php artisan serve
```

Server akan berjalan di: **http://127.0.0.1:8000**

---

### 2️⃣ Buka Website di Browser

Klik salah satu link berikut:

- 🏠 **Beranda**: http://127.0.0.1:8000
- 📖 **Tentang Kami**: http://127.0.0.1:8000/tentang-kami
- 🛍️ **Katalog**: http://127.0.0.1:8000/produk
- 👕 **Detail Produk**: http://127.0.0.1:8000/produk/1
- ⭐ **Testimoni**: http://127.0.0.1:8000/testimoni
- ❓ **FAQ**: http://127.0.0.1:8000/faq
- 📞 **Kontak**: http://127.0.0.1:8000/kontak

---

### 3️⃣ Fitur yang Bisa Dicoba

#### ✅ Di Halaman Beranda:
- Scroll untuk lihat animasi fade-in
- Klik "Lihat Katalog" untuk ke halaman produk
- Klik "Hubungi Kami" untuk WhatsApp
- Lihat floating WhatsApp button di kanan bawah

#### ✅ Di Halaman Katalog:
- Coba filter kategori, ukuran, harga
- Hover mouse di product card
- Klik "Detail" untuk lihat detail produk
- Klik "Pesan" untuk order via WhatsApp

#### ✅ Di Halaman Detail Produk:
- Klik thumbnail gambar
- Pilih ukuran dan warna
- Ubah quantity
- Klik "Pesan via WhatsApp"

#### ✅ Di Halaman FAQ:
- Lihat size chart untuk kaos dan hoodie
- Baca pertanyaan umum
- Klik "Chat WhatsApp" untuk tanya langsung

#### ✅ Di Halaman Kontak:
- Lihat Google Maps
- Isi contact form
- Klik WhatsApp button

---

### 4️⃣ Navigasi Website

**Desktop:**
- Gunakan menu di atas (Beranda, Tentang Kami, Katalog, dll)
- Hover untuk lihat underline effect

**Mobile:**
- Klik hamburger menu (☰) di kanan atas
- Menu akan slide dari samping
- Klik link untuk navigasi

---

### 5️⃣ Testing Responsive

**Cara 1: Resize Browser**
- Perkecil lebar browser window
- Lihat layout berubah otomatis

**Cara 2: Developer Tools**
- Tekan F12 di browser
- Klik icon device toolbar (Ctrl+Shift+M)
- Pilih device: iPhone, iPad, dll

---

## 📱 WhatsApp Integration

Semua tombol WhatsApp akan membuka chat dengan nomor: **0822-9147-5119**

Lokasi WhatsApp button:
1. ✅ Floating button (kanan bawah) - semua halaman
2. ✅ Hero section - beranda
3. ✅ Product cards - katalog
4. ✅ Detail produk - tombol pesan
5. ✅ Contact page - info cards
6. ✅ FAQ page - CTA

---

## 🎨 Fitur Visual yang Bisa Dilihat

### Animasi:
- ✨ Fade-in saat scroll
- ✨ Hover effect di product cards
- ✨ Pulse animation di WhatsApp button
- ✨ Smooth transitions
- ✨ Floating animation di hero image

### Warna Tema:
- ⚫ Hitam (#1a1a1a) - Primary
- 🔴 Merah Toraja (#C41E3A) - Secondary
- 🟡 Gold (#D4AF37) - Accent
- 🟤 Coklat Kayu (#8B4513) - Wood

### Typography:
- 📝 Playfair Display - Untuk judul
- 📝 Inter - Untuk body text

---

## 🔧 Troubleshooting

### Server Tidak Jalan?
```bash
# Stop server (Ctrl+C)
# Jalankan lagi
php artisan serve
```

### Port 8000 Sudah Dipakai?
```bash
# Gunakan port lain
php artisan serve --port=8001
# Akses di: http://127.0.0.1:8001
```

### CSS Tidak Muncul?
```bash
# Clear cache browser (Ctrl+Shift+R)
# Atau hard refresh (Ctrl+F5)
```

---

## 📝 Catatan Penting

### Gambar Produk
Saat ini menggunakan **placeholder**. Untuk production:
1. Siapkan foto produk berkualitas tinggi
2. Upload ke `public/images/products/`
3. Nama file: `kaos-toraja-1.jpg`, `hoodie-toraja-1.jpg`, dll

### Google Maps
Update koordinat yang tepat di file:
`resources/views/contact.blade.php`

### Instagram Link
Update link Instagram di footer:
`resources/views/layouts/app.blade.php`

---

## 📚 Dokumentasi Lengkap

Untuk informasi lebih detail, baca:
- 📖 **README_WEBSITE.md** - Dokumentasi lengkap
- 📊 **SUMMARY.md** - Ringkasan project

---

## 🎯 Checklist Testing

Pastikan semua ini berfungsi:

**Navigasi:**
- [ ] Menu desktop berfungsi
- [ ] Menu mobile (hamburger) berfungsi
- [ ] All links menuju halaman yang benar
- [ ] Active state di menu terlihat

**Halaman Beranda:**
- [ ] Hero section tampil dengan baik
- [ ] Features cards tampil
- [ ] Products tampil
- [ ] Testimonials tampil
- [ ] Animasi fade-in berjalan

**Halaman Katalog:**
- [ ] Filter tampil
- [ ] 6 produk tampil
- [ ] Hover effect berfungsi
- [ ] Link detail produk berfungsi

**Halaman Detail:**
- [ ] Gambar produk tampil
- [ ] Size selection berfungsi
- [ ] Color selection berfungsi
- [ ] Quantity picker berfungsi
- [ ] WhatsApp button berfungsi

**Halaman FAQ:**
- [ ] Size chart tampil dengan rapi
- [ ] FAQ accordion/list tampil
- [ ] Semua teks terbaca

**Halaman Kontak:**
- [ ] Google Maps tampil
- [ ] Contact form tampil
- [ ] WhatsApp button berfungsi
- [ ] Services cards tampil

**Global:**
- [ ] Footer tampil di semua halaman
- [ ] WhatsApp floating button tampil
- [ ] Responsive di mobile
- [ ] Responsive di tablet
- [ ] No console errors

---

## 🎉 Selesai!

Website Anda sudah siap digunakan!

**Nikmati website profesional Tedong Simpo Clothes! 🎊**

---

**Need Help?**
Baca dokumentasi lengkap atau hubungi developer Anda.

© 2026 Tedong Simpo Clothes
