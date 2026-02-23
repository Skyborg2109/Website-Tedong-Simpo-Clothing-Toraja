@extends('layouts.app')

@section('title', 'Tentang Kami - Tedong Simpo Clothes')
@section('meta_description', 'Cerita brand Tedong Simpo Clothes, filosofi desain Toraja, visi & misi, dan komitmen kami terhadap kualitas dan pelayanan.')

@section('content')
<!-- Page Header -->
<section class="section" style="background: linear-gradient(135deg, var(--color-primary), #2d2d2d); color: white; padding: 4rem 0 3rem;">
    <div class="container" style="text-align: center;">
        <h1 style="font-family: var(--font-display); font-size: 3rem; margin-bottom: 1rem;">Tentang Kami</h1>
        <p style="font-size: 1.25rem; opacity: 0.9;">Cerita di Balik Tedong Simpo Clothes</p>
    </div>
</section>

<!-- Our Story -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
            <div>
                <h2 style="font-family: var(--font-display); font-size: 2.5rem; margin-bottom: 1.5rem; color: var(--color-primary);">
                    Cerita Brand Kami
                </h2>
                <p style="margin-bottom: 1rem; line-height: 1.8; color: var(--color-dark-gray);">
                    <strong>Tedong Simpo Clothes</strong> lahir dari kecintaan mendalam terhadap budaya Toraja dan keinginan untuk memperkenalkan kekayaan tradisi lokal kepada generasi muda dengan cara yang modern dan relevan.
                </p>
                <p style="margin-bottom: 1rem; line-height: 1.8; color: var(--color-dark-gray);">
                    Nama "Tedong Simpo" sendiri terinspirasi dari kerbau Toraja (Tedong) yang merupakan simbol kekuatan, kemakmuran, dan kebanggaan dalam budaya Toraja. Kami percaya bahwa fashion bisa menjadi media untuk melestarikan dan merayakan warisan budaya.
                </p>
                <p style="line-height: 1.8; color: var(--color-dark-gray);">
                    Sejak berdiri, kami berkomitmen untuk menghadirkan produk berkualitas tinggi dengan desain eksklusif yang memadukan motif tradisional Toraja dengan estetika kontemporer.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/about-story.jpg') }}" 
                     alt="Cerita Tedong Simpo Clothes" 
                     style="width: 100%; border-radius: var(--radius-lg); box-shadow: var(--shadow-xl);"
                     onerror="this.src='https://placehold.co/600x400/1a1a1a/D4AF37?text=Tedong+Simpo+Story'">
            </div>
        </div>
    </div>
</section>

<!-- Philosophy -->
<section class="section" style="background: var(--color-light);">
    <div class="container">
        <h2 class="section-title">Filosofi Desain Toraja</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center;">
                <div style="width: 80px; height: 80px; margin: 0 auto 1.5rem; background: linear-gradient(135deg, var(--color-secondary), var(--color-accent)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white;">
                    <i class="fas fa-mountain"></i>
                </div>
                <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">Kekuatan Tradisi</h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Setiap desain kami terinspirasi dari motif Pa'tedong, Tongkonan, dan simbol-simbol sakral Toraja yang sarat makna.
                </p>
            </div>

            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center;">
                <div style="width: 80px; height: 80px; margin: 0 auto 1.5rem; background: linear-gradient(135deg, var(--color-secondary), var(--color-accent)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white;">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">Inovasi Modern</h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Kami menggabungkan elemen tradisional dengan teknik desain kontemporer untuk menciptakan produk yang timeless.
                </p>
            </div>

            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center;">
                <div style="width: 80px; height: 80px; margin: 0 auto 1.5rem; background: linear-gradient(135deg, var(--color-secondary), var(--color-accent)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white;">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">Cinta Budaya</h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Lebih dari sekedar fashion, kami ingin setiap produk menjadi medium untuk menceritakan keindahan budaya Toraja.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem;">
            <div style="background: linear-gradient(135deg, var(--color-secondary), #A01828); color: white; padding: 3rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-xl);">
                <div style="font-size: 3rem; margin-bottom: 1.5rem;">
                    <i class="fas fa-eye"></i>
                </div>
                <h2 style="font-family: var(--font-display); font-size: 2rem; margin-bottom: 1.5rem;">Visi Kami</h2>
                <p style="font-size: 1.125rem; line-height: 1.8; opacity: 0.95;">
                    Menjadi brand fashion khas Toraja terdepan yang dikenal secara nasional dan internasional, 
                    serta menjadi kebanggaan masyarakat Toraja dalam melestarikan budaya melalui fashion.
                </p>
            </div>

            <div style="background: linear-gradient(135deg, var(--color-primary), #2d2d2d); color: white; padding: 3rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-xl);">
                <div style="font-size: 3rem; margin-bottom: 1.5rem;">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h2 style="font-family: var(--font-display); font-size: 2rem; margin-bottom: 1.5rem;">Misi Kami</h2>
                <ul style="font-size: 1.125rem; line-height: 2; opacity: 0.95; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.75rem;"><i class="fas fa-check" style="color: var(--color-accent); margin-right: 0.5rem;"></i> Menghadirkan produk berkualitas premium</li>
                    <li style="margin-bottom: 0.75rem;"><i class="fas fa-check" style="color: var(--color-accent); margin-right: 0.5rem;"></i> Melestarikan budaya Toraja</li>
                    <li style="margin-bottom: 0.75rem;"><i class="fas fa-check" style="color: var(--color-accent); margin-right: 0.5rem;"></i> Memberikan pelayanan terbaik</li>
                    <li><i class="fas fa-check" style="color: var(--color-accent); margin-right: 0.5rem;"></i> Memberdayakan UMKM lokal</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Our Commitment -->
