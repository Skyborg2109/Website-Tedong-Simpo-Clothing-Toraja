# Tedong Simpo Clothes - Website Profesional

Website e-commerce profesional untuk toko pakaian khas Toraja dengan desain modern dan elegan.

## 🎨 Fitur Website

### ✅ Halaman yang Sudah Dibuat

1. **Halaman Beranda (Home)**
   - Hero section dengan branding Toraja modern
   - Highlight produk best seller
   - Testimoni pelanggan
   - Informasi layanan (Ambil di toko / Pesan antar)
   - CTA (Call to Action) buttons
   - Animasi smooth dan responsif

2. **Halaman Tentang Kami (About)**
   - Cerita brand Tedong Simpo
   - Filosofi desain Toraja
   - Visi & Misi perusahaan
   - Komitmen kualitas dan pelayanan
   - Desain modern dengan grid layout

3. **Halaman Katalog Produk (Products)**
   - Filter berdasarkan kategori (Kaos, Hoodie, dll)
   - Filter ukuran (S, M, L, XL, XXL)
   - Filter harga
   - Grid produk dengan informasi lengkap
   - Rating dan review produk
   - Tombol pesan via WhatsApp
   - 6 produk sample dengan detail lengkap

4. **Halaman Detail Produk (Product Detail)**
   - Galeri foto produk
   - Pilih ukuran dan warna
   - Pilih jumlah pembelian
   - Informasi bahan dan spesifikasi
   - Tombol pesan via WhatsApp
   - Produk terkait
   - Informasi layanan (gratis ongkir, tukar ukuran, garansi)

5. **Halaman Testimoni (Testimonials)**
   - Review pelanggan dengan rating
   - Breakdown rating 1-5 bintang
   - Visualisasi persentase rating
   - 6 testimoni sample
   - Desain card yang menarik

6. **Halaman Kontak (Contact)**
   - Google Maps embed untuk lokasi toko
   - Informasi kontak lengkap
   - Form kontak interaktif
   - Jam operasional
   - Informasi layanan
   - Link WhatsApp langsung

### 🎯 Fitur Utama

- **Responsive Design**: Tampil sempurna di desktop, tablet, dan mobile
- **Modern Ethnic Theme**: Kombinasi warna hitam, merah Toraja, dan gold
- **WhatsApp Integration**: Tombol floating dan link langsung ke WhatsApp
- **Smooth Animations**: Fade-in effects dan hover animations
- **SEO Optimized**: Meta tags lengkap untuk setiap halaman
- **Professional Layout**: Grid system yang rapi dan modern
- **Interactive Elements**: Hover effects, transitions, dan micro-animations

## 🎨 Desain & Tema

