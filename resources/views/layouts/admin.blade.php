<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Panel - Tedong Simpo Clothes')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    
    <style>
        :root {
            --sidebar-width: 260px;
            --header-height: 70px;
        }

        body {
            background-color: var(--color-light);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .admin-sidebar {
            width: var(--sidebar-width);
            background-color: var(--color-primary);
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 1000;
            transition: var(--transition-base);
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            height: var(--header-height);
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 0 1rem;
        }

        .sidebar-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: white;
            font-family: var(--font-display);
            font-weight: 700;
            font-size: 1.25rem;
        }

        .sidebar-logo img {
            height: 48px;
            width: 48px;
            object-fit: contain;
            border-radius: 50%;
            background-color: white;
            padding: 3px;
        }

        .sidebar-menu {
            flex: 1;
            padding: 1rem 0;
            overflow-y: auto;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition-base);
            gap: 1rem;
            font-weight: 500;
        }

        .menu-item:hover, .menu-item.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            border-left: 3px solid var(--color-secondary);
        }

        .menu-item i {
            width: 20px;
            text-align: center;
        }

        .sidebar-footer {
            padding: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Main Content */
        .admin-main {
            flex: 1;
            margin-left: var(--sidebar-width);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: calc(100% - var(--sidebar-width));
        }

        /* Top Header */
        .admin-header {
            height: var(--header-height);
            background-color: white;
            box-shadow: var(--shadow-sm);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            position: sticky;
            top: 0;
            z-index: 900;
        }

        .header-toggle {
            display: none; /* Show on mobile */
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--color-primary);
        }

        .header-profile {
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
        }

        .profile-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            background: none;
            border: none;
            font-family: var(--font-body);
            font-weight: 600;
            color: var(--color-primary);
        }

        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--color-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-primary);
            font-size: 1.25rem;
        }

        /* Content Area */
        .admin-content {
            padding: 2rem;
            flex: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }

            .admin-sidebar.active {
                transform: translateX(0);
            }

            .admin-main {
                margin-left: 0;
                width: 100%;
            }

            .header-toggle {
                display: block;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Sidebar -->
    <aside class="admin-sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-logo">
                <img src="{{ asset('images/logo.png') }}" alt="TC" onerror="this.style.display='none'">
                <span>Tedong Simpo Clothing</span>
            </a>
        </div>
        
        <nav class="sidebar-menu">
            <a href="{{ route('admin.dashboard') }}" class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fas fa-chart-line"></i>
                <span>Dashboard</span>
            </a>
            
            <a href="{{ route('admin.products.index') }}" class="menu-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                <i class="fas fa-box"></i>
                <span>Produk</span>
            </a>
            
            <a href="{{ route('admin.orders.index') }}" class="menu-item {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                <i class="fas fa-shopping-cart"></i>
                <span>Pesanan</span>
            </a>
            
            <a href="{{ route('admin.customers.index') }}" class="menu-item {{ request()->routeIs('admin.customers.*') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                <span>Pelanggan</span>
            </a>
            
            <a href="{{ route('admin.gallery.index') }}" class="menu-item {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                <i class="fas fa-images"></i>
                <span>Galeri</span>
            </a>

            <a href="{{ route('admin.settings.index') }}" class="menu-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <i class="fas fa-cog"></i>
                <span>Pengaturan</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <a href="{{ route('home') }}" class="menu-item" style="color: rgba(255,255,255,0.7); padding-left: 0;">
                <i class="fas fa-external-link-alt"></i>
                <span>Lihat Website</span>
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="admin-main">
        <header class="admin-header">
            <div class="header-toggle" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </div>
            
            <h2 style="margin: 0; font-size: 1.25rem;">@yield('header_title', '')</h2>

            <div class="header-profile">
                <button class="profile-btn" onclick="toggleProfileMenu()">
                    <span>{{ Auth::user()->name }}</span>
                    <div class="profile-img">
                        <i class="fas fa-user"></i>
                    </div>
                </button>
                
                <div id="profileMenu" style="display: none; position: absolute; right: 0; top: 100%; background: white; box-shadow: var(--shadow-lg); border-radius: var(--radius-md); padding: 0.5rem; min-width: 150px; z-index: 1000; margin-top: 0.5rem;">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" style="display: block; padding: 0.5rem 1rem; color: var(--color-danger); width: 100%; text-align: left; background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <main class="admin-content">
            @if(session('success'))
                <div class="alert alert-success" style="background: #d1fae5; color: #065f46; padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1rem;">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-error" style="background: #fee2e2; color: #991b1b; padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1rem;">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }

        function toggleProfileMenu() {
            const menu = document.getElementById('profileMenu');
            menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
        }

        // Close menus when clicking outside
        document.addEventListener('click', function(event) {
            const profileMenu = document.getElementById('profileMenu');
            const profileBtn = document.querySelector('.profile-btn');
            
            if (profileMenu && profileBtn && !profileMenu.contains(event.target) && !profileBtn.contains(event.target)) {
                profileMenu.style.display = 'none';
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
