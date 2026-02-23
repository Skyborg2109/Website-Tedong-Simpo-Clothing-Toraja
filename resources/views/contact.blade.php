@extends('layouts.app')

@section('title', 'Kontak Kami - Tedong Simpo Clothes')
@section('meta_description', 'Hubungi Tedong Simpo Clothes. Alamat: Jl. Ratulangi No.21, Rantepao, Toraja Utara. WhatsApp: 0822-9147-5119. Buka hingga 21.00.')

@section('content')
<!-- Page Header -->
<section class="section" style="background: linear-gradient(135deg, var(--color-primary), #2d2d2d); color: white; padding: 4rem 0 3rem;">
    <div class="container" style="text-align: center;">
        <h1 style="font-family: var(--font-display); font-size: 3rem; margin-bottom: 1rem;">Hubungi Kami</h1>
        <p style="font-size: 1.25rem; opacity: 0.9;">Kami Siap Melayani Anda</p>
    </div>
</section>

<!-- Contact Info Cards -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
            <!-- Address -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; border-top: 4px solid var(--color-secondary);">
                <div style="width: 80px; height: 80px; margin: 0 auto 1.5rem; background: linear-gradient(135deg, var(--color-secondary), var(--color-accent)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">Alamat Toko</h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Jl. Ratulangi No.21, Singki'<br>
                    Kec. Rantepao<br>
                    Kabupaten Toraja Utara<br>
                    Sulawesi Selatan 91835
                </p>
            </div>

            <!-- Phone -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; border-top: 4px solid var(--color-accent);">
                <div style="width: 80px; height: 80px; margin: 0 auto 1.5rem; background: linear-gradient(135deg, var(--color-accent), var(--color-wood)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white;">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">Telepon / WhatsApp</h3>
                <p style="color: var(--color-gray); line-height: 1.8; margin-bottom: 1rem;">
                    <a href="tel:+6282291475119" style="color: var(--color-secondary); font-weight: 600; font-size: 1.125rem;">
                        0822-9147-5119
                    </a>
                </p>
                <a href="https://wa.me/6282291475119" class="btn btn-primary" target="_blank">
                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                </a>
            </div>

            <!-- Hours -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); text-align: center; border-top: 4px solid var(--color-wood);">
                <div style="width: 80px; height: 80px; margin: 0 auto 1.5rem; background: linear-gradient(135deg, var(--color-wood), var(--color-secondary)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white;">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">Jam Operasional</h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Senin - Minggu<br>
                    <strong style="color: var(--color-secondary); font-size: 1.125rem;">Buka hingga 21.00</strong>
                </p>
            </div>
        </div>

        <!-- Map & Contact Form -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem;">
            <!-- Google Maps -->
            <div>
                <h2 style="font-family: var(--font-display); font-size: 2rem; margin-bottom: 1.5rem; color: var(--color-primary);">
                    Lokasi Toko
                </h2>
                <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); height: 450px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2!2d119.8!3d-2.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMsKwNTQnMDAuMCJTIDExOcKwNDgnMDAuMCJF!5e0!3m2!1sen!2sid!4v1234567890"
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div style="margin-top: 1.5rem;">
                    <a href="https://goo.gl/maps/example" 
                       class="btn btn-secondary" 
                       target="_blank" 
                       style="width: 100%; justify-content: center;">
                        <i class="fas fa-directions"></i> Buka di Google Maps
                    </a>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <h2 style="font-family: var(--font-display); font-size: 2rem; margin-bottom: 1.5rem; color: var(--color-primary);">
                    Kirim Pesan
                </h2>
                <form style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-primary);">
                            Nama Lengkap *
                        </label>
                        <input type="text" 
                               required
                               placeholder="Masukkan nama Anda"
                               style="width: 100%; padding: 0.875rem; border: 2px solid #e5e7eb; border-radius: var(--radius-md); font-family: var(--font-primary); transition: var(--transition-base);"
                               onfocus="this.style.borderColor='var(--color-secondary)'"
                               onblur="this.style.borderColor='#e5e7eb'">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-primary);">
                            Email *
                        </label>
                        <input type="email" 
                               required
                               placeholder="nama@email.com"
                               style="width: 100%; padding: 0.875rem; border: 2px solid #e5e7eb; border-radius: var(--radius-md); font-family: var(--font-primary); transition: var(--transition-base);"
                               onfocus="this.style.borderColor='var(--color-secondary)'"
                               onblur="this.style.borderColor='#e5e7eb'">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-primary);">
                            No. WhatsApp *
                        </label>
                        <input type="tel" 
                               required
                               placeholder="0822-xxxx-xxxx"
                               style="width: 100%; padding: 0.875rem; border: 2px solid #e5e7eb; border-radius: var(--radius-md); font-family: var(--font-primary); transition: var(--transition-base);"
                               onfocus="this.style.borderColor='var(--color-secondary)'"
                               onblur="this.style.borderColor='#e5e7eb'">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-primary);">
                            Subjek
                        </label>
                        <input type="text" 
                               placeholder="Tentang apa pesan Anda?"
                               style="width: 100%; padding: 0.875rem; border: 2px solid #e5e7eb; border-radius: var(--radius-md); font-family: var(--font-primary); transition: var(--transition-base);"
                               onfocus="this.style.borderColor='var(--color-secondary)'"
                               onblur="this.style.borderColor='#e5e7eb'">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: var(--color-primary);">
                            Pesan *
                        </label>
                        <textarea 
                            required
                            rows="5"
                            placeholder="Tulis pesan Anda di sini..."
                            style="width: 100%; padding: 0.875rem; border: 2px solid #e5e7eb; border-radius: var(--radius-md); font-family: var(--font-primary); resize: vertical; transition: var(--transition-base);"
                            onfocus="this.style.borderColor='var(--color-secondary)'"
                            onblur="this.style.borderColor='#e5e7eb'"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Services Info -->
<section class="section" style="background: var(--color-light);">
    <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem;">
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); text-align: center;">
                <div style="font-size: 3rem; color: var(--color-secondary); margin-bottom: 1rem;">
                    <i class="fas fa-store"></i>
                </div>
                <h3 style="font-weight: 700; margin-bottom: 0.5rem;">Ambil di Toko</h3>
                <p style="color: var(--color-gray); line-height: 1.6;">
                    Kunjungi toko kami langsung dan pilih produk favorit Anda
                </p>
            </div>

            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); text-align: center;">
                <div style="font-size: 3rem; color: var(--color-accent); margin-bottom: 1rem;">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3 style="font-weight: 700; margin-bottom: 0.5rem;">Pesan Antar</h3>
                <p style="color: var(--color-gray); line-height: 1.6;">
                    Layanan pengiriman cepat ke seluruh Toraja dan Indonesia
                </p>
            </div>

            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); text-align: center;">
                <div style="font-size: 3rem; color: var(--color-wood); margin-bottom: 1rem;">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <h3 style="font-weight: 700; margin-bottom: 0.5rem;">Tukar Ukuran</h3>
                <p style="color: var(--color-gray); line-height: 1.6;">
                    Gratis tukar ukuran dalam 7 hari setelah pembelian
                </p>
            </div>

            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); text-align: center;">
                <div style="font-size: 3rem; color: var(--color-secondary); margin-bottom: 1rem;">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 style="font-weight: 700; margin-bottom: 0.5rem;">Customer Service</h3>
                <p style="color: var(--color-gray); line-height: 1.6;">
                    Tim kami siap membantu Anda via WhatsApp setiap hari
                </p>
            </div>
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
