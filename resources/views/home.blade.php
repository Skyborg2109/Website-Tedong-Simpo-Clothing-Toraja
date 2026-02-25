@extends('layouts.app')

@section('title', 'Tedong Simpo Clothes - Fashion Khas Toraja Modern')
@section('meta_description', 'Toko Pakaian Khas Toraja dengan Desain Modern. Kaos, Hoodie, dan Fashion Bertema Budaya Lokal Toraja. Rating 4.0 - Ambil di Toko & Pesan Antar.')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content fade-in-up">
            <div class="hero-badge">
                <i class="fas fa-star"></i>
                <span>Rating 4.0 di Google</span>
            </div>
            
            <h1 class="hero-title">
                Fashion Khas Toraja<br>
                <span style="color: var(--color-secondary);">Dengan Sentuhan Modern</span>
            </h1>
            
            <p class="hero-subtitle">
                Temukan koleksi kaos, hoodie, dan fashion bertema budaya lokal Toraja. 
                Desain eksklusif yang memadukan tradisi dengan gaya kontemporer.
            </p>
            
            <div class="hero-buttons">
                <a href="{{ route('products') }}" class="btn btn-primary">
                    <i class="fas fa-shopping-bag"></i>
                    Lihat Katalog
                </a>
                <a href="https://wa.me/6282291475119?text=Halo%20Tedong%20Simpo%20Clothes" 
                   class="btn btn-outline" 
                   style="color: white; border-color: white;"
                   target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
    

</section>

<!-- Features Section -->
<section class="features section">
    <div class="container">
        <h2 class="section-title">Mengapa Memilih Kami?</h2>
        
        <div class="features-grid">
            <div class="feature-card fade-in-up">
                <div class="feature-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <h3 class="feature-title">Desain Eksklusif</h3>
                <p class="feature-description">
                    Desain khas Toraja yang unik dan tidak pasaran, memadukan motif tradisional dengan gaya modern.
                </p>
            </div>
            
            <div class="feature-card fade-in-up" style="animation-delay: 0.1s;">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="feature-title">Kualitas Premium</h3>
                <p class="feature-description">
                    Bahan berkualitas tinggi, nyaman dipakai, dan tahan lama. Garansi kepuasan pelanggan.
                </p>
            </div>
            
            <div class="feature-card fade-in-up" style="animation-delay: 0.2s;">
                <div class="feature-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3 class="feature-title">Layanan Fleksibel</h3>
                <p class="feature-description">
                    Ambil di toko atau pesan antar. Kami siap melayani dengan cepat dan profesional.
                </p>
            </div>
            
            <div class="feature-card fade-in-up" style="animation-delay: 0.3s;">
                <div class="feature-icon">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <h3 class="feature-title">Tukar Ukuran Mudah</h3>
                <p class="feature-description">
                    Salah ukuran? Tenang! Kami menyediakan layanan tukar ukuran yang mudah dan cepat.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Best Seller Products -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Produk Best Seller</h2>
        
        <div class="products-grid">
            @forelse($products as $product)
            <div class="product-card fade-in-up" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                @if($product->is_featured && $loop->first)
                    <div class="product-badge">Best Seller</div>
                @elseif($loop->index < 2)
                    <div class="product-badge">New</div>
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
            <div style="grid-column: 1 / -1; text-align: center; padding: 3rem;">
                <p>Belum ada produk yang tersedia saat ini.</p>
            </div>
            @endforelse
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('products') }}" class="btn btn-secondary">
                <i class="fas fa-th"></i>
                Lihat Semua Produk
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials section">
    <div class="container">
        <h2 class="section-title">Apa Kata Pelanggan Kami?</h2>
        
        <div class="testimonials-grid">
            <div class="testimonial-card fade-in-up">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">M</div>
                    <div class="testimonial-info">
                        <h4>Maria Simbolon</h4>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="testimonial-text">
                    "Desainnya keren banget! Bahan kaosnya juga nyaman dan tidak panas. 
                    Cocok banget buat oleh-oleh khas Toraja. Pasti beli lagi!"
                </p>
            </div>

            <div class="testimonial-card fade-in-up" style="animation-delay: 0.1s;">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">R</div>
                    <div class="testimonial-info">
                        <h4>Ricky Paseru</h4>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="testimonial-text">
                    "Hoodie-nya mantap! Tebal, hangat, dan desain Toraja-nya elegan. 
                    Pelayanannya juga ramah dan cepat. Recommended!"
                </p>
            </div>

            <div class="testimonial-card fade-in-up" style="animation-delay: 0.2s;">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">S</div>
                    <div class="testimonial-info">
                        <h4>Siska Tandililing</h4>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="testimonial-text">
                    "Senang banget bisa dapat kaos dengan motif budaya Toraja yang modern. 
                    Kualitas oke, harga terjangkau. Terima kasih Tedong Simpo!"
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('testimonials') }}" class="btn btn-outline" style="color: white; border-color: white;">
                <i class="fas fa-comments"></i>
                Lihat Semua Testimoni
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--color-light);">
    <div class="container" style="text-align: center;">
        <h2 class="section-title">Siap Berbelanja?</h2>
        <p style="max-width: 600px; margin: 0 auto 2rem; color: var(--color-gray); font-size: 1.125rem;">
            Kunjungi toko kami atau hubungi via WhatsApp untuk pemesanan. 
            Kami siap melayani Anda dengan sepenuh hati!
        </p>
        
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('contact') }}" class="btn btn-secondary">
                <i class="fas fa-map-marker-alt"></i>
                Lokasi Toko
            </a>
            <a href="https://wa.me/6282291475119?text=Halo%20Tedong%20Simpo%20Clothes" 
               class="btn btn-primary" 
               target="_blank">
                <i class="fab fa-whatsapp"></i>
                Chat WhatsApp
            </a>
        </div>

        <div style="margin-top: 3rem; padding: 2rem; background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; text-align: center;">
                <div>
                    <div style="font-size: 2rem; color: var(--color-secondary); margin-bottom: 0.5rem;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Jam Operasional</h4>
                    <p style="color: var(--color-gray);">Buka hingga 21.00</p>
                </div>
                
                <div>
                    <div style="font-size: 2rem; color: var(--color-accent); margin-bottom: 0.5rem;">
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Rating Google</h4>
                    <p style="color: var(--color-gray);">4.0 (25 ulasan)</p>
                </div>
                
                <div>
                    <div style="font-size: 2rem; color: var(--color-secondary); margin-bottom: 0.5rem;">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h4 style="font-weight: 700; margin-bottom: 0.5rem;">Layanan</h4>
                    <p style="color: var(--color-gray);">Ambil di Toko & Pesan Antar</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in-up').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(el);
    });
</script>
@endpush
