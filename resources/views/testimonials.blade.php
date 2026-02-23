@extends('layouts.app')

@section('title', 'Testimoni Pelanggan - Tedong Simpo Clothes')
@section('meta_description', 'Baca testimoni dan ulasan pelanggan Tedong Simpo Clothes. Rating 4.0 dari 25 ulasan Google. Kepuasan pelanggan adalah prioritas kami.')

@section('content')
<!-- Page Header -->
<section class="section" style="background: linear-gradient(135deg, var(--color-primary), #2d2d2d); color: white; padding: 4rem 0 3rem;">
    <div class="container" style="text-align: center;">
        <h1 style="font-family: var(--font-display); font-size: 3rem; margin-bottom: 1rem;">Testimoni Pelanggan</h1>
        <p style="font-size: 1.25rem; opacity: 0.9;">Apa Kata Mereka yang Sudah Berbelanja</p>
        <div style="margin-top: 2rem;">
            <div style="display: inline-flex; align-items: center; gap: 1rem; background: rgba(255,255,255,0.1); padding: 1rem 2rem; border-radius: var(--radius-lg); backdrop-filter: blur(10px);">
                <span style="font-size: 3rem; color: var(--color-accent);">★</span>
                <div style="text-align: left;">
                    <div style="font-size: 2rem; font-weight: 700;">4.0</div>
                    <div style="font-size: 0.875rem; opacity: 0.9;">dari 25 ulasan</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Grid -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
            <!-- Testimonial 1 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--color-secondary);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--color-secondary); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">
                        M
                    </div>
                    <div>
                        <h4 style="font-weight: 700; margin-bottom: 0.25rem;">Maria Simbolon</h4>
                        <div style="color: var(--color-accent); font-size: 1.125rem;">★★★★★</div>
                    </div>
                </div>
                <p style="line-height: 1.8; color: var(--color-dark-gray); font-style: italic; margin-bottom: 1rem;">
                    "Desainnya keren banget! Bahan kaosnya juga nyaman dan tidak panas. Cocok banget buat oleh-oleh khas Toraja. Pasti beli lagi!"
                </p>
                <div style="font-size: 0.875rem; color: var(--color-gray);">
                    <i class="fas fa-calendar"></i> 2 minggu yang lalu
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--color-accent);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--color-accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">
                        R
                    </div>
                    <div>
                        <h4 style="font-weight: 700; margin-bottom: 0.25rem;">Ricky Paseru</h4>
                        <div style="color: var(--color-accent); font-size: 1.125rem;">★★★★½</div>
                    </div>
                </div>
                <p style="line-height: 1.8; color: var(--color-dark-gray); font-style: italic; margin-bottom: 1rem;">
                    "Hoodie-nya mantap! Tebal, hangat, dan desain Toraja-nya elegan. Pelayanannya juga ramah dan cepat. Recommended!"
                </p>
                <div style="font-size: 0.875rem; color: var(--color-gray);">
                    <i class="fas fa-calendar"></i> 1 bulan yang lalu
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--color-secondary);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--color-secondary); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">
                        S
                    </div>
                    <div>
                        <h4 style="font-weight: 700; margin-bottom: 0.25rem;">Siska Tandililing</h4>
                        <div style="color: var(--color-accent); font-size: 1.125rem;">★★★★★</div>
                    </div>
                </div>
                <p style="line-height: 1.8; color: var(--color-dark-gray); font-style: italic; margin-bottom: 1rem;">
                    "Senang banget bisa dapat kaos dengan motif budaya Toraja yang modern. Kualitas oke, harga terjangkau. Terima kasih Tedong Simpo!"
                </p>
                <div style="font-size: 0.875rem; color: var(--color-gray);">
                    <i class="fas fa-calendar"></i> 3 minggu yang lalu
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--color-wood);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--color-wood); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">
                        D
                    </div>
                    <div>
                        <h4 style="font-weight: 700; margin-bottom: 0.25rem;">Daniel Rante</h4>
                        <div style="color: var(--color-accent); font-size: 1.125rem;">★★★★☆</div>
                    </div>
                </div>
                <p style="line-height: 1.8; color: var(--color-dark-gray); font-style: italic; margin-bottom: 1rem;">
                    "Beli untuk oleh-oleh keluarga di Jakarta. Mereka suka banget sama desainnya yang unik. Pengiriman juga cepat."
                </p>
                <div style="font-size: 0.875rem; color: var(--color-gray);">
                    <i class="fas fa-calendar"></i> 1 minggu yang lalu
                </div>
            </div>

            <!-- Testimonial 5 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--color-secondary);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--color-secondary); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">
                        A
                    </div>
                    <div>
                        <h4 style="font-weight: 700; margin-bottom: 0.25rem;">Anastasia Lolo</h4>
                        <div style="color: var(--color-accent); font-size: 1.125rem;">★★★★★</div>
                    </div>
                </div>
                <p style="line-height: 1.8; color: var(--color-dark-gray); font-style: italic; margin-bottom: 1rem;">
                    "Kualitas bahan bagus, jahitan rapi. Adminnya responsif banget pas tanya-tanya ukuran. Puas belanja di sini!"
                </p>
                <div style="font-size: 0.875rem; color: var(--color-gray);">
                    <i class="fas fa-calendar"></i> 2 minggu yang lalu
                </div>
            </div>

            <!-- Testimonial 6 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border-left: 4px solid var(--color-accent);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--color-accent); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">
                        P
                    </div>
                    <div>
                        <h4 style="font-weight: 700; margin-bottom: 0.25rem;">Petrus Sarungallo</h4>
                        <div style="color: var(--color-accent); font-size: 1.125rem;">★★★★☆</div>
                    </div>
                </div>
                <p style="line-height: 1.8; color: var(--color-dark-gray); font-style: italic; margin-bottom: 1rem;">
                    "Hoodie-nya tebal dan hangat, cocok untuk cuaca Toraja. Desainnya juga keren, bangga pakai produk lokal!"
                </p>
                <div style="font-size: 0.875rem; color: var(--color-gray);">
                    <i class="fas fa-calendar"></i> 3 minggu yang lalu
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rating Breakdown -->
<section class="section" style="background: var(--color-light);">
    <div class="container">
        <h2 class="section-title">Rincian Rating</h2>
        
        <div style="max-width: 600px; margin: 3rem auto 0;">
            @php
                $ratings = [
                    5 => 60,
                    4 => 25,
                    3 => 10,
                    2 => 3,
                    1 => 2
                ];
            @endphp
            
            @foreach($ratings as $star => $percentage)
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                <div style="width: 80px; display: flex; align-items: center; gap: 0.25rem; color: var(--color-accent); font-weight: 600;">
                    {{ $star }} <i class="fas fa-star"></i>
                </div>
                <div style="flex: 1; height: 10px; background: #e5e7eb; border-radius: 10px; overflow: hidden;">
                    <div style="width: {{ $percentage }}%; height: 100%; background: linear-gradient(90deg, var(--color-secondary), var(--color-accent)); transition: var(--transition-slow);"></div>
                </div>
                <div style="width: 60px; text-align: right; font-weight: 600; color: var(--color-gray);">
                    {{ $percentage }}%
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container" style="text-align: center;">
        <h2 style="font-family: var(--font-display); font-size: 2.5rem; margin-bottom: 1rem;">
            Bergabunglah dengan Pelanggan Puas Kami
        </h2>
        <p style="font-size: 1.125rem; color: var(--color-gray); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Rasakan sendiri kualitas produk dan pelayanan terbaik dari Tedong Simpo Clothes
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('products') }}" class="btn btn-primary">
                <i class="fas fa-shopping-bag"></i>
                Belanja Sekarang
            </a>
            <a href="https://wa.me/6282291475119?text=Halo%20Tedong%20Simpo%20Clothes" 
               class="btn btn-secondary" 
               target="_blank">
                <i class="fab fa-whatsapp"></i>
                Hubungi Kami
            </a>
        </div>
    </div>
</section>
@endsection
