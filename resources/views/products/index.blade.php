@extends('layouts.app')

@section('title', 'Katalog Produk - Tedong Simpo Clothes')
@section('meta_description', 'Jelajahi koleksi lengkap kaos, hoodie, dan fashion khas Toraja. Filter berdasarkan kategori, ukuran, dan harga. Kualitas premium dengan desain eksklusif.')

@section('content')
<!-- Page Header -->
<section class="section" style="background: linear-gradient(135deg, var(--color-primary), #2d2d2d); color: white; padding: 4rem 0 3rem;">
    <div class="container" style="text-align: center;">
        <h1 style="font-family: var(--font-display); font-size: 3rem; margin-bottom: 1rem;">Katalog Produk</h1>
        <p style="font-size: 1.25rem; opacity: 0.9;">Temukan Fashion Khas Toraja Pilihan Anda</p>
    </div>
</section>

<!-- Filters & Products -->
<section class="section">
    <div class="container">
        <!-- Filter Section -->
        <div style="background: var(--color-light); padding: 2rem; border-radius: var(--radius-lg); margin-bottom: 3rem;">
            <form action="{{ route('products') }}" method="GET" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                <div>
                    <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-primary);">
                        <i class="fas fa-list"></i> Kategori
                    </label>
                    <select name="category" onchange="this.form.submit()" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: var(--radius-md); font-family: var(--font-primary);">
                        <option value="">Semua Kategori</option>
                        @foreach(['Kaos', 'Hoodie', 'Jacket', 'Sweater', 'Aksesoris'] as $cat)
                            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-primary);">
                        <i class="fas fa-tag"></i> Rentang Harga
                    </label>
                    <select name="price_range" onchange="this.form.submit()" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: var(--radius-md); font-family: var(--font-primary);">
                        <option value="">Semua Harga</option>
                        <option value="0-150000" {{ request('price_range') == '0-150000' ? 'selected' : '' }}>< Rp 150.000</option>
                        <option value="150000-250000" {{ request('price_range') == '150000-250000' ? 'selected' : '' }}>Rp 150.000 - 250.000</option>
                        <option value="250000-350000" {{ request('price_range') == '250000-350000' ? 'selected' : '' }}>Rp 250.000 - 350.000</option>
                        <option value="350000" {{ request('price_range') == '350000' ? 'selected' : '' }}>> Rp 350.000</option>
                    </select>
                </div>
                
                <div style="display: flex; align-items: flex-end;">
                    <a href="{{ route('products') }}" class="btn btn-secondary" style="width: 100%; text-align: center; justify-content: center;">
                        <i class="fas fa-sync-alt"></i> Reset Filter
                    </a>
                </div>
            </form>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            @forelse($products as $product)
            <div class="product-card">
                @if($product->is_featured)
                    <div class="product-badge">Featured</div>
                @endif

                <div class="stock-badge {{ $product->stock > 10 ? 'stock-available' : ($product->stock > 0 ? 'stock-low' : 'stock-out') }}">
                    <i class="fas {{ $product->stock > 10 ? 'fa-check-circle' : ($product->stock > 0 ? 'fa-exclamation-triangle' : 'fa-times-circle') }}"></i>
                    {{ $product->stock > 10 ? 'Tersedia' : ($product->stock > 0 ? 'Stok Terbatas' : 'Stok Habis') }}
                </div>
                
                <div class="product-image">
                    @if($product->main_image)
                        <img src="{{ asset('storage/' . $product->main_image) }}" 
                             alt="{{ $product->name }}" 
                             onerror="this.parentElement.innerHTML='<div style=\'width:100%;height:100%;background:#f5f5f5;display:flex;align-items:center;justify-content:center;color:#ccc\'><i class=\'fas fa-image fa-2x\'></i></div>'">
                    @else
                        <div style="width:100%;height:100%;background:#f5f5f5;display:flex;align-items:center;justify-content:center;color:#ccc">
                            <i class="fas fa-image fa-2x"></i>
                        </div>
                    @endif
                </div>
                
                <div class="product-info">
                    <div class="product-category">{{ $product->category }}</div>
                    <h3 class="product-title">{{ $product->name }}</h3>
                    <p style="font-size: 0.875rem; color: var(--color-gray); margin-bottom: 0.5rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 3em;">
                        {{ Str::limit($product->description, 100) }}
                    </p>
                    
                    <div class="product-price">
                        @if($product->discount_price)
                            <span style="text-decoration: line-through; color: #999; font-size: 0.9rem; margin-right: 5px;">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </span>
                            <span style="color: var(--color-secondary);">
                                Rp {{ number_format($product->discount_price, 0, ',', '.') }}
                            </span>
                        @else
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        @endif
                    </div>
                    
                    <div class="product-rating">
                        <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                        <span>(5.0)</span>
                    </div>
                    
                    @if($product->sizes && count($product->sizes) > 0)
                    <div style="margin-bottom: 1rem;">
                        <span style="font-size: 0.875rem; font-weight: 600; color: var(--color-primary);">Ukuran:</span>
                        <span style="font-size: 0.875rem; color: var(--color-gray);"> {{ implode(', ', $product->sizes) }}</span>
                    </div>
                    @endif
                    
                    <div class="product-actions">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline">
                            <i class="fas fa-eye"></i> Detail
                        </a>
                        <a href="https://wa.me/6282291475119?text=Halo,%20saya%20tertarik%20dengan%20produk%20{{ urlencode($product->name) }}" 
                           class="btn btn-primary" 
                           target="_blank">
                            <i class="fab fa-whatsapp"></i> Pesan
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 5rem 1rem;">
                <i class="fas fa-search" style="font-size: 4rem; color: #ddd; margin-bottom: 1rem;"></i>
                <h3 style="font-size: 1.5rem; color: var(--color-gray);">Tidak ada produk ditemukan</h3>
                <p style="color: #999;">Coba sesuaikan filter pencarian Anda</p>
                <a href="{{ route('products') }}" class="btn btn-secondary" style="margin-top: 1rem;">
                    Lihat Kategori Lain
                </a>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div style="margin-top: 3rem; display: flex; justify-content: center;">
            @if ($products->hasPages())
                <style>
                    .pagination { display: flex; list-style: none; gap: 0.5rem; }
                    .page-item a, .page-item span {
                        padding: 0.5rem 1rem;
                        border: 1px solid #e5e7eb;
                        border-radius: var(--radius-md);
                        color: var(--color-primary);
                        text-decoration: none;
                        transition: var(--transition-base);
                    }
                    .page-item.active span {
                        background: var(--color-secondary);
                        color: white;
                        border-color: var(--color-secondary);
                    }
                    .page-item a:hover {
                        background: #f3f4f6;
                    }
                </style>
                {{ $products->links() }}
            @endif
        </div>
    </div>
</section>

<!-- Size Guide CTA -->
<section class="section" style="background: var(--color-light);">
    <div class="container" style="text-align: center;">
        <h2 style="font-family: var(--font-display); font-size: 2rem; margin-bottom: 1rem;">
            Butuh Bantuan Memilih Ukuran?
        </h2>
        <p style="color: var(--color-gray); margin-bottom: 2rem;">
            Lihat panduan ukuran kami atau hubungi customer service untuk konsultasi gratis
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <button class="btn btn-secondary" onclick="alert('Size guide akan segera ditampilkan')">
                <i class="fas fa-ruler-combined"></i>
                Panduan Ukuran
            </button>
            <a href="https://wa.me/6282291475119?text=Halo,%20saya%20butuh%20bantuan%20memilih%20ukuran" 
               class="btn btn-primary" 
               target="_blank">
                <i class="fab fa-whatsapp"></i>
                Tanya Admin
            </a>
        </div>
    </div>
</section>
@endsection
