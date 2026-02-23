@extends('layouts.app')

@section('title', 'FAQ & Panduan - Tedong Simpo Clothes')
@section('meta_description', 'Pertanyaan umum seputar pemesanan, ukuran, pengiriman, dan kebijakan retur Tedong Simpo Clothes.')

@section('content')
<!-- Page Header -->
<section class="section" style="background: linear-gradient(135deg, var(--color-primary), #2d2d2d); color: white; padding: 4rem 0 3rem;">
    <div class="container" style="text-align: center;">
        <h1 style="font-family: var(--font-display); font-size: 3rem; margin-bottom: 1rem;">FAQ & Panduan</h1>
        <p style="font-size: 1.25rem; opacity: 0.9;">Pertanyaan yang Sering Diajukan</p>
    </div>
</section>

<!-- Size Guide -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Panduan Ukuran</h2>
        
        <div style="max-width: 900px; margin: 3rem auto 0;">
            <!-- Kaos Size Chart -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); margin-bottom: 2rem;">
                <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem; color: var(--color-secondary);">
                    <i class="fas fa-tshirt"></i> Ukuran Kaos
                </h3>
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="background: var(--color-light);">
                                <th style="padding: 1rem; text-align: left; border: 1px solid #e5e7eb;">Ukuran</th>
                                <th style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">Lebar Dada (cm)</th>
                                <th style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">Panjang Badan (cm)</th>
                                <th style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">Panjang Lengan (cm)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 1rem; border: 1px solid #e5e7eb; font-weight: 600;">S</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">48</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">68</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">18</td>
                            </tr>
                            <tr style="background: var(--color-light);">
                                <td style="padding: 1rem; border: 1px solid #e5e7eb; font-weight: 600;">M</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">50</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">70</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">19</td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem; border: 1px solid #e5e7eb; font-weight: 600;">L</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">52</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">72</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">20</td>
                            </tr>
                            <tr style="background: var(--color-light);">
                                <td style="padding: 1rem; border: 1px solid #e5e7eb; font-weight: 600;">XL</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">54</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">74</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">21</td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem; border: 1px solid #e5e7eb; font-weight: 600;">XXL</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">56</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">76</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">22</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Hoodie Size Chart -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem; color: var(--color-secondary);">
                    <i class="fas fa-user-hoodie"></i> Ukuran Hoodie
                </h3>
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="background: var(--color-light);">
                                <th style="padding: 1rem; text-align: left; border: 1px solid #e5e7eb;">Ukuran</th>
                                <th style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">Lebar Dada (cm)</th>
                                <th style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">Panjang Badan (cm)</th>
                                <th style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">Panjang Lengan (cm)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 1rem; border: 1px solid #e5e7eb; font-weight: 600;">M</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">52</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">68</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">58</td>
                            </tr>
                            <tr style="background: var(--color-light);">
                                <td style="padding: 1rem; border: 1px solid #e5e7eb; font-weight: 600;">L</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">54</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">70</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">60</td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem; border: 1px solid #e5e7eb; font-weight: 600;">XL</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">56</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">72</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">62</td>
                            </tr>
                            <tr style="background: var(--color-light);">
                                <td style="padding: 1rem; border: 1px solid #e5e7eb; font-weight: 600;">XXL</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">58</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">74</td>
                                <td style="padding: 1rem; text-align: center; border: 1px solid #e5e7eb;">64</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="background: var(--color-light); padding: 1.5rem; border-radius: var(--radius-md); margin-top: 2rem;">
                <p style="color: var(--color-gray); line-height: 1.8;">
                    <strong>Catatan:</strong> Toleransi ukuran ±1-2 cm. Jika ragu dengan ukuran, silakan hubungi customer service kami via WhatsApp untuk konsultasi gratis.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section" style="background: var(--color-light);">
    <div class="container">
        <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
        
        <div style="max-width: 900px; margin: 3rem auto 0;">
            <!-- FAQ Item 1 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); margin-bottom: 1.5rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">
                    <i class="fas fa-question-circle" style="color: var(--color-secondary);"></i>
                    Bagaimana cara memesan produk?
                </h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Anda bisa memesan melalui WhatsApp di nomor <strong>0822-9147-5119</strong> atau langsung datang ke toko kami. 
                    Untuk pemesanan online, cukup klik tombol "Pesan via WhatsApp" pada produk yang Anda inginkan, 
                    lalu ikuti instruksi dari admin kami.
                </p>
            </div>

            <!-- FAQ Item 2 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); margin-bottom: 1.5rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">
                    <i class="fas fa-question-circle" style="color: var(--color-secondary);"></i>
                    Apakah bisa tukar ukuran jika tidak pas?
                </h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Ya, kami menyediakan layanan <strong>tukar ukuran gratis</strong> dalam waktu <strong>7 hari</strong> setelah pembelian. 
                    Syaratnya produk masih dalam kondisi baru, belum dicuci, dan masih ada label/tag. 
                    Silakan hubungi kami untuk proses penukaran.
                </p>
            </div>

            <!-- FAQ Item 3 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); margin-bottom: 1.5rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">
                    <i class="fas fa-question-circle" style="color: var(--color-secondary);"></i>
                    Berapa lama waktu pengiriman?
                </h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Untuk area <strong>Toraja Utara</strong>, pengiriman biasanya 1-2 hari kerja. 
                    Untuk luar Toraja, tergantung jasa ekspedisi yang dipilih (biasanya 3-7 hari kerja). 
                    Kami menggunakan JNE, J&T, dan ekspedisi terpercaya lainnya.
                </p>
            </div>

            <!-- FAQ Item 4 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); margin-bottom: 1.5rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">
                    <i class="fas fa-question-circle" style="color: var(--color-secondary);"></i>
                    Apakah ada minimal pembelian?
                </h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Tidak ada minimal pembelian. Anda bisa membeli 1 pcs saja. 
                    Namun untuk <strong>gratis ongkir</strong>, minimal pembelian <strong>Rp 200.000</strong> 
                    (khusus area Toraja Utara).
                </p>
            </div>

            <!-- FAQ Item 5 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); margin-bottom: 1.5rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">
                    <i class="fas fa-question-circle" style="color: var(--color-secondary);"></i>
                    Bagaimana cara merawat produk agar awet?
                </h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Tips merawat produk Tedong Simpo:
                </p>
                <ul style="color: var(--color-gray); line-height: 2; margin-top: 0.5rem; padding-left: 1.5rem;">
                    <li>Cuci dengan air dingin atau suhu ruangan</li>
                    <li>Gunakan detergen yang lembut</li>
                    <li>Jangan gunakan pemutih</li>
                    <li>Jemur dengan posisi terbalik (bagian dalam di luar)</li>
                    <li>Setrika dengan suhu sedang</li>
                    <li>Hindari mesin pengering</li>
                </ul>
            </div>

            <!-- FAQ Item 6 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); margin-bottom: 1.5rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">
                    <i class="fas fa-question-circle" style="color: var(--color-secondary);"></i>
                    Apakah bisa custom desain?
                </h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Untuk saat ini kami belum menerima custom desain. Namun kami terus mengupdate koleksi dengan desain-desain baru. 
                    Follow Instagram kami untuk update produk terbaru!
                </p>
            </div>

            <!-- FAQ Item 7 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); margin-bottom: 1.5rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">
                    <i class="fas fa-question-circle" style="color: var(--color-secondary);"></i>
                    Apakah ada garansi produk?
                </h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Ya, kami memberikan <strong>garansi kualitas 100%</strong>. Jika ada cacat produksi atau kerusakan saat pengiriman, 
                    kami akan ganti dengan produk baru. Hubungi kami maksimal 3 hari setelah barang diterima dengan bukti foto/video unboxing.
                </p>
            </div>

            <!-- FAQ Item 8 -->
            <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; color: var(--color-primary);">
                    <i class="fas fa-question-circle" style="color: var(--color-secondary);"></i>
                    Apakah bisa COD (Cash on Delivery)?
                </h3>
                <p style="color: var(--color-gray); line-height: 1.8;">
                    Untuk pembelian di toko atau pengiriman area Rantepao, kami menerima COD. 
                    Untuk luar kota, pembayaran dilakukan via transfer terlebih dahulu sebelum barang dikirim.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container" style="text-align: center;">
        <h2 style="font-family: var(--font-display); font-size: 2.5rem; margin-bottom: 1rem;">
            Masih Ada Pertanyaan?
        </h2>
        <p style="font-size: 1.125rem; color: var(--color-gray); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Tim customer service kami siap membantu Anda. Jangan ragu untuk menghubungi kami!
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="https://wa.me/6282291475119?text=Halo,%20saya%20punya%20pertanyaan" 
               class="btn btn-primary" 
               target="_blank">
                <i class="fab fa-whatsapp"></i>
                Chat WhatsApp
            </a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">
                <i class="fas fa-envelope"></i>
                Kirim Email
            </a>
        </div>
    </div>
</section>
@endsection
