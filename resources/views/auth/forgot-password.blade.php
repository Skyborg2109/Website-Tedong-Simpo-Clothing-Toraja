<x-guest-layout>
    <div style="text-align: center; margin-bottom: 2rem;">
        <h1 class="auth-title">Lupa Password</h1>
        <p class="auth-subtitle">
            {{ __('Jangan khawatir. Masukkan email Anda dan kami akan mengirimkan link reset password.') }}
        </p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div style="color: #10B981; margin-bottom: 1rem; text-align: center; font-weight: 500;">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus />
            @error('email')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group" style="margin-top: 1rem;">
            <button type="submit" class="btn-primary">
                {{ __('Kirim Link Reset') }}
            </button>
        </div>
        
        <div class="auth-footer">
            <a class="auth-link" href="{{ route('login') }}">
                <i class="fas fa-arrow-left" style="margin-right: 5px;"></i> {{ __('Kembali ke Login') }}
            </a>
        </div>
    </form>
</x-guest-layout>
