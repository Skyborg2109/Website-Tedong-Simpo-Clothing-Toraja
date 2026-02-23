@extends('layouts.admin')

@section('title', 'Dashboard - Admin Tedong Simpo')

@section('content')
<div class="page-header">
    <h1 class="page-title">Dashboard</h1>
    <p class="page-subtitle">Selamat datang di Admin Panel Tedong Simpo Clothes</p>
</div>

<!-- Stats Cards -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon primary">
                <i class="fas fa-box"></i>
            </div>
        </div>
        <div class="stat-value">{{ $totalProducts ?? 0 }}</div>
        <div class="stat-label">Total Produk</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i> 12% dari bulan lalu
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon success">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
        <div class="stat-value">0</div>
        <div class="stat-label">Pesanan Bulan Ini</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i> 8% dari bulan lalu
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon warning">
                <i class="fas fa-money-bill-wave"></i>
            </div>
        </div>
        <div class="stat-value">Rp 0</div>
        <div class="stat-label">Pendapatan Bulan Ini</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i> 15% dari bulan lalu
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon info">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <div class="stat-value">0</div>
        <div class="stat-label">Total Pelanggan</div>
        <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i> 5% dari bulan lalu
        </div>
    </div>
</div>

<!-- Recent Products & Quick Actions -->
<div style="display: grid; grid-template-columns: 2fr 1fr; gap: var(--spacing-lg); margin-bottom: var(--spacing-xl);">
    <!-- Recent Products -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produk Terbaru</h3>
            <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline">Lihat Semua</a>
        </div>
        <div class="card-body">
            @if(isset($recentProducts) && $recentProducts->count() > 0)
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentProducts as $product)
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: var(--spacing-sm);">
                                        @if($product->main_image)
                                            <img src="{{ asset('storage/' . $product->main_image) }}" alt="{{ $product->name }}" class="product-img">
                                        @else
                                            <div class="product-img" style="background: var(--color-light); display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-image" style="color: var(--color-gray);"></i>
                                            </div>
                                        @endif
                                        <span style="font-weight: 600;">{{ $product->name }}</span>
                                    </div>
                                </td>
                                <td>{{ $product->category }}</td>
                                <td style="font-weight: 600; color: var(--color-secondary);">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <span class="badge {{ $product->is_active ? 'badge-success' : 'badge-danger' }}">
                                        {{ $product->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div style="text-align: center; padding: var(--spacing-xl); color: var(--color-gray);">
                    <i class="fas fa-box-open" style="font-size: 3rem; margin-bottom: var(--spacing-md); opacity: 0.3;"></i>
                    <p>Belum ada produk</p>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary" style="margin-top: var(--spacing-md);">
                        <i class="fas fa-plus"></i> Tambah Produk Pertama
                    </a>
                </div>
            @endif
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Quick Actions</h3>
        </div>
        <div class="card-body">
            <div style="display: flex; flex-direction: column; gap: var(--spacing-sm);">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary" style="justify-content: flex-start;">
                    <i class="fas fa-plus"></i>
                    <span>Tambah Produk Baru</span>
                </a>
                <a href="{{ route('admin.products.index') }}" class="btn btn-outline" style="justify-content: flex-start;">
                    <i class="fas fa-box"></i>
                    <span>Kelola Produk</span>
                </a>
                <a href="#" class="btn btn-outline" style="justify-content: flex-start;">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Lihat Pesanan</span>
                </a>
                <a href="#" class="btn btn-outline" style="justify-content: flex-start;">
                    <i class="fas fa-star"></i>
                    <span>Kelola Testimoni</span>
                </a>
                <a href="{{ route('home') }}" class="btn btn-outline" style="justify-content: flex-start;">
                    <i class="fas fa-globe"></i>
                    <span>Lihat Website</span>
                </a>
            </div>

            <div style="margin-top: var(--spacing-lg); padding-top: var(--spacing-lg); border-top: 1px solid #e5e7eb;">
                <h4 style="font-size: 0.875rem; font-weight: 600; margin-bottom: var(--spacing-sm); color: var(--color-primary);">
                    Informasi Toko
                </h4>
                <div style="font-size: 0.875rem; color: var(--color-gray); line-height: 1.8;">
                    <div style="display: flex; align-items: center; gap: var(--spacing-xs); margin-bottom: var(--spacing-xs);">
                        <i class="fas fa-map-marker-alt" style="width: 16px;"></i>
                        <span>Rantepao, Toraja Utara</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: var(--spacing-xs); margin-bottom: var(--spacing-xs);">
                        <i class="fas fa-phone" style="width: 16px;"></i>
                        <span>0822-9147-5119</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: var(--spacing-xs);">
                        <i class="fab fa-instagram" style="width: 16px;"></i>
                        <span>@tedongsimpo.toraja</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Activity Log (Optional) -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Aktivitas Terbaru</h3>
    </div>
    <div class="card-body">
        <div style="text-align: center; padding: var(--spacing-xl); color: var(--color-gray);">
            <i class="fas fa-history" style="font-size: 3rem; margin-bottom: var(--spacing-md); opacity: 0.3;"></i>
            <p>Belum ada aktivitas</p>
        </div>
    </div>
</div>
@endsection
