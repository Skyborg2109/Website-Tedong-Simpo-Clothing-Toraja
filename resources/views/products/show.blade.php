@extends('layouts.app')

@section('title', $product->name . ' - Tedong Simpo Clothes')
@section('meta_description', Str::limit($product->description, 160))

@section('content')
<!-- Product Detail -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
            <!-- Product Images -->
            <div>
                <div class="main-image-container" style="background: var(--color-light); border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 1rem; position: relative;">
                    @if($product->main_image || ($product->images && count($product->images) > 0))
                        <button class="image-nav-btn nav-prev" onclick="rotateImage(-1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="image-nav-btn nav-next" onclick="rotateImage(1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    @endif

                    @if($product->main_image)
                        <img src="{{ asset('storage/' . $product->main_image) }}" 
                             alt="{{ $product->name }}" 
                             style="width: 100%; height: auto;"
                             id="mainImage"
                             onerror="this.parentElement.innerHTML='<div style=\'width:100%;height:400px;background:#f5f5f5;display:flex;align-items:center;justify-content:center;color:#ccc\'><i class=\'fas fa-image fa-4x\'></i></div>'">
                    @else
                        <div style="width:100%;height:400px;background:#f5f5f5;display:flex;align-items:center;justify-content:center;color:#ccc">
                            <i class="fas fa-image fa-4x"></i>
                        </div>
                    @endif
                </div>
                
                <!-- Thumbnail Gallery -->
                @if($product->images && count($product->images) > 0)
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem;">
                    <div class="thumbnail-item active" style="background: var(--color-light); border-radius: var(--radius-md); overflow: hidden; cursor: pointer; border: 2px solid var(--color-secondary); transition: var(--transition-base);" 
                         onclick="changeImage(this, '{{ asset('storage/' . $product->main_image) }}')">
                        <img src="{{ asset('storage/' . $product->main_image) }}" 
                             alt="{{ $product->name }}" 
                             style="width: 100%; height: 100%; object-fit: cover; aspect-ratio: 1/1;">
                    </div>
                    @foreach($product->images as $image)
                    <div class="thumbnail-item" style="background: var(--color-light); border-radius: var(--radius-md); overflow: hidden; cursor: pointer; border: 2px solid transparent; transition: var(--transition-base);" 
                         onclick="changeImage(this, '{{ asset('storage/' . $image) }}')"
                         onmouseover="if(!this.classList.contains('active')) this.style.borderColor='var(--color-gray)'"
                         onmouseout="if(!this.classList.contains('active')) this.style.borderColor='transparent'">
                        <img src="{{ asset('storage/' . $image) }}" 
                             alt="{{ $product->name }}" 
                             style="width: 100%; height: 100%; object-fit: cover; aspect-ratio: 1/1;">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Product Info -->
            <div>
                <div style="margin-bottom: 1rem;">
                    <span style="display: inline-block; background: var(--color-secondary); color: white; padding: 0.375rem 0.75rem; border-radius: var(--radius-sm); font-size: 0.875rem; font-weight: 600;">
                        {{ $product->category }}
                    </span>
                    @if(!$product->is_active)
                    <span style="display: inline-block; background: var(--color-gray); color: white; padding: 0.375rem 0.75rem; border-radius: var(--radius-sm); font-size: 0.875rem; font-weight: 600; margin-left: 0.5rem;">
                        Stok Habis
                    </span>
                    @endif
                </div>

                <h1 style="font-family: var(--font-display); font-size: 2.5rem; margin-bottom: 1rem; color: var(--color-primary); line-height: 1.2;">
                    {{ $product->name }}
                </h1>

                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <span style="color: var(--color-accent); font-size: 1.25rem;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                        <span style="font-weight: 600; color: var(--color-primary);">(5.0)</span>
                    </div>
                </div>

                <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-secondary); margin-bottom: 1.5rem; line-height: 1;">
                    @if($product->discount_price)
                        <span style="text-decoration: line-through; color: var(--color-gray); font-size: 1.5rem; margin-right: 10px; font-weight: 400;">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </span>
                        Rp {{ number_format($product->discount_price, 0, ',', '.') }}
                    @else
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    @endif
                </div>

                <div style="line-height: 1.8; color: var(--color-dark-gray); margin-bottom: 2rem;">
                    {!! nl2br(e($product->description)) !!}
                </div>

                <!-- Product Specifications -->
                <div style="background: var(--color-light); padding: 1.5rem; border-radius: var(--radius-lg); margin-bottom: 2rem;">
                    <h3 style="font-weight: 700; margin-bottom: 1rem; color: var(--color-primary); display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-info-circle"></i> Spesifikasi Produk
                    </h3>
                    <div style="display: grid; gap: 0.75rem;">
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--color-gray);">SKU:</span>
                            <span style="font-weight: 600;">{{ $product->sku }}</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--color-gray);">Stok:</span>
                            <span style="font-weight: 600; color: {{ $product->stock > 0 ? 'var(--color-secondary)' : 'var(--color-gray)' }};">
                                {{ $product->stock > 0 ? $product->stock . ' pcs' : 'Habis' }}
                            </span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--color-gray);">Kategori:</span>
                            <span style="font-weight: 600;">{{ $product->category }}</span>
                        </div>
                    </div>
                </div>

                @if($product->is_active && $product->stock > 0)
                <form action="https://wa.me/6282291475119" method="get" target="_blank" id="orderForm">
                    <input type="hidden" name="text" id="whatsappMessage">
                    
                    <!-- Size Selection -->
                    @if($product->sizes && count($product->sizes) > 0)
                    <div style="margin-bottom: 2rem;">
                        <label style="display: block; font-weight: 700; margin-bottom: 0.75rem; color: var(--color-primary);">
                            <i class="fas fa-ruler"></i> Pilih Ukuran:
                        </label>
                        <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
                            @foreach($product->sizes as $size)
                            <label class="option-radio">
                                <input type="radio" name="size" value="{{ $size }}" required>
                                <span>{{ $size }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Color Selection -->
                    @if($product->colors && count($product->colors) > 0)
                    <div style="margin-bottom: 2rem;">
                        <label style="display: block; font-weight: 700; margin-bottom: 0.75rem; color: var(--color-primary);">
                            <i class="fas fa-palette"></i> Pilih Warna:
                        </label>
                        <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
                            @foreach($product->colors as $color)
                            <label class="option-radio">
                                <input type="radio" name="color" value="{{ $color }}" required>
                                <span>{{ $color }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Quantity -->
                    <div style="margin-bottom: 2rem;">
                        <label style="display: block; font-weight: 700; margin-bottom: 0.75rem; color: var(--color-primary);">
                            <i class="fas fa-shopping-cart"></i> Jumlah:
                        </label>
                        <div style="display: flex; align-items: center; gap: 1rem;">
                            <button type="button" onclick="updateQty(-1)" style="width: 40px; height: 40px; border: 2px solid var(--color-primary); border-radius: var(--radius-md); background: white; font-weight: 700; cursor: pointer;">-</button>
                            <input type="number" name="qty" id="qty" value="1" min="1" max="{{ $product->stock }}" style="width: 80px; padding: 0.5rem; text-align: center; border: 2px solid var(--color-primary); border-radius: var(--radius-md); font-weight: 600;" onchange="updateMessage()">
                            <button type="button" onclick="updateQty(1)" style="width: 40px; height: 40px; border: 2px solid var(--color-primary); border-radius: var(--radius-md); background: white; font-weight: 700; cursor: pointer;">+</button>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div style="display: flex; gap: 1rem; margin-bottom: 2rem;">
                        <button type="submit" class="btn btn-primary" style="flex: 1; justify-content: center; font-size: 1.1rem; padding: 1rem;">
                            <i class="fab fa-whatsapp"></i> Pesan Sekarang
                        </button>
                    </div>
                </form>
                @endif

                <!-- Additional Info -->
                <div style="background: var(--color-light); padding: 1.5rem; border-radius: var(--radius-lg);">
                    <div style="display: grid; gap: 1rem;">
                        <div style="display: flex; align-items: center; gap: 1rem;">
                            <i class="fas fa-shipping-fast" style="font-size: 1.5rem; color: var(--color-secondary);"></i>
                            <div>
                                <div style="font-weight: 600;">Pengiriman Cepat</div>
                                <div style="font-size: 0.875rem; color: var(--color-gray);">Melayani pengiriman ke seluruh Indonesia</div>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 1rem;">
                            <i class="fas fa-shield-alt" style="font-size: 1.5rem; color: var(--color-accent);"></i>
                            <div>
                                <div style="font-weight: 600;">Jaminan Kualitas</div>
                                <div style="font-size: 0.875rem; color: var(--color-gray);">Produk asli khas Toraja dengan kualitas terbaik</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
@if(isset($relatedProducts) && $relatedProducts->count() > 0)
<section class="section" style="background: var(--color-light);">
    <div class="container">
        <h2 class="section-title">Produk Terkait</h2>
        
        <div class="products-grid" style="margin-top: 3rem;">
            @foreach($relatedProducts as $related)
            <div class="product-card">
                <div class="product-image">
                    @if($related->main_image)
                        <img src="{{ asset('storage/' . $related->main_image) }}" 
                             alt="{{ $related->name }}" 
                             onerror="this.parentElement.innerHTML='<div style=\'width:100%;height:100%;background:#f5f5f5;display:flex;align-items:center;justify-content:center;color:#ccc\'><i class=\'fas fa-image fa-2x\'></i></div>'">
                    @else
                        <div style="width:100%;height:100%;background:#f5f5f5;display:flex;align-items:center;justify-content:center;color:#ccc">
                            <i class="fas fa-image fa-2x"></i>
                        </div>
                    @endif
                </div>
                <div class="product-info">
                    <div class="product-category">{{ $related->category }}</div>
                    <h3 class="product-title">{{ $related->name }}</h3>
                    <div class="product-price">
                        @if($related->discount_price)
                            <span style="text-decoration: line-through; color: #999; font-size: 0.9rem;">Rp {{ number_format($related->price, 0, ',', '.') }}</span>
                            <span style="color: var(--color-secondary);">Rp {{ number_format($related->discount_price, 0, ',', '.') }}</span>
                        @else
                            Rp {{ number_format($related->price, 0, ',', '.') }}
                        @endif
                    </div>
                    <div class="product-actions">
                        <a href="{{ route('products.show', $related->id) }}" class="btn btn-outline">
                            <i class="fas fa-eye"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection

@push('styles')
<style>
    .option-radio input {
        display: none;
    }
    
    .option-radio span {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        border: 2px solid var(--color-primary);
        border-radius: var(--radius-md);
        background: white;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition-base);
    }
    
    .option-radio input:checked + span {
        background: var(--color-primary);
        color: white;
    }
    
    .option-radio span:hover {
        border-color: var(--color-secondary);
        color: var(--color-secondary);
    }
    
    .option-radio input:checked + span:hover {
        color: white;
    }

    /* Image Navigation */
    .image-nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.7);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        transition: var(--transition-base);
        color: var(--color-primary);
        font-size: 1.2rem;
        z-index: 10;
        opacity: 0;
    }

    .main-image-container:hover .image-nav-btn {
        opacity: 1;
    }

    .image-nav-btn:hover {
        background: white;
        color: var(--color-secondary);
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .nav-prev { left: 1rem; }
    .nav-next { right: 1rem; }

    @media (max-width: 768px) {
        section > .container > div[style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
        }
        
        .image-nav-btn {
            opacity: 1; /* Always show specific arrows on mobile */
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Image Gallery Logic
    let currentImageIndex = 0;
    const images = [
        "{{ asset('storage/' . $product->main_image) }}",
        @if($product->images)
            @foreach($product->images as $image)
                "{{ asset('storage/' . $image) }}",
            @endforeach
        @endif
    ];

    function changeImage(element, src) {
        document.getElementById('mainImage').src = src;
        
        // Update index based on src
        currentImageIndex = images.indexOf(src);

        // Remove active class from all thumbnails
        var thumbnails = document.querySelectorAll('.thumbnail-item');
        thumbnails.forEach(t => {
            t.style.borderColor = 'transparent';
            t.classList.remove('active');
        });
        
        if (element) {
            // Add active class to clicked thumbnail
            element.style.borderColor = 'var(--color-secondary)';
            element.classList.add('active');
        }
    }

    function rotateImage(direction) {
        if (images.length <= 1) return;

        currentImageIndex += direction;

        if (currentImageIndex >= images.length) {
            currentImageIndex = 0;
        } else if (currentImageIndex < 0) {
            currentImageIndex = images.length - 1;
        }

        const newSrc = images[currentImageIndex];
        const mainImage = document.getElementById('mainImage');
        mainImage.src = newSrc;
        
        // Update active thumbnail
        const thumbnails = document.querySelectorAll('.thumbnail-item');
        thumbnails.forEach((t, index) => {
            if (index === currentImageIndex) {
                t.style.borderColor = 'var(--color-secondary)';
                t.classList.add('active');
            } else {
                t.style.borderColor = 'transparent';
                t.classList.remove('active');
            }
        });
    }

    function updateQty(change) {
        var qtyInput = document.getElementById('qty');
        var currentQty = parseInt(qtyInput.value);
        var maxQty = parseInt(qtyInput.getAttribute('max'));
        var newQty = currentQty + change;
        
        if(newQty >= 1 && newQty <= maxQty) {
            qtyInput.value = newQty;
            updateMessage();
        }
    }

    function updateMessage() {
        var productName = "{{ $product->name }}";
        var qty = document.getElementById('qty').value;
        var size = document.querySelector('input[name="size"]:checked')?.value || '-';
        var color = document.querySelector('input[name="color"]:checked')?.value || '-';
        
        var message = `Halo Tedong Simpo, saya ingin memesan:\n\n` +
                      `Produk: ${productName}\n` +
                      `Jumlah: ${qty}\n` +
                      `Ukuran: ${size}\n` +
                      `Warna: ${color}\n\n` +
                      `Mohon info ketersediaannya. Terima kasih.`;
                      
        document.getElementById('whatsappMessage').value = message;
    }

    // Initialize message on load and change
    document.addEventListener('DOMContentLoaded', function() {
        var inputs = document.querySelectorAll('input[type="radio"], input[type="number"]');
        inputs.forEach(input => {
            input.addEventListener('change', updateMessage);
        });
        updateMessage(); // Initial call
        
        // Add submit listener to validate radio buttons if needed
        document.getElementById('orderForm').addEventListener('submit', function(e) {
            updateMessage(); // Ensure message is updated before submit
        });
    });
</script>
@endpush
