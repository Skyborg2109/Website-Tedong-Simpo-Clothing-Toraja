@extends('layouts.admin')

@section('title', 'Kelola Pelanggan - Admin Tedong Simpo')
@section('header_title', 'Kelola Pelanggan')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Pelanggan Terdaftar</h3>
    </div>
    <div class="card-body">
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Bergabung Sejak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div style="width: 32px; height: 32px; background: var(--color-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--color-primary);">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span style="font-weight: 500;">{{ $customer->name }}</span>
                            </div>
                        </td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="#" class="btn btn-outline" style="padding: 0.25rem 0.5rem; font-size: 0.8rem;">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center" style="padding: 3rem; color: var(--color-gray);">
                            <i class="fas fa-users-slash" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.3;"></i>
                            <p>Belum ada pelanggan yang mendaftar.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div style="margin-top: 1rem;">
            {{ $customers->links() }}
        </div>
    </div>
</div>
@endsection
