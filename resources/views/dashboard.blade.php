@extends('layouts.app')

@section('title', 'Dashboard - Tedong Simpo Clothes')

@section('content')
<section class="section" style="padding-top: 4rem;">
    <div class="container">
        <h1 class="section-title">Dashboard Pengguna</h1>
        
        <div style="background: white; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); margin-top: 2rem;">
            <p style="font-size: 1.25rem; margin-bottom: 1rem;">Halo, {{ Auth::user()->name }}!</p>
            <p style="color: var(--color-gray);">Selamat datang kembali di Tedong Simpo Clothes. Anda berhasil masuk.</p>
            
            <div style="margin-top: 2rem; display: flex; gap: 1rem;">
                <a href="{{ route('profile.edit') }}" class="btn btn-outline">
                    <i class="fas fa-user-edit"></i> Edit Profil
                </a>
                <a href="{{ route('products') }}" class="btn btn-primary">
                    <i class="fas fa-shopping-bag"></i> Mulai Belanja
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
