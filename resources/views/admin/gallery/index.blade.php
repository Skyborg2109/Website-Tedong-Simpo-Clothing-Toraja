@extends('layouts.admin')

@section('title', 'Galeri Produk - Admin Tedong Simpo')
@section('header_title', 'Galeri')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Galeri Gambar Produk</h3>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Upload Gambar Baru
        </a>
    </div>
    <div class="card-body">
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 1rem;">
            @forelse($products as $product)
                @if($product->main_image)
                <div style="position: relative; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); aspect-ratio: 1/1;">
                    <img src="{{ asset('storage/' . $product->main_image) }}" 
                         alt="{{ $product->name }}" 
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;"
                         onmouseover="this.style.transform='scale(1.1)'"
                         onmouseout="this.style.transform='scale(1)'">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 0.5rem; font-size: 0.8rem;">
                        {{ Str::limit($product->name, 20) }}
                    </div>
                </div>
                @endif
                
                @if($product->images)
                    @foreach($product->images as $image)
                    <div style="position: relative; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); aspect-ratio: 1/1;">
                        <img src="{{ asset('storage/' . $image) }}" 
                             alt="{{ $product->name }}" 
                             style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    @endforeach
                @endif
            @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 3rem; color: var(--color-gray);">
                    <i class="fas fa-images" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.3;"></i>
                    <p>Belum ada gambar di galeri.</p>
                </div>
            @endforelse
        </div>
        
        <div style="margin-top: 1rem;">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
