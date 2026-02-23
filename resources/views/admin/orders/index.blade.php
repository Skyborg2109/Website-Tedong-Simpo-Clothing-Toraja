@extends('layouts.admin')

@section('title', 'Kelola Pesanan - Admin Tedong Simpo')
@section('header_title', 'Kelola Pesanan')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Pesanan</h3>
        <button class="btn btn-primary">
            <i class="fas fa-plus"></i> Catat Pesanan Baru
        </button>
    </div>
    <div class="card-body">
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Pelanggan</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Placeholder data as no orders table exists yet -->
                    <tr>
                        <td colspan="6" class="text-center" style="padding: 3rem; color: var(--color-gray);">
                            <i class="fas fa-clipboard-list" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.3;"></i>
                            <p>Belum ada data pesanan yang tercatat.</p>
                            <p style="font-size: 0.9rem;">(Anda dapat mengembangkan fitur ini dengan menambahkan tabel 'orders' di database)</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