### Warna Dominan
- **Hitam (#1a1a1a)**: Warna utama, elegan dan modern
- **Merah Toraja (#C41E3A)**: Warna sekunder, mencerminkan budaya Toraja
- **Gold (#D4AF37)**: Aksen, melambangkan kemewahan
- **Coklat Kayu (#8B4513)**: Warna tambahan, natural

### Typography
- **Font Display**: Playfair Display (untuk judul)
- **Font Primary**: Inter (untuk body text)
- **Kombinasi**: Elegan dan modern

### Komponen UI
- Navbar sticky dengan scroll effect
- Hero section dengan gradient background
- Product cards dengan hover effect
- Testimonial cards dengan glassmorphism
- Footer lengkap dengan informasi bisnis
- WhatsApp floating button dengan pulse animation

## 📁 Struktur File

```
TedongSimpoClothes/
├── public/
│   └── css/
│       └── style.css              # CSS utama dengan tema Toraja
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php      # Layout utama
│       ├── products/
│       │   ├── index.blade.php    # Katalog produk
│       │   └── show.blade.php     # Detail produk
│       ├── home.blade.php         # Halaman beranda
│       ├── about.blade.php        # Tentang kami
│       ├── testimonials.blade.php # Testimoni
│       └── contact.blade.php      # Kontak
└── routes/
    └── web.php                    # Routing
```

## 🚀 Cara Menjalankan

### 1. Pastikan Server Laravel Berjalan

```bash
php artisan serve
```

### 2. Akses Website

Buka browser dan kunjungi:
```
http://127.0.0.1:8000
```

### 3. Navigasi Website

- **Beranda**: http://127.0.0.1:8000/
- **Tentang Kami**: http://127.0.0.1:8000/tentang-kami
- **Katalog**: http://127.0.0.1:8000/produk
- **Detail Produk**: http://127.0.0.1:8000/produk/1
- **Testimoni**: http://127.0.0.1:8000/testimoni
- **Kontak**: http://127.0.0.1:8000/kontak

## 📱 Informasi Bisnis

### Tedong Simpo Clothes

**Alamat:**
Jl. Ratulangi No.21, Singki', Kec. Rantepao
Kabupaten Toraja Utara, Sulawesi Selatan 91835

**Kontak:**
- WhatsApp: 0822-9147-5119
- Instagram: instagram.com

**Jam Operasional:**
Buka hingga pukul 21.00

**Rating:**
⭐ 4.0 (25 ulasan Google)

**Layanan:**
- ✅ Ambil di toko
- ✅ Pesan antar
- ✅ Tukar ukuran gratis
- ✅ Garansi kualitas

## 🛠 Teknologi yang Digunakan

- **Framework**: Laravel 11
- **Frontend**: HTML5, CSS3, JavaScript
- **Font**: Google Fonts (Inter, Playfair Display)
- **Icons**: Font Awesome 6.5.1
- **Design**: Modern Ethnic Toraja Theme
- **Responsive**: Mobile-first approach

## 🎯 Target Market

1. Anak muda Toraja
2. Wisatawan
3. Pecinta budaya lokal
4. Pembeli oleh-oleh khas Toraja

## 📈 Strategi Digital Marketing

Website ini sudah dioptimasi untuk:
- ✅ SEO (Search Engine Optimization)
- ✅ Google Maps integration
- ✅ WhatsApp Business integration
- ✅ Social media ready
- ✅ Mobile-friendly
- ✅ Fast loading

### Kata Kunci SEO:
- Kaos Toraja
- Baju khas Toraja
- Hoodie Toraja
- Fashion Toraja
- Oleh-oleh Toraja
- Tedong Simpo

## 🔄 Langkah Selanjutnya (Opsional)

### Untuk Pengembangan Lebih Lanjut:

1. **Database Integration**
   - Buat migration untuk tabel products
   - Buat model Product
   - Implementasi CRUD produk

2. **Admin Dashboard**
   - Panel admin untuk manage produk
   - Update stok
   - Lihat pesanan

3. **Shopping Cart**
   - Keranjang belanja
   - Checkout process
   - Payment gateway integration

4. **User Authentication**
   - Register/Login pelanggan
   - Order history
   - Wishlist

5. **Advanced Features**
   - Search functionality
   - Product reviews
   - Newsletter subscription
   - Live chat

## 📝 Catatan Penting

1. **Gambar Produk**: Saat ini menggunakan placeholder. Ganti dengan foto produk asli di folder `public/images/products/`

2. **Google Maps**: Update koordinat yang tepat di halaman kontak

3. **WhatsApp Number**: Sudah terintegrasi dengan nomor 0822-9147-5119

4. **Instagram Link**: Update dengan link Instagram yang benar

5. **Favicon**: Tambahkan favicon.ico di folder public

## 🎨 Customization

### Mengubah Warna Tema:

Edit file `public/css/style.css` pada bagian CSS Variables:

```css
:root {
    --color-primary: #1a1a1a;        /* Hitam */
    --color-secondary: #C41E3A;      /* Merah Toraja */
    --color-accent: #D4AF37;         /* Gold */
    --color-wood: #8B4513;           /* Coklat Kayu */
}
```

### Menambah Produk Baru:

Edit file `resources/views/products/index.blade.php` dan tambahkan product card baru.

## 💡 Tips

1. **Optimasi Gambar**: Compress gambar produk untuk loading lebih cepat
2. **Backup Regular**: Selalu backup database dan file
3. **Update Content**: Update produk dan testimoni secara berkala
4. **Monitor Analytics**: Gunakan Google Analytics untuk tracking
5. **Customer Service**: Responsif di WhatsApp untuk meningkatkan konversi

## 📞 Support

Jika ada pertanyaan atau butuh bantuan, hubungi developer atau tim IT Anda.

---

**© 2026 Tedong Simpo Clothes. All Rights Reserved.**

Designed with ❤️ for Toraja
