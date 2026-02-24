<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tedong Simpo Clothes') }} - Auth</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet" />
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    
    <style>
        * { box-sizing: border-box; }

        :root {
            --color-primary: #1a1a1a;
            --color-secondary: #C41E3A; /* Merah Toraja */
            --color-accent: #D4AF37;    /* Gold */
            --color-dark: #13111b;
            --form-bg: #1e1c2b;
        }

        body {
            margin: 0;
            background: #1a0a0a;
            color: #fdfdfd;
            min-height: 100vh;
            display: grid;
            place-items: center;
            overflow: hidden;
            font-family: "Poppins", sans-serif;
            padding: 20px;
            position: relative;
        }

        /* Hero Image Background with Blur */
        .page-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("{{ asset('images/hero-bg.png') }}") center/cover no-repeat;
            filter: blur(8px) brightness(0.4);
            z-index: -2;
            transform: scale(1.1); /* Prevent blurred edges */
        }

        /* Overlay Pattern Toraja */
        .page-pattern {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23C41E3A' fill-opacity='0.1'%3E%3Cpath d='M50 50l20-20H30l20 20zm0 0l20 20H30l20-20zm0 0l-20-20v40l20-20zm0 0l20-20v40l-20-20z'/%3E%3C/g%3E%3C/svg%3E");
            z-index: -1;
            opacity: 0.5;
            animation: moveSlowly 60s linear infinite;
        }

        @keyframes moveSlowly {
            from { background-position: 0 0; }
            to { background-position: 1000px 1000px; }
        }

        /* login-5 styles - Glassmorphism touch */
        .card {
            position: relative;
            overflow: hidden;
            width: 800px;
            height: 550px;
            border-radius: 24px;
            background: rgba(19, 17, 27, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(212, 175, 55, 0.2);
            box-shadow: 0 40px 100px rgba(0,0,0,0.8), inset 0 0 20px rgba(255,255,255,0.02);
            z-index: 1;
        }

        .card-bg {
            position: absolute;
            z-index: 2;
            top: 0;
            left: 0;
            bottom: 0;
            width: 50%;
            background: linear-gradient(135deg, var(--color-secondary) 0%, #8B0000 100%);
            border-radius: 20px;
            transition: 0.7s cubic-bezier(0.68, -0.1, 0.2, 1.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Gold bar effect on the sliding panel */
        .card-bg::after {
            content: "";
            position: absolute;
            top: 0; bottom: 0; right: 0;
            width: 4px;
            background: linear-gradient(to bottom, transparent, var(--color-accent), transparent);
            opacity: 0.5;
        }

        .card-bg.move-right {
            transform: translateX(100%);
        }

        .hero, .form-container {
            position: absolute;
            width: 50%;
            height: 100%;
            transition: 0.7s cubic-bezier(0.68, -0.1, 0.2, 1.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 45px;
            opacity: 0;
            visibility: hidden;
        }

        .active {
            opacity: 1;
            visibility: visible;
        }

        /* POSISI DEFAULT */
        .hero.register { left: 0; z-index: 3; }
        .form-container.login { left: 0; z-index: 1; }
        .hero.login { left: 50%; z-index: 3; }
        .form-container.register { left: 50%; z-index: 1; }

        /* ANIMASI TRANSLASI */
        .hero.register:not(.active) { transform: translateX(-100%) scale(0.85); }
        .form-container.login:not(.active) { transform: translateX(100%) scale(0.85); }
        .hero.login:not(.active) { transform: translateX(100%) scale(0.85); }
        .form-container.register:not(.active) { transform: translateX(-100%) scale(0.85); }

        h2 {
            margin: 0 0 12px;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 28px;
            text-align: center;
            color: #fff;
        }

        .hero h2 {
            font-size: 32px;
        }

        p {
            margin: 0 0 20px;
            color: #d1d1d6;
            line-height: 1.6;
            font-size: 14px;
            text-align: center;
        }

        .hero button {
            padding: 14px 45px;
            border-radius: 50px;
            letter-spacing: 1.5px;
            color: #fff;
            border: 2px solid var(--color-accent);
            background: transparent;
            transition: 0.4s;
            cursor: pointer;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .hero button:hover {
            background: var(--color-accent);
            color: var(--color-primary);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
        }

        .sso {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .sso a {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 1px solid rgba(212, 175, 55, 0.3);
            font-size: 18px;
            color: #fff;
            text-decoration: none;
            transition: 0.3s;
            background: rgba(255,255,255,0.03);
        }
        
        .sso a:hover {
            background: var(--color-accent);
            color: var(--color-primary);
            border-color: var(--color-accent);
            transform: translateY(-3px);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 14px;
            width: 100%;
        }

        .input-group { width: 100%; }

        input {
            font-family: inherit;
            border-radius: 12px;
            border: 1px solid #333140;
            background: #1a1824;
            padding: 15px 18px;
            color: #fff;
            width: 100%;
            font-size: 14px;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--color-accent);
            background: #211f2d;
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.1);
        }

        .error-message {
            color: var(--color-secondary);
            font-size: 11px;
            margin-top: 5px;
            font-weight: 500;
        }

        .submit-btn, .btn-primary {
            border: 0;
            padding: 15px 0;
            border-radius: 50px;
            font-family: inherit;
            color: #fff;
            width: 100%;
            background: linear-gradient(135deg, var(--color-secondary) 0%, #a01828 100%);
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            font-size: 14px;
            margin-top: 8px;
            letter-spacing: 1px;
            box-shadow: 0 15px 35px rgba(196, 30, 58, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .submit-btn:hover, .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 45px rgba(196, 30, 58, 0.5);
            background: linear-gradient(135deg, #d42442 0%, var(--color-secondary) 100%);
            color: #fff;
        }

        .forgot-link {
            font-size: 12px;
            color: #888;
            text-decoration: none;
            text-align: center;
            display: block;
            margin-top: 5px;
            transition: 0.3s;
        }

        .forgot-link:hover { color: var(--color-accent); }
        
        .status-msg {
            color: #10B981;
            font-size: 13px;
            margin-bottom: 20px;
            text-align: center;
            background: rgba(16, 185, 129, 0.1);
            padding: 10px;
            border-radius: 10px;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        /* Support for other auth pages */
        .auth-container {
            width: 100%;
            max-width: 480px;
            padding: 50px;
            background: var(--color-dark);
            border-radius: 24px;
            border: 1px solid rgba(212, 175, 55, 0.2);
            box-shadow: 0 40px 100px rgba(0,0,0,0.8);
            position: relative;
            z-index: 10;
        }

        /* Back to Home Button */
        .back-home {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .back-home i {
            font-size: 16px;
            transition: transform 0.3s ease;
        }

        .back-home:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
            border-color: var(--color-accent);
            color: var(--color-accent);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        .back-home:hover i {
            transform: translateX(-3px);
        }

        @media (max-width: 850px) {
            .back-home {
                top: 15px;
                left: 15px;
                padding: 10px 16px;
                font-size: 13px;
                background: rgba(19, 17, 27, 0.8);
            }
        }

        .mobile-switch {
            display: none;
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #aaa;
            border-top: 1px solid rgba(255,255,255,0.05);
            padding-top: 20px;
            width: 100%;
        }
        .mobile-switch a {
            color: var(--color-accent);
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
        }

        @media (max-width: 850px) {
            body {
                padding: 10px;
                overflow-y: auto; /* Allow scroll if form is tall */
            }
            .card { 
                width: 100%; 
                height: auto; 
                max-width: 420px; 
                border-radius: 20px;
                background: rgba(19, 17, 27, 0.95);
            }
            .card-bg, .hero { display: none !important; }
            .form-container {
                position: relative;
                width: 100%;
                left: 0 !important;
                transform: none !important;
                opacity: 0;
                visibility: hidden;
                display: none;
                padding: 40px 25px;
            }
            .form-container.active {
                display: flex;
                opacity: 1;
                visibility: visible;
                animation: fadeInUp 0.5s ease;
            }
            .mobile-switch {
                display: block;
            }
            h2 { font-size: 24px; }
            .submit-btn { padding: 14px 0; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="page-bg"></div>
    <div class="page-pattern"></div>
    @if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register' || Request::is('login') || Request::is('register'))
    <div class="card" id="authCard">
        <div class="card-bg" id="cardBg"></div>

        <!-- HERO REGISTER (Kiri): Muncul saat Form Login Aktif -->
        <div class="hero register" id="heroRegister">
            <h2>Selamat Datang</h2>
            <p>Sudah punya akun? Masuk untuk melanjutkan belanja Anda dengan gaya khas Toraja.</p>
            <button type="button" onclick="switchToLogin()">MASUK</button>
        </div>

        <!-- HERO LOGIN (Kanan): Muncul saat Form Register Aktif -->
        <div class="hero login" id="heroLogin">
            <h2>Halo, Sobat!</h2>
            <p>Belum punya akun? Daftar sekarang dan mulai koleksi busana etnik terbaik dari Tedong Simpo.</p>
            <button type="button" onclick="switchToRegister()">DAFTAR</button>
        </div>

        <!-- FORM LOGIN (Kiri): Muncul saat User di halaman Login -->
        <div class="form-container login" id="formLogin">
            <h2>Masuk Akun</h2>
            <div class="sso">
                <a href="#" class="fa-brands fa-facebook"></a>
                <a href="#" class="fa-brands fa-google"></a>
                <a href="#" class="fa-brands fa-linkedin"></a>
            </div>
            <p>Gunakan email terdaftar Anda</p>
            
            @if (session('status'))
                <div class="status-msg">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus autocomplete="username" />
                    @error('email') <div class="error-message">{{ $message }}</div> @enderror
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                    @error('password') <div class="error-message">{{ $message }}</div> @enderror
                </div>
                <div style="display: flex; align-items: center; gap: 10px; margin-top: 5px;">
                    <input type="checkbox" name="remember" id="remember_me" style="width: auto; margin: 0; accent-color: var(--color-accent);" />
                    <label for="remember_me" style="font-size: 13px; color: #888; cursor: pointer;">Ingat Saya</label>
                </div>
                <button type="submit" class="submit-btn">LOGIN SEKARANG</button>
                @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">Lupa kata sandi?</a>
                @endif
                
                <div class="mobile-switch">
                    Belum punya akun? <a href="javascript:void(0)" onclick="switchToRegister()">Daftar Sekarang</a>
                </div>
            </form>
        </div>

        <!-- FORM REGISTER (Kanan): Muncul saat User di halaman Register -->
        <div class="form-container register" id="formRegister">
            <h2>Buat Akun</h2>
            <div class="sso">
                <a href="#" class="fa-brands fa-facebook"></a>
                <a href="#" class="fa-brands fa-google"></a>
                <a href="#" class="fa-brands fa-linkedin"></a>
            </div>
            <p>Daftar dengan email Anda</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" />
                    @error('name') <div class="error-message">{{ $message }}</div> @enderror
                </div>
                <div class="input-group">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="username" />
                    @error('email') <div class="error-message">{{ $message }}</div> @enderror
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                    @error('password') <div class="error-message">{{ $message }}</div> @enderror
                </div>
                <div class="input-group">
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password" />
                </div>
                <button type="submit" class="submit-btn" style="margin-top: 5px;">DAFTAR AKUN</button>
                
                <div class="mobile-switch">
                    Sudah punya akun? <a href="javascript:void(0)" onclick="switchToLogin()">Masuk di sini</a>
                </div>
            </form>
        </div>
        
        <a href="{{ url('/') }}" class="back-home">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>
    @else
    <div class="auth-container">
        {{ $slot }}
        <a href="{{ url('/') }}" class="back-home">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>
    @endif

    <script>
        const cardBg = document.getElementById("cardBg");
        const loginHero = document.getElementById("heroLogin");
        const registerHero = document.getElementById("heroRegister");
        const loginForm = document.getElementById("formLogin");
        const registerForm = document.getElementById("formRegister");

        function showLogin() {
            if (!cardBg) return;
            cardBg.classList.add("move-right");
            loginHero.classList.add("active");
            loginForm.classList.add("active");
            
            registerHero.classList.remove("active");
            registerForm.classList.remove("active");
        }

        function showRegister() {
            if (!cardBg) return;
            cardBg.classList.remove("move-right");
            registerHero.classList.add("active");
            registerForm.classList.add("active");
            
            loginHero.classList.remove("active");
            loginForm.classList.remove("active");
        }

        document.addEventListener("DOMContentLoaded", () => {
            const isLoginPage = window.location.pathname.includes('login');
            const isRegisterPage = window.location.pathname.includes('register');

            if (isLoginPage) {
                showLogin();
            } else if (isRegisterPage) {
                showRegister();
            }
        });

        function switchToLogin() {
            showLogin();
            setTimeout(() => { window.location.href = "{{ route('login') }}"; }, 500);
        }

        function switchToRegister() {
            showRegister();
            setTimeout(() => { window.location.href = "{{ route('register') }}"; }, 500);
        }
    </script>
</body>
</html>
