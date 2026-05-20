<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 flex min-h-screen">

    <aside class="w-72 bg-white border-r border-gray-200 flex flex-col justify-between shrink-0 min-h-0 overflow-y-auto">
        <div>
            <div class="p-6 flex items-center justify-between border-b border-gray-100">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-red-700 rounded-full flex items-center justify-center text-white shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold text-red-700 leading-tight">Admin Panel</h1>
                        <p class="text-xs text-gray-500 mt-0.5">Manajemen Konten</p>
                    </div>
                </div>
                <button class="bg-gray-100 hover:bg-gray-200 text-gray-800 p-1.5 rounded-lg transition shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path></svg>
                </button>
            </div>

            <nav class="p-4 space-y-2">
                <a href="{{ route('admin.beranda') }}" class="flex items-center space-x-4 px-4 py-3 {{ request()->routeIs('admin.beranda') ? 'bg-slate-50 text-red-600 rounded-xl font-bold' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium' }} transition">
                    <svg class="w-6 h-6 {{ request()->routeIs('admin.beranda') ? 'text-red-600' : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span>Kelola Beranda</span>
                </a>

                <a href="{{ route('admin.katalog') }}" class="flex items-center space-x-4 px-4 py-3 {{ request()->routeIs('admin.katalog') ? 'bg-slate-50 text-red-600 rounded-xl font-bold' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium' }} transition">
                    <svg class="w-6 h-6 {{ request()->routeIs('admin.katalog') ? 'text-red-600' : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                    <span>Kelola Katalog Produk</span>
                </a>

                <a href="{{ route('admin.tentang') }}" class="flex items-center space-x-4 px-4 py-3 {{ request()->routeIs('admin.tentang') ? 'bg-slate-50 text-red-600 rounded-xl font-bold' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium' }} transition">
                    <svg class="w-6 h-6 {{ request()->routeIs('admin.tentang') ? 'text-red-600' : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <span>Kelola Tentang Kami</span>
                </a>

                <a href="{{ route('admin.kemitraan') }}" class="flex items-center space-x-4 px-4 py-3 {{ request()->routeIs('admin.kemitraan') ? 'bg-slate-50 text-red-600 rounded-xl font-bold' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium' }} transition">
                    <svg class="w-6 h-6 {{ request()->routeIs('admin.kemitraan') ? 'text-red-600' : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Kelola Kemitraan & Info</span>
                </a>

                <a href="{{ route('admin.testimoni') }}" class="flex items-center space-x-4 px-4 py-3 {{ request()->routeIs('admin.testimoni') ? 'bg-slate-50 text-red-600 rounded-xl font-bold' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium' }} transition">
                    <svg class="w-6 h-6 {{ request()->routeIs('admin.testimoni') ? 'text-red-600' : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    <span>Kelola Testimoni</span>
                </a>
            </nav>
        </div>

        <div class="p-6 border-t border-gray-100 flex flex-col space-y-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3 text-gray-700 font-medium">
                    <img src="{{ asset('images/lamp-pendant.png') }}" alt="Ikon Mode" class="w-5 h-5 object-contain">
                    <span>Mode Tampilan</span>
                </div>
                <button class="bg-gray-100 p-2 rounded-lg text-gray-600 hover:bg-gray-200 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                </button>
            </div>
            <a href="#" class="flex items-center space-x-3 font-medium text-yellow-500 hover:text-yellow-600 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                <span>Keluar</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 flex flex-col relative min-h-0 overflow-y-auto">
        <header class="px-8 py-6 flex justify-between items-center sticky top-0 bg-gray-50/80 backdrop-blur-sm z-10">
            <div>
                <h2 class="text-2xl font-bold mb-1 text-gray-800">@yield('page_title', 'Kelola Konten Website')</h2>
                <p class="text-gray-500 text-sm">@yield('page_description', 'Gunakan tampilan ini untuk mengelola konten backend.')</p>
            </div>

            <div class="flex items-center space-x-3">
                <button class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center text-red-600 hover:bg-gray-200 transition relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </button>

                <div class="bg-gray-100 h-12 px-5 flex flex-col justify-center rounded-2xl text-left">
                    <p class="text-sm font-bold text-gray-800 leading-tight">Waktu</p>
                    <p class="text-xs text-gray-500 leading-tight mt-0.5">{{ now()->format('H:i:s') }} WIB</p>
                </div>

                <div class="bg-gray-100 h-12 pl-2 pr-5 flex items-center space-x-3 rounded-2xl">
                    <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center overflow-hidden shadow-sm border border-gray-100">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm font-bold text-gray-800 leading-tight">Admin Abdel</p>
                        <p class="text-[10px] text-gray-400 leading-tight mt-0.5">Pengelola Website</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="p-8">
            <div class="bg-white rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.04)] border border-gray-100 p-8 min-h-[500px]">
                @yield('content')
            </div>
        </div>
    </main>

    @stack('modals')
    @stack('scripts')
</body>
</html>
