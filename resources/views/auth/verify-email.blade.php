<x-guest-layout>
    <div style="text-align: center; margin-bottom: 2rem;">
        <h1 class="auth-title">Verifikasi Email</h1>
        <p class="auth-subtitle">
            {{ __('Terima kasih telah mendaftar! Sebelum memulai, mohon verifikasi alamat email Anda dengan mengklik link yang baru saja kami kirimkan ke email Anda. Jika Anda tidak menerima email tersebut, kami dengan senang hati akan mengirimkannya lagi.') }}
        </p>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div style="color: #10B981; margin-bottom: 1.5rem; text-align: center; font-weight: 500; background: rgba(16, 185, 129, 0.1); padding: 1rem; border-radius: var(--radius-md);">
            {{ __('Link verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.') }}
        </div>
    @endif

    <div class="form-group" style="margin-top: 1rem;">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                {{ __('Kirim Ulang Email Verifikasi') }}
            </button>
        </form>
    </div>

    <div class="auth-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="auth-link" style="background: none; border: none; font-size: 0.9rem; cursor: pointer; text-decoration: underline;">
                {{ __('Keluar') }}
            </button>
        </form>
    </div>
</x-guest-layout>
