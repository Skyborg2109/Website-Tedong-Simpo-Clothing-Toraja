@extends('layouts.app')

@section('title', 'Profil Saya - Tedong Simpo Clothes')

@section('content')
<div class="section" style="background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%); min-height: 80vh;">
    <div class="container">
        <!-- Header -->
        <div style="text-align: center; margin-bottom: 3rem;">
            <h1 class="section-title">Profil Saya</h1>
            <p style="color: var(--color-gray); font-size: 1.1rem;">Kelola informasi akun Anda</p>
        </div>

        <!-- Success Message -->
        @if (session('status') === 'profile-updated')
            <div style="background: rgba(16, 185, 129, 0.1); border-left: 4px solid #10B981; padding: 1rem 1.5rem; border-radius: var(--radius-md); margin-bottom: 2rem; animation: fadeInUp 0.5s;">
                <p style="color: #10B981; font-weight: 600; margin: 0;">
                    <i class="fas fa-check-circle"></i> Profil berhasil diperbarui!
                </p>
            </div>
        @endif

        <div style="display: grid; grid-template-columns: 1fr; gap: 2rem; max-width: 900px; margin: 0 auto;">
            
            <!-- Profile Information Card -->
            <div style="background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); overflow: hidden;">
                <div style="background: linear-gradient(135deg, var(--color-secondary), #A01828); padding: 1.5rem; color: white;">
                    <h2 style="margin: 0; font-family: var(--font-display); font-size: 1.5rem;">
                        <i class="fas fa-user-circle"></i> Informasi Profil
                    </h2>
                    <p style="margin: 0.5rem 0 0 0; opacity: 0.9; font-size: 0.9rem;">Perbarui informasi akun dan alamat email Anda</p>
                </div>
                
                <div style="padding: 2rem;">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name" class="form-label">
                                <i class="fas fa-user"></i> Nama Lengkap
                            </label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ old('name', $user->name) }}" autofocus autocomplete="name">
                            @error('name')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope"></i> Alamat Email
                            </label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $user->email) }}" autocomplete="username">
                            @error('email')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                            
                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                <div style="margin-top: 0.5rem;">
                                    <p style="font-size: 0.875rem; color: var(--color-secondary);">
                                        <i class="fas fa-exclamation-triangle"></i> Email Anda belum diverifikasi.
                                        <button form="send-verification" style="background: none; border: none; color: var(--color-secondary); text-decoration: underline; cursor: pointer; font-weight: 600;">
                                            Kirim ulang email verifikasi
                                        </button>
                                    </p>
                                </div>
                            @endif
                        </div>

                        <div style="display: flex; align-items: center; gap: 1rem; margin-top: 2rem;">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <form id="send-verification" method="POST" action="{{ route('verification.send') }}" style="display: none;">
                            @csrf
                        </form>
                    @endif
                </div>
            </div>

            <!-- Update Password Card -->
            <div style="background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); overflow: hidden;">
                <div style="background: linear-gradient(135deg, var(--color-primary), #2d2d2d); padding: 1.5rem; color: white;">
                    <h2 style="margin: 0; font-family: var(--font-display); font-size: 1.5rem;">
                        <i class="fas fa-lock"></i> Ubah Password
                    </h2>
                    <p style="margin: 0.5rem 0 0 0; opacity: 0.9; font-size: 0.9rem;">Pastikan akun Anda menggunakan password yang kuat</p>
                </div>
                
                <div style="padding: 2rem;">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        @method('PUT')

                        <!-- Current Password -->
                        <div class="form-group">
                            <label for="current_password" class="form-label">
                                <i class="fas fa-key"></i> Password Saat Ini
                            </label>
                            <div style="position: relative;">
                                <input id="current_password" class="form-control" type="password" name="current_password" autocomplete="current-password" style="padding-right: 2.5rem;">
                                <span onclick="togglePasswordField('current_password', this)" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: var(--color-gray);">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                            @error('current_password')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- New Password -->
                        <div class="form-group">
                            <label for="password" class="form-label">
                                <i class="fas fa-lock"></i> Password Baru
                            </label>
                            <div style="position: relative;">
                                <input id="password" class="form-control" type="password" name="password" autocomplete="new-password" style="padding-right: 2.5rem;">
                                <span onclick="togglePasswordField('password', this)" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: var(--color-gray);">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                            @error('password')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">
                                <i class="fas fa-lock"></i> Konfirmasi Password Baru
                            </label>
                            <div style="position: relative;">
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" autocomplete="new-password" style="padding-right: 2.5rem;">
                                <span onclick="togglePasswordField('password_confirmation', this)" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: var(--color-gray);">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                            @error('password_confirmation')
                                <div class="input-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div style="margin-top: 2rem;">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-shield-alt"></i> Perbarui Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Delete Account Card -->
            <div style="background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); overflow: hidden; border: 2px solid #fee;">
                <div style="background: linear-gradient(135deg, #dc2626, #b91c1c); padding: 1.5rem; color: white;">
                    <h2 style="margin: 0; font-family: var(--font-display); font-size: 1.5rem;">
                        <i class="fas fa-exclamation-triangle"></i> Hapus Akun
                    </h2>
                    <p style="margin: 0.5rem 0 0 0; opacity: 0.9; font-size: 0.9rem;">Hapus akun Anda secara permanen</p>
                </div>
                
                <div style="padding: 2rem;">
                    <p style="color: var(--color-gray); margin-bottom: 1.5rem;">
                        Setelah akun Anda dihapus, semua data dan informasi akan dihapus secara permanen. Sebelum menghapus akun, silakan unduh data atau informasi yang ingin Anda simpan.
                    </p>
                    
                    <button onclick="document.getElementById('deleteModal').style.display='flex'" class="btn" style="background: #dc2626; color: white;">
                        <i class="fas fa-trash-alt"></i> Hapus Akun
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 9999; align-items: center; justify-content: center;">
    <div style="background: white; border-radius: var(--radius-lg); max-width: 500px; width: 90%; padding: 2rem; box-shadow: var(--shadow-xl);">
        <h3 style="font-family: var(--font-display); font-size: 1.5rem; margin-bottom: 1rem; color: var(--color-primary);">
            <i class="fas fa-exclamation-circle" style="color: #dc2626;"></i> Konfirmasi Hapus Akun
        </h3>
        <p style="color: var(--color-gray); margin-bottom: 1.5rem;">
            Apakah Anda yakin ingin menghapus akun Anda? Tindakan ini tidak dapat dibatalkan.
        </p>
        
        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf
            @method('DELETE')
            
            <div class="form-group">
                <label for="delete_password" class="form-label">
                    <i class="fas fa-key"></i> Masukkan Password Anda untuk Konfirmasi
                </label>
                <input id="delete_password" class="form-control" type="password" name="password" placeholder="Password">
                @error('password', 'userDeletion')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>
            
            <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                <button type="button" onclick="document.getElementById('deleteModal').style.display='none'" class="btn btn-outline" style="flex: 1;">
                    Batal
                </button>
                <button type="submit" class="btn" style="background: #dc2626; color: white; flex: 1;">
                    <i class="fas fa-trash-alt"></i> Hapus Akun
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function togglePasswordField(inputId, icon) {
        const input = document.getElementById(inputId);
        const iconElement = icon.querySelector('i');
        
        if (input.type === 'password') {
            input.type = 'text';
            iconElement.classList.remove('fa-eye');
            iconElement.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            iconElement.classList.remove('fa-eye-slash');
            iconElement.classList.add('fa-eye');
        }
    }

    // Close modal when clicking outside
    document.getElementById('deleteModal')?.addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
        }
    });
</script>
@endsection
