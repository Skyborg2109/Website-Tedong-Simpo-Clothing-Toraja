# 📸 PANDUAN MENAMBAHKAN FOTO & LOGO DARI INSTAGRAM

## Informasi Instagram Tedong Simpo

**Instagram**: @tedongsimpo.toraja
**URL**: https://www.instagram.com/tedongsimpo.toraja/
**Followers**: 27K+
**Posts**: 258+
**Bio**: "Toraja clothing store & custom production (c.2010)"

---

## 🎨 CARA MENAMBAHKAN LOGO

### Langkah 1: Download Logo dari Instagram

1. Buka https://www.instagram.com/tedongsimpo.toraja/
2. Klik kanan pada profile picture
3. Save image as `logo.png` atau `logo.jpg`

### Langkah 2: Prepare Logo Files

Buat beberapa versi logo dengan ukuran berbeda:

```
public/images/
├── logo.png          (untuk navbar - 150x150px)
├── logo-square.png   (untuk favicon - 512x512px)
└── favicon.ico       (convert dari logo - 32x32px)
```

### Langkah 3: Update Navbar Logo

Edit file: `resources/views/layouts/app.blade.php`

**Ganti baris 33-36:**
```html
<!-- SEBELUM (menggunakan icon) -->
<a href="{{ route('home') }}" class="navbar-logo">
    <i class="fas fa-tshirt"></i>
    <span>Tedong</span> Simpo
</a>

<!-- SESUDAH (menggunakan logo image) -->
<a href="{{ route('home') }}" class="navbar-logo">
    <img src="{{ asset('images/logo.png') }}" alt="Tedong Simpo Logo" style="height: 40px;">
    <span>Tedong</span> Simpo
</a>
```

### Langkah 4: Update Favicon

Edit file: `resources/views/layouts/app.blade.php`

**Ganti baris 19:**
```html
<!-- SEBELUM -->
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

<!-- SESUDAH -->
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
```

---

## 📷 CARA MENAMBAHKAN FOTO PRODUK

### Langkah 1: Download Foto dari Instagram

1. Buka https://www.instagram.com/tedongsimpo.toraja/
2. Pilih foto produk yang bagus (kaos, hoodie, dll)
3. Download menggunakan:
   - Screenshot (lalu crop)
   - Instagram downloader tools
   - Atau minta foto original dari owner

### Langkah 2: Organize Foto Produk

Simpan foto di folder yang benar:

```
public/images/products/
├── kaos-toraja-1.jpg
├── kaos-toraja-2.jpg
├── kaos-toraja-3.jpg
├── kaos-toraja-4.jpg
├── hoodie-toraja-1.jpg
├── hoodie-toraja-2.jpg
└── ... (dan seterusnya)
```

**Rekomendasi Ukuran:**
- **Product Card**: 400x500px (portrait)
- **Product Detail**: 800x1000px (high quality)
- **Thumbnail**: 150x150px (square)

### Langkah 3: Compress Gambar

Untuk optimasi loading speed:
- Gunakan tools seperti TinyPNG.com
- Target size: < 200KB per gambar
- Format: JPG untuk foto, PNG untuk logo

---

## 🖼️ FOTO YANG DIBUTUHKAN

### Untuk Halaman Beranda:
- [ ] 3 foto best seller products
- [ ] 1 foto hero background (optional)

### Untuk Halaman Katalog:
- [ ] Minimal 6 foto produk berbeda
- [ ] Setiap produk: 1 foto utama

### Untuk Halaman Detail Produk:
- [ ] Setiap produk: 4 foto (depan, belakang, detail, model)

### Untuk Halaman About:
- [ ] 1 foto brand story (toko/produksi)
- [ ] 1 foto team/workshop (optional)

---

## 📝 TEMPLATE NAMA FILE

Gunakan naming convention yang konsisten:

```
Kaos:
- kaos-toraja-tedong-1.jpg
- kaos-toraja-tongkonan-1.jpg
- kaos-toraja-geometric-1.jpg

Hoodie:
- hoodie-toraja-patedong-1.jpg
- hoodie-toraja-premium-1.jpg

Jacket:
- jacket-toraja-1.jpg
```

---

## 🎯 CARA CEPAT: Download Bulk dari Instagram

### Menggunakan Browser Extension:

1. **Chrome/Edge**: Install "DownloadGram" atau "Instagram Downloader"
2. Buka profil @tedongsimpo.toraja
3. Klik extension
4. Select multiple photos
5. Download all

### Menggunakan Online Tools:

1. **Ingramer.com**
2. **DownloadGram.com**
3. **InstaSave.io**

