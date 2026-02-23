<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Login - Tedong Simpo Clothes</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .admin-login-wrapper {
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 100%);
        }
        
        .admin-card {
            border-top: 5px solid var(--color-secondary);
        }

        .auth-title {
            color: var(--color-secondary);
        }
    </style>
</head>
<body>
    <div class="auth-wrapper admin-login-wrapper">
        <div class="auth-card admin-card">
            <div class="auth-header">
                <div class="auth-logo">
                    <a href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="Tedong Simpo Clothes" onerror="this.onerror=null; this.parentElement.innerHTML='<span style=\'color:var(--color-primary)\'>Tedong</span><span style=\'color:var(--color-secondary)\'>Simpo</span>'">
                    </a>
                </div>
                <h1 class="auth-title">Admin Portal</h1>
                <p class="auth-subtitle">Login khusus administrator</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div style="color: #10B981; margin-bottom: 1rem; text-align: center; font-weight: 500;">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email Admin') }}</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="admin@example.com" />
                    @error('email')
                        <div class="input-error">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    @error('password')
                        <div class="input-error">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-check">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-label" style="margin-bottom: 0; font-weight: normal; font-size: 0.9rem;">{{ __('Ingat Saya') }}</label>
                </div>

                <div class="form-group" style="margin-top: 2rem;">
                    <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center; background: var(--color-secondary); border-color: var(--color-secondary);">
                        <i class="fas fa-lock" style="margin-right: 8px;"></i> {{ __('Masuk ke Admin') }}
                    </button>
                </div>

                <div class="auth-footer">
                    <a class="auth-link" href="{{ route('home') }}">
                        <i class="fas fa-arrow-left" style="margin-right: 5px;"></i> {{ __('Kembali ke Beranda') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
