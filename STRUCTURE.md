# 🗺️ STRUKTUR WEBSITE - Tedong Simpo Clothes

```
┌─────────────────────────────────────────────────────────────┐
│                    TEDONG SIMPO CLOTHES                      │
│                  Website Structure Map                       │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                      NAVIGATION BAR                          │
│  [Logo] Beranda | Tentang | Katalog | Testimoni | FAQ | Kontak │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                    1. HALAMAN BERANDA                        │
│                    Route: /                                  │
├─────────────────────────────────────────────────────────────┤
│  ┌─────────────────────────────────────────────────────┐   │
│  │  HERO SECTION                                        │   │
│  │  • Title: Fashion Khas Toraja                       │   │
│  │  • Subtitle & Description                           │   │
│  │  • CTA Buttons: [Lihat Katalog] [Hubungi Kami]     │   │
│  │  • Background: Gradient + Pattern                   │   │
│  └─────────────────────────────────────────────────────┘   │
│                                                              │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  FEATURES SECTION (4 Cards)                         │   │
│  │  [Desain Eksklusif] [Kualitas Premium]             │   │
│  │  [Layanan Fleksibel] [Tukar Ukuran Mudah]          │   │
│  └─────────────────────────────────────────────────────┘   │
│                                                              │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  BEST SELLER PRODUCTS (3 Products)                  │   │
│  │  [Product 1] [Product 2] [Product 3]                │   │
│  │  Each with: Image, Title, Price, Rating, CTA       │   │
│  └─────────────────────────────────────────────────────┘   │
│                                                              │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  TESTIMONIALS (3 Reviews)                           │   │
│  │  Customer reviews with ratings                      │   │
│  └─────────────────────────────────────────────────────┘   │
│                                                              │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  CTA SECTION                                         │   │
│  │  Business info + Action buttons                     │   │
│  └─────────────────────────────────────────────────────┘   │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                  2. HALAMAN TENTANG KAMI                     │
│                  Route: /tentang-kami                        │
├─────────────────────────────────────────────────────────────┤
│  • Page Header                                               │
│  • Brand Story (Text + Image)                               │
│  • Filosofi Desain (3 Cards)                                │
│  • Visi & Misi (2 Cards)                                    │
│  • Komitmen (3 Items)                                       │
│  • CTA Section                                              │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                  3. HALAMAN KATALOG PRODUK                   │
│                  Route: /produk                              │
├─────────────────────────────────────────────────────────────┤
│  • Page Header                                               │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  FILTERS                                             │   │
│  │  [Kategori ▼] [Ukuran ▼] [Harga ▼] [Filter]        │   │
│  └─────────────────────────────────────────────────────┘   │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  PRODUCTS GRID (6 Products)                         │   │
│  │  [P1] [P2] [P3]                                     │   │
│  │  [P4] [P5] [P6]                                     │   │
│  │  Each: Image, Category, Title, Price, Rating,      │   │
│  │        Sizes, [Detail] [Pesan]                      │   │
│  └─────────────────────────────────────────────────────┘   │
│  • Size Guide CTA                                           │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                  4. HALAMAN DETAIL PRODUK                    │
│                  Route: /produk/{id}                         │
├─────────────────────────────────────────────────────────────┤
│  ┌──────────────────────┬──────────────────────────────┐   │
│  │  IMAGE GALLERY       │  PRODUCT INFO                │   │
│  │  • Main Image        │  • Category Badge            │   │
│  │  • 4 Thumbnails      │  • Title                     │   │
│  │                      │  • Rating & Reviews          │   │
│  │                      │  • Price                     │   │
│  │                      │  • Description               │   │
│  │                      │  • Specifications            │   │
│  │                      │  • Size Selection            │   │
│  │                      │  • Color Selection           │   │
│  │                      │  • Quantity Picker           │   │
│  │                      │  • [Pesan WhatsApp] [Cart]   │   │
│  │                      │  • Service Info              │   │
│  └──────────────────────┴──────────────────────────────┘   │
│  • Related Products (3 items)                               │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                  5. HALAMAN TESTIMONI                        │
│                  Route: /testimoni                           │
├─────────────────────────────────────────────────────────────┤
│  • Page Header with Overall Rating (4.0)                    │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  TESTIMONIALS GRID (6 Reviews)                      │   │
│  │  [Review 1] [Review 2] [Review 3]                   │   │
│  │  [Review 4] [Review 5] [Review 6]                   │   │
│  │  Each: Avatar, Name, Rating, Text, Date             │   │
│  └─────────────────────────────────────────────────────┘   │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  RATING BREAKDOWN                                    │   │
│  │  5★ ████████████████████ 60%                        │   │
│  │  4★ ████████ 25%                                    │   │
│  │  3★ ███ 10%                                         │   │
│  │  2★ █ 3%                                            │   │
│  │  1★ █ 2%                                            │   │
│  └─────────────────────────────────────────────────────┘   │
│  • CTA Section                                              │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                  6. HALAMAN FAQ & PANDUAN                    │
│                  Route: /faq                                 │
├─────────────────────────────────────────────────────────────┤
│  • Page Header                                               │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  SIZE GUIDE                                          │   │
│  │  ┌────────────────────────────────────────────┐     │   │
│  │  │  KAOS SIZE CHART                           │     │   │
│  │  │  Size | Lebar | Panjang | Lengan          │     │   │
│  │  │  S-XXL with measurements                   │     │   │
│  │  └────────────────────────────────────────────┘     │   │
│  │  ┌────────────────────────────────────────────┐     │   │
│  │  │  HOODIE SIZE CHART                         │     │   │
│  │  │  Size | Lebar | Panjang | Lengan          │     │   │
│  │  │  M-XXL with measurements                   │     │   │
│  │  └────────────────────────────────────────────┘     │   │
│  └─────────────────────────────────────────────────────┘   │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  FAQ (8 Questions)                                   │   │
│  │  1. Cara memesan?                                   │   │
│  │  2. Tukar ukuran?                                   │   │
│  │  3. Waktu pengiriman?                               │   │
│  │  4. Minimal pembelian?                              │   │
│  │  5. Cara merawat?                                   │   │
│  │  6. Custom desain?                                  │   │
│  │  7. Garansi produk?                                 │   │
│  │  8. COD?                                            │   │
│  └─────────────────────────────────────────────────────┘   │
│  • CTA Section                                              │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                  7. HALAMAN KONTAK                           │
│                  Route: /kontak                              │
├─────────────────────────────────────────────────────────────┤
│  • Page Header                                               │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  CONTACT INFO CARDS (3 Cards)                       │   │
│  │  [Alamat Toko] [Telepon/WA] [Jam Operasional]      │   │
│  └─────────────────────────────────────────────────────┘   │
│  ┌──────────────────────┬──────────────────────────────┐   │
│  │  GOOGLE MAPS         │  CONTACT FORM                │   │
│  │  • Embedded Map      │  • Nama                      │   │
│  │  • Location Pin      │  • Email                     │   │
│  │  • [Open in Maps]    │  • WhatsApp                  │   │
│  │                      │  • Subjek                    │   │
│  │                      │  • Pesan                     │   │
│  │                      │  • [Kirim Pesan]             │   │
│  └──────────────────────┴──────────────────────────────┘   │
│  ┌─────────────────────────────────────────────────────┐   │
│  │  SERVICES (4 Cards)                                  │   │
│  │  [Ambil di Toko] [Pesan Antar]                      │   │
│  │  [Tukar Ukuran] [Customer Service]                  │   │
│  └─────────────────────────────────────────────────────┘   │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                      FOOTER (All Pages)                      │
├─────────────────────────────────────────────────────────────┤
│  ┌──────────┬──────────┬──────────┬──────────┐             │
│  │ About    │ Quick    │ Contact  │ Services │             │
│  │ Section  │ Links    │ Info     │ Info     │             │
│  │          │          │          │          │             │
│  │ • Desc   │ • Home   │ • Addr   │ • Pickup │             │
│  │ • Social │ • About  │ • Phone  │ • Deliv  │             │
│  │   Media  │ • Produk │ • Hours  │ • Return │             │
│  │          │ • Testi  │ • Rating │ • Warr   │             │
│  │          │ • FAQ    │          │          │             │
│  │          │ • Kontak │          │          │             │
│  └──────────┴──────────┴──────────┴──────────┘             │
│  ────────────────────────────────────────────               │
│  © 2026 Tedong Simpo Clothes. All Rights Reserved.         │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                  FLOATING ELEMENTS                           │
├─────────────────────────────────────────────────────────────┤
│  • WhatsApp Button (Bottom Right)                           │
│    - Pulse animation                                         │
│    - Click to chat: 0822-9147-5119                          │
│    - Available on all pages                                  │
└─────────────────────────────────────────────────────────────┘

═══════════════════════════════════════════════════════════════
                      TECHNICAL DETAILS
═══════════════════════════════════════════════════════════════

ROUTES:
├── GET  /                    → home.blade.php
├── GET  /tentang-kami        → about.blade.php
├── GET  /produk              → products/index.blade.php
├── GET  /produk/{id}         → products/show.blade.php
├── GET  /testimoni           → testimonials.blade.php
├── GET  /faq                 → faq.blade.php
└── GET  /kontak              → contact.blade.php

LAYOUT:
└── layouts/app.blade.php
    ├── Navigation Bar
    ├── @yield('content')
    ├── WhatsApp Floating Button
    └── Footer

ASSETS:
├── public/css/style.css      → Main stylesheet
└── Font Awesome 6.5.1        → Icons (CDN)

FEATURES:
├── Responsive Design         → Mobile, Tablet, Desktop
├── Smooth Animations         → Fade-in, Hover, Transitions
├── WhatsApp Integration      → Direct messaging
├── SEO Optimized            → Meta tags, Semantic HTML
└── Modern UI/UX             → Professional & Clean

COLOR SCHEME:
├── Primary:   #1a1a1a (Black)
├── Secondary: #C41E3A (Toraja Red)
├── Accent:    #D4AF37 (Gold)
└── Wood:      #8B4513 (Brown)

TYPOGRAPHY:
├── Display:   Playfair Display (Headings)
└── Primary:   Inter (Body Text)

═══════════════════════════════════════════════════════════════
                      USER FLOW
═══════════════════════════════════════════════════════════════

1. VISITOR ARRIVES
   └─> Landing Page (Home)
       ├─> Browse Features
       ├─> See Best Sellers
       ├─> Read Testimonials
       └─> Click CTA

2. EXPLORE PRODUCTS
   └─> Katalog Page
       ├─> Use Filters
       ├─> Browse Products
       └─> Click Product

3. VIEW DETAILS
   └─> Detail Product Page
       ├─> See Images
       ├─> Read Specs
       ├─> Select Size/Color
       └─> Order via WhatsApp

4. LEARN MORE
   ├─> About Page → Brand Story
   ├─> Testimonials → Reviews
   ├─> FAQ → Questions & Size Guide
   └─> Contact → Location & Form

5. CONTACT
   └─> Multiple Options:
       ├─> WhatsApp (Floating Button)
       ├─> WhatsApp (Product Pages)
       ├─> Contact Form
       └─> Visit Store (Maps)

═══════════════════════════════════════════════════════════════

Created with ❤️ for Tedong Simpo Clothes
© 2026 All Rights Reserved
