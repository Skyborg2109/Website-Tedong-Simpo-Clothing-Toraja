@extends('layouts.admin')

@section('title', isset($product) ? 'Edit Produk' : 'Tambah Produk' . ' - Admin Tedong Simpo')

@section('content')
<div class="page-header">
    <h1 class="page-title">{{ isset($product) ? 'Edit Produk' : 'Tambah Produk Baru' }}</h1>
    <p class="page-subtitle">{{ isset($product) ? 'Update informasi produk' : 'Tambahkan produk baru ke katalog' }}</p>
</div>

<form action="{{ isset($product) ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($product))
        @method('PUT')
    @endif

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: var(--spacing-lg);">
        <!-- Main Content -->
        <div>
            <!-- Basic Information -->
            <div class="card" style="margin-bottom: var(--spacing-lg);">
                <div class="card-header">
                    <h3 class="card-title">Informasi Dasar</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Nama Produk *</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                               value="{{ old('name', $product->name ?? '') }}" required placeholder="Contoh: Kaos Toraja Tedong Hitam">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Deskripsi *</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" 
                                  rows="5" required placeholder="Deskripsikan produk Anda...">{{ old('description', $product->description ?? '') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-md);">
                        <div class="form-group">
                            <label class="form-label">Kategori *</label>
                            <select name="category" class="form-control form-select @error('category') is-invalid @enderror" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Kaos" {{ old('category', $product->category ?? '') == 'Kaos' ? 'selected' : '' }}>Kaos</option>
                                <option value="Hoodie" {{ old('category', $product->category ?? '') == 'Hoodie' ? 'selected' : '' }}>Hoodie</option>
                                <option value="Jacket" {{ old('category', $product->category ?? '') == 'Jacket' ? 'selected' : '' }}>Jacket</option>
                                <option value="Aksesoris" {{ old('category', $product->category ?? '') == 'Aksesoris' ? 'selected' : '' }}>Aksesoris</option>
                                <option value="Sweater" {{ old('category', $product->category ?? '') == 'Sweater' ? 'selected' : '' }}>Sweater</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">SKU *</label>
                            <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror" 
                                   value="{{ old('sku', $product->sku ?? 'TS-' . strtoupper(substr(md5(time()), 0, 8))) }}" 
                                   required placeholder="TS-XXXXX">
                            @error('sku')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing & Stock -->
            <div class="card" style="margin-bottom: var(--spacing-lg);">
                <div class="card-header">
                    <h3 class="card-title">Harga & Stok</h3>
                </div>
                <div class="card-body">
                    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: var(--spacing-md);">
                        <div class="form-group">
                            <label class="form-label">Harga Normal *</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" 
                                   value="{{ old('price', $product->price ?? '') }}" required min="0" step="1000" placeholder="150000">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">Harga Diskon</label>
                            <input type="number" name="discount_price" class="form-control @error('discount_price') is-invalid @enderror" 
                                   value="{{ old('discount_price', $product->discount_price ?? '') }}" min="0" step="1000" placeholder="120000">
                            <small style="color: var(--color-gray); font-size: 0.75rem;">Kosongkan jika tidak ada diskon</small>
                            @error('discount_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">Stok *</label>
                            <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" 
                                   value="{{ old('stock', $product->stock ?? 0) }}" required min="0" placeholder="50">
                            @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Variants -->
            <div class="card" style="margin-bottom: var(--spacing-lg);">
                <div class="card-header">
                    <h3 class="card-title">Varian Produk</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Ukuran Tersedia</label>
                        <div style="display: flex; gap: var(--spacing-sm); flex-wrap: wrap;">
                            @php
                                $sizes = ['S', 'M', 'L', 'XL', 'XXL'];
                                $selectedSizes = old('sizes', $product->sizes ?? []);
                            @endphp
                            @foreach($sizes as $size)
                                <label style="display: flex; align-items: center; gap: var(--spacing-xs); padding: var(--spacing-xs) var(--spacing-md); border: 2px solid #e5e7eb; border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-base);" class="size-checkbox">
                                    <input type="checkbox" name="sizes[]" value="{{ $size }}" 
                                           {{ in_array($size, $selectedSizes) ? 'checked' : '' }}
                                           style="width: 16px; height: 16px;">
                                    <span style="font-weight: 600;">{{ $size }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Warna Tersedia</label>
                        <div style="display: flex; gap: var(--spacing-sm); flex-wrap: wrap;">
                            @php
                                $colors = ['Hitam', 'Putih', 'Merah', 'Biru', 'Hijau', 'Kuning','Abu-abu'];
                                $selectedColors = old('colors', $product->colors ?? []);
                            @endphp
                            @foreach($colors as $color)
                                <label style="display: flex; align-items: center; gap: var(--spacing-xs); padding: var(--spacing-xs) var(--spacing-md); border: 2px solid #e5e7eb; border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-base);" class="color-checkbox">
                                    <input type="checkbox" name="colors[]" value="{{ $color }}" 
                                           {{ in_array($color, $selectedColors) ? 'checked' : '' }}
                                           style="width: 16px; height: 16px;">
                                    <span style="font-weight: 600;">{{ $color }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Images -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gambar Produk</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Gambar Utama *</label>
                        <input type="file" name="main_image" class="form-control @error('main_image') is-invalid @enderror" accept="image/*">
                        <small style="color: var(--color-gray); font-size: 0.75rem;">Format: JPG, PNG. Max: 2MB</small>
                        @error('main_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if(isset($product) && $product->main_image)
                            <div style="margin-top: var(--spacing-sm);">
                                <img src="{{ asset('storage/' . $product->main_image) }}" alt="Current" style="max-width: 200px; border-radius: var(--radius-md);">
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label">Gambar Tambahan</label>
                        <input type="file" name="images[]" class="form-control" accept="image/*" multiple>
                        <small style="color: var(--color-gray); font-size: 0.75rem;">Pilih beberapa gambar sekaligus (max 4 gambar)</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div>
            <!-- Status & Visibility -->
            <div class="card" style="margin-bottom: var(--spacing-lg);">
                <div class="card-header">
                    <h3 class="card-title">Status & Visibilitas</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label style="display: flex; align-items: center; gap: var(--spacing-sm); cursor: pointer;">
                            <input type="checkbox" name="is_active" value="1" 
                                   {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }}
                                   style="width: 18px; height: 18px;">
                            <span style="font-weight: 600;">Produk Aktif</span>
                        </label>
                        <small style="color: var(--color-gray); font-size: 0.75rem;">Produk akan tampil di website</small>
                    </div>

                    <div class="form-group mb-0">
                        <label style="display: flex; align-items: center; gap: var(--spacing-sm); cursor: pointer;">
                            <input type="checkbox" name="is_featured" value="1" 
                                   {{ old('is_featured', $product->is_featured ?? false) ? 'checked' : '' }}
                                   style="width: 18px; height: 18px;">
                            <span style="font-weight: 600;">Produk Unggulan</span>
                        </label>
                        <small style="color: var(--color-gray); font-size: 0.75rem;">Tampilkan di halaman utama</small>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom: var(--spacing-sm);">
                        <i class="fas fa-save"></i> {{ isset($product) ? 'Update Produk' : 'Simpan Produk' }}
                    </button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline" style="width: 100%;">
                        <i class="fas fa-times"></i> Batal
                    </a>
                </div>
            </div>

            <!-- Tips -->
            <div class="card" style="margin-top: var(--spacing-lg); background: linear-gradient(135deg, rgba(196, 30, 58, 0.05), rgba(212, 175, 55, 0.05));">
                <div class="card-body">
                    <h4 style="font-size: 0.875rem; font-weight: 700; margin-bottom: var(--spacing-sm); color: var(--color-primary);">
                        <i class="fas fa-lightbulb" style="color: var(--color-accent);"></i> Tips
                    </h4>
                    <ul style="font-size: 0.75rem; color: var(--color-gray); line-height: 1.8; padding-left: 1.25rem;">
                        <li>Gunakan foto produk berkualitas tinggi</li>
                        <li>Tulis deskripsi yang detail dan menarik</li>
                        <li>Pastikan harga dan stok akurat</li>
                        <li>Pilih kategori yang sesuai</li>
                        <li>Aktifkan produk unggulan untuk highlight</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>

@push('styles')
<style>
.size-checkbox:has(input:checked),
.color-checkbox:has(input:checked) {
    border-color: var(--color-secondary);
    background: rgba(196, 30, 58, 0.05);
}

.invalid-feedback {
    color: #ef4444;
    font-size: 0.75rem;
    margin-top: 0.25rem;
}

.form-control.is-invalid {
    border-color: #ef4444;
}
</style>
@endpush
@endsection