<section class="section" style="background: var(--color-light);">
    <div class="container">
        <h2 class="section-title">Komitmen Kami</h2>
        
        <div style="max-width: 900px; margin: 3rem auto 0;">
            <div style="display: grid; gap: 2rem;">
                <div style="display: flex; gap: 1.5rem; background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                    <div style="flex-shrink: 0;">
                        <div style="width: 60px; height: 60px; background: var(--color-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    <div>
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--color-primary);">Kualitas Bahan Premium</h3>
                        <p style="color: var(--color-gray); line-height: 1.8;">
                            Kami hanya menggunakan bahan pilihan berkualitas tinggi yang nyaman, adem, dan tahan lama. 
                            Setiap produk melalui quality control ketat sebelum sampai ke tangan Anda.
                        </p>
                    </div>
                </div>

                <div style="display: flex; gap: 1.5rem; background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                    <div style="flex-shrink: 0;">
                        <div style="width: 60px; height: 60px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div>
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--color-primary);">Pelayanan Profesional</h3>
                        <p style="color: var(--color-gray); line-height: 1.8;">
                            Tim kami siap melayani dengan ramah dan responsif. Kami terus meningkatkan kualitas pelayanan 
                            untuk memberikan pengalaman berbelanja terbaik bagi setiap pelanggan.
                        </p>
                    </div>
                </div>

                <div style="display: flex; gap: 1.5rem; background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                    <div style="flex-shrink: 0;">
                        <div style="width: 60px; height: 60px; background: var(--color-wood); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-recycle"></i>
                        </div>
                    </div>
                    <div>
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--color-primary);">Keberlanjutan & Etika</h3>
                        <p style="color: var(--color-gray); line-height: 1.8;">
                            Kami peduli terhadap lingkungan dan menerapkan praktik bisnis yang bertanggung jawab. 
                            Produksi kami mengutamakan keberlanjutan dan kesejahteraan pekerja.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container" style="text-align: center;">
        <h2 style="font-family: var(--font-display); font-size: 2.5rem; margin-bottom: 1rem;">
            Mari Bergabung dengan Keluarga Tedong Simpo
        </h2>
        <p style="font-size: 1.125rem; color: var(--color-gray); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Jadilah bagian dari gerakan melestarikan budaya Toraja melalui fashion. 
            Kunjungi toko kami atau hubungi via WhatsApp!
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('products') }}" class="btn btn-primary">
                <i class="fas fa-shopping-bag"></i>
                Lihat Produk
            </a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">
                <i class="fas fa-map-marker-alt"></i>
                Kunjungi Toko
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    @media (max-width: 768px) {
        section > .container > div[style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
        }
    }
</style>
@endpush
