@extends('layouts.admin')

@section('title', 'Pengaturan - Admin Tedong Simpo')
@section('header_title', 'Pengaturan Website')

@section('content')
<div class="card" style="max-width: 800px;">
    <div class="card-header">
        <h3 class="card-title">Pengaturan Umum</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label class="form-label">Nama Website</label>
                <input type="text" name="site_name" class="form-control" value="Tedong Simpo Clothes" disabled style="background: #f5f5f5; cursor: not-allowed;">
                <p style="font-size: 0.8rem; color: var(--color-gray); margin-top: 0.25rem;">Hubungi developer untuk mengubah nama website utama.</p>
            </div>

            <div class="form-group">
                <label class="form-label">Nomor WhatsApp Admin</label>
                <div class="input-group">
                    <span style="padding: 0.75rem; background: #eee; border: 1px solid #ccc; border-right: 0; border-radius: var(--radius-md) 0 0 var(--radius-md);">+62</span>
                    <input type="text" name="whatsapp_number" class="form-control" value="82291475119" style="border-radius: 0 var(--radius-md) var(--radius-md) 0;">
                </div>
                <p style="font-size: 0.8rem; color: var(--color-gray); margin-top: 0.25rem;">Nomor ini akan digunakan untuk semua tombol WhatsApp di website.</p>
            </div>

            <div class="form-group">
                <label class="form-label">Email Kontak</label>
                <input type="email" name="contact_email" class="form-control" value="info@tedongsimpo.com">
            </div>

            <div class="form-group">
                <label class="form-label">Alamat Toko</label>
                <textarea name="shop_address" class="form-control" rows="3">Rantepao, Toraja Utara, Sulawesi Selatan</textarea>
            </div>

            <div style="margin-top: 2rem; border-top: 1px solid #eee; padding-top: 1rem;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
            </div>

            <!-- Disclaimer -->
            <div style="margin-top: 2rem; background: #fff8e1; border: 1px solid #ffecb3; padding: 1rem; border-radius: var(--radius-md);">
                <h4 style="font-size: 1rem; color: #f57f17; margin-bottom: 0.5rem;"><i class="fas fa-exclamation-triangle"></i> Catatan</h4>
                <p style="font-size: 0.9rem; color: #5d4037;">Halaman ini saat ini hanya demo tampilan (mockup). Fitur penyimpanan pengaturan akan berfungsi jika tabel 'settings' telah dibuat di database.</p>
            </div>
        </form>
    </div>
</div>
@endsection
