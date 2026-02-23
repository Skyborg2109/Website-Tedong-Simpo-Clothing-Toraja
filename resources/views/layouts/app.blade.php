<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'Tedong Simpo Clothes - Fashion Khas Toraja Modern')">

    <title>@yield('title', config('app.name', 'Tedong Simpo Clothes'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="{{ route('home') }}" class="navbar-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Tedong Simpo Clothes" onerror="this.style.display='none'">
                <div class="logo-text">
                    <span class="text-tedong">Tedong</span>
                    <span class="text-simpo">Simpo</span>
                    <span class="text-clothing">Clothing</span>
                </div>
            </a>

            <div class="navbar-toggle" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="navbar-menu" id="navbarMenu">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('products') }}" class="{{ request()->routeIs('products*') ? 'active' : '' }}">Produk</a>
                <a href="{{ route('testimonials') }}" class="{{ request()->routeIs('testimonials') ? 'active' : '' }}">Testimoni</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a>

                @auth
                    <div style="margin-left: 1rem; position: relative;" class="dropdown">
                        <button onclick="toggleUserMenu()" class="btn btn-outline" style="padding: 0.5rem 1rem;">
                            <i class="fas fa-user"></i> {{ Auth::user()->name }}
                        </button>
                        <div id="userMenu" style="display: none; position: absolute; right: 0; top: 100%; background: white; box-shadow: var(--shadow-lg); border-radius: var(--radius-md); padding: 0.5rem; min-width: 150px; z-index: 1000; margin-top: 0.5rem;">
                            @if(auth()->user()->usertype === 'admin')
                                <a href="{{ route('admin.dashboard') }}" style="display: block; padding: 0.5rem 1rem; color: var(--color-secondary); width: 100%; font-weight: 600;"><i class="fas fa-shield-alt"></i> Dashboard Admin</a>
                            @else
                                <a href="{{ route('dashboard') }}" style="display: block; padding: 0.5rem 1rem; color: var(--color-primary); width: 100%;">Dashboard</a>
                            @endif
                            
                            <a href="{{ route('profile.edit') }}" style="display: block; padding: 0.5rem 1rem; color: var(--color-primary); width: 100%;">Profile</a>
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" style="display: block; padding: 0.5rem 1rem; color: var(--color-secondary); width: 100%; text-align: left; background: none; border: none; cursor: pointer;">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <div style="display: flex; gap: 0.5rem; margin-left: 1rem;">
                        <a href="{{ route('login') }}" class="btn btn-outline" style="padding: 0.5rem 1rem;">Masuk</a>
                        <a href="{{ route('register') }}" class="btn btn-primary" style="padding: 0.5rem 1rem;">Daftar</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Tedong Simpo Clothes</h3>
                    <p>Fashion khas Toraja dengan sentuhan modern. Melestarikan budaya melalui desain pakaian yang elegan dan berkualitas.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('products') }}">Katalog Produk</a></li>
                        <li><a href="{{ route('testimonials') }}">Testimoni</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Kontak</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt" style="width: 20px;"></i> Rantepao, Toraja Utara</li>
                        <li><i class="fas fa-phone" style="width: 20px;"></i> +62 822-9147-5119</li>
                        <li><i class="fas fa-envelope" style="width: 20px;"></i> info@tedongsimpo.com</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Tedong Simpo Clothes. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/6282291475119?text=Halo%20Tedong%20Simpo%20Clothes" class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp" style="font-size: 2rem;"></i>
    </a>

    <!-- Scripts -->
    <script>
        function toggleMenu() {
            document.getElementById('navbarMenu').classList.toggle('active');
        }

        function toggleUserMenu() {
            const menu = document.getElementById('userMenu');
            menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
        }

        // Close user menu when clicking outside
        document.addEventListener('click', function(event) {
            const userMenu = document.getElementById('userMenu');
            const userButton = document.querySelector('.dropdown button');
            
            if (userMenu && userButton && !userMenu.contains(event.target) && !userButton.contains(event.target)) {
                userMenu.style.display = 'none';
            }
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
