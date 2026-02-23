@extends('layouts.admin')

@section('title', 'Kelola Produk - Admin Tedong Simpo')

@section('content')
<div class="page-header">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1 class="page-title">Kelola Produk</h1>
            <p class="page-subtitle">Manajemen produk Tedong Simpo Clothes</p>
        </div>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>
    </div>
</div>

<!-- Filter & Search -->
<div class="card" style="margin-bottom: var(--spacing-lg);">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.products.index') }}">
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr auto; gap: var(--spacing-md); align-items: end;">
                <div class="form-group mb-0">
                    <label class="form-label">Cari Produk</label>
                    <input type="text" name="search" class="form-control" placeholder="Nama produk atau SKU..." value="{{ request('search') }}">
                </div>
                <div class="form-group mb-0">
                    <label class="form-label">Kategori</label>
                    <select name="category" class="form-control form-select">
                        <option value="">Semua Kategori</option>
                        <option value="Kaos" {{ request('category') == 'Kaos' ? 'selected' : '' }}>Kaos</option>
                        <option value="Hoodie" {{ request('category') == 'Hoodie' ? 'selected' : '' }}>Hoodie</option>
                        <option value="Jacket" {{ request('category') == 'Jacket' ? 'selected' : '' }}>Jacket</option>
                    </select>
                </div>
                <div class="form-group mb-0">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control form-select">
                        <option value="">Semua Status</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Aktif</option>
                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i> Filter
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Products Table -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Produk ({{ $products->total() }})</h3>
    </div>
    <div class="card-body">
        @if($products->count() > 0)
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 50px;">#</th>
                            <th>Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Status</th>
                            <th>Views</th>
                            <th style="width: 120px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $index => $product)
                        <tr>
                            <td>{{ $products->firstItem() + $index }}</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: var(--spacing-sm);">
                                    @if($product->main_image)
                                        <img src="{{ asset('storage/' . $product->main_image) }}" alt="{{ $product->name }}" class="product-img">
                                    @else
                                        <div class="product-img" style="background: var(--color-light); display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-image" style="color: var(--color-gray);"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <div style="font-weight: 600; margin-bottom: 2px;">{{ $product->name }}</div>
                                        <div style="font-size: 0.75rem; color: var(--color-gray);">SKU: {{ $product->sku }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-info">{{ $product->category }}</span>
                            </td>
                            <td>
                                <div style="font-weight: 600; color: var(--color-secondary);">
                                    Rp {{ number_format($product->final_price, 0, ',', '.') }}
                                </div>
                                @if($product->hasDiscount())
                                    <div style="font-size: 0.75rem; color: var(--color-gray); text-decoration: line-through;">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                <span class="badge {{ $product->stock > 10 ? 'badge-success' : ($product->stock > 0 ? 'badge-warning' : 'badge-danger') }}">
                                    {{ $product->stock }} pcs
                                </span>
                            </td>
                            <td>
                                <span class="badge {{ $product->is_active ? 'badge-success' : 'badge-danger' }}">
                                    {{ $product->is_active ? 'Aktif' : 'Nonaktif' }}
                                </span>
                            </td>
                            <td>
                                <i class="fas fa-eye" style="color: var(--color-gray); margin-right: 4px;"></i>
                                {{ $product->views }}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn-icon btn-edit" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-icon btn-delete" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div style="margin-top: var(--spacing-lg);">
                {{ $products->links() }}
            </div>
        @else
            <div style="text-align: center; padding: var(--spacing-2xl); color: var(--color-gray);">
                <i class="fas fa-box-open" style="font-size: 4rem; margin-bottom: var(--spacing-md); opacity: 0.3;"></i>
                <h3 style="margin-bottom: var(--spacing-sm);">Belum Ada Produk</h3>
                <p style="margin-bottom: var(--spacing-lg);">Mulai tambahkan produk pertama Anda</p>
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Produk Pertama
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