Paste URL Instagram post, download foto.

---

## ✅ CHECKLIST SETELAH UPLOAD FOTO

### Logo:
- [ ] Logo uploaded ke `public/images/logo.png`
- [ ] Favicon created dan uploaded
- [ ] Navbar updated dengan logo image
- [ ] Test logo tampil di semua halaman

### Foto Produk:
- [ ] Minimal 6 foto produk uploaded
- [ ] Nama file sesuai convention
- [ ] Ukuran dan kualitas sudah optimal
- [ ] Test foto tampil di katalog
- [ ] Test foto tampil di detail produk

### Foto Lainnya:
- [ ] About page images (optional)
- [ ] Hero background (optional)
- [ ] Team photos (optional)

---

## 🔧 TROUBLESHOOTING

### Logo tidak muncul?
```bash
# Clear cache
php artisan cache:clear
php artisan view:clear

# Hard refresh browser
Ctrl + Shift + R (Windows)
Cmd + Shift + R (Mac)
```

### Foto produk tidak muncul?
1. Cek path file sudah benar
2. Cek nama file match dengan yang di code
3. Cek permission folder (755 untuk folder, 644 untuk file)

### Gambar terlalu besar/lambat loading?
1. Compress dengan TinyPNG
2. Resize ke ukuran yang sesuai
3. Convert ke WebP format (optional)

---

## 📊 REKOMENDASI FOTO DARI INSTAGRAM

Berdasarkan profil @tedongsimpo.toraja, ambil foto:

### Prioritas Tinggi:
1. **Kaos dengan desain Tedong** (kerbau Toraja)
2. **Hoodie dengan motif Pa'tedong**
3. **Kaos dengan desain Tongkonan**
4. **Product flat lay** (foto dari atas)
5. **Model wearing products**

### Prioritas Sedang:
6. Foto detail motif/desain
7. Foto packaging
8. Foto workshop/produksi
9. Foto customer testimonials

### Tips Memilih Foto:
- ✅ Pilih foto dengan lighting bagus
- ✅ Pilih foto yang menampilkan produk jelas
- ✅ Pilih foto dengan background clean
- ✅ Hindari foto blur atau gelap
- ✅ Pilih foto yang menunjukkan detail desain

---

## 🎨 EDIT FOTO (Optional)

Jika ingin edit foto sebelum upload:

### Tools Gratis:
- **Canva.com** - Edit online
- **Photopea.com** - Photoshop alternative
- **Remove.bg** - Remove background
- **TinyPNG.com** - Compress

### Edit yang Disarankan:
1. Crop ke aspect ratio yang sesuai
2. Adjust brightness/contrast
3. Remove background (untuk product shot)
4. Add watermark (optional)
5. Compress file size

---

## 📱 CONTOH STRUKTUR LENGKAP

```
public/
├── favicon.ico
├── images/
│   ├── logo.png
│   ├── logo-square.png
│   ├── favicon-32x32.png
│   ├── favicon-16x16.png
│   ├── apple-touch-icon.png
│   │
│   ├── products/
│   │   ├── kaos-toraja-tedong-1.jpg
│   │   ├── kaos-toraja-tedong-2.jpg
│   │   ├── kaos-toraja-tedong-3.jpg
│   │   ├── kaos-toraja-tedong-4.jpg
│   │   ├── kaos-toraja-tongkonan-1.jpg
│   │   ├── kaos-toraja-tongkonan-2.jpg
│   │   ├── hoodie-toraja-patedong-1.jpg
│   │   ├── hoodie-toraja-patedong-2.jpg
│   │   └── ... (lebih banyak produk)
│   │
│   └── about/
│       ├── brand-story.jpg
│       ├── workshop.jpg
│       └── team.jpg
```

---

## 🚀 NEXT STEPS

Setelah foto dan logo ditambahkan:

1. ✅ Test semua halaman
2. ✅ Verify gambar loading dengan baik
3. ✅ Check responsive di mobile
4. ✅ Optimize SEO (alt text untuk gambar)
5. ✅ Update product data dengan info real

---

## 📞 BUTUH BANTUAN?

Jika kesulitan download atau edit foto:
1. Hubungi owner Tedong Simpo untuk foto original
2. Minta akses ke Google Drive/Dropbox mereka
3. Atau gunakan foto dari Instagram sebagai temporary

---

**Instagram sudah terintegrasi!**
Link: https://www.instagram.com/tedongsimpo.toraja/

Sekarang tinggal download foto dan logo, lalu upload ke folder yang sesuai!

© 2026 Tedong Simpo Clothes
