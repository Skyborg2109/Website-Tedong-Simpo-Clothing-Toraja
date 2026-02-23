<x-guest-layout>
    <div style="text-align: center; margin-bottom: 2rem;">
        <h1 class="auth-title">Reset Password</h1>
        <p class="auth-subtitle">Buat password baru untuk akun Anda</p>
    </div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
            @error('email')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">{{ __('Password Baru') }}</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            @error('password')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation" class="form-label">{{ __('Konfirmasi Password') }}</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            @error('password_confirmation')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group" style="margin-top: 1rem;">
            <button type="submit" class="btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</x-guest-layout>
