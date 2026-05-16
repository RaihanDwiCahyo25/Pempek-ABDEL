<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Katalog Produk - Admin Panel</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script> </head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 flex h-screen overflow-hidden">

    <aside class="w-72 bg-white border-r border-gray-200 flex flex-col justify-between shrink-0">
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
                <a href="/admin/kelola-beranda" class="flex items-center space-x-4 px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span>Kelola Beranda</span>
                </a>
                
                <a href="/admin/kelola-katalog" class="flex items-center space-x-4 px-4 py-3 bg-slate-50 text-red-600 rounded-xl font-bold transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                    <span>Kelola Katalog Produk</span>
                </a>

                <a href="#" class="flex items-center space-x-4 px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <span>Kelola Tentang Kami</span>
                </a>
                <a href="#" class="flex items-center space-x-4 px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Kelola Kemitraan & Info</span>
                </a>
                <a href="#" class="flex items-center space-x-4 px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
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
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>
            </div>
            <a href="#" class="flex items-center space-x-3 font-medium text-yellow-500 hover:text-yellow-600 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                <span>Keluar</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 flex flex-col relative overflow-y-auto">
        
        <header class="px-8 py-6 flex justify-between items-center sticky top-0 bg-gray-50/80 backdrop-blur-sm z-10">
            <div>
                <h2 class="text-2xl font-bold mb-1 text-gray-800">Kelola Konten Website</h2>
                <p class="text-gray-500 text-sm">Kelola konten di Katalog Produk</p>
            </div>
            <div class="flex items-center space-x-3">
                <button class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center text-red-600 hover:bg-gray-200 transition relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </button>
                <div class="bg-gray-100 h-12 px-5 flex flex-col justify-center rounded-2xl text-left">
                    <p class="text-sm font-bold text-gray-800 leading-tight">Waktu</p>
                    <p class="text-xs text-gray-500 leading-tight mt-0.5">15:07:14 WIB</p>
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
            <div class="bg-white rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.02)] border border-gray-100 p-8 min-h-[500px]">
                
                <div class="flex justify-end space-x-4 mb-6">
                    <button class="flex items-center px-5 py-2.5 text-red-700 border border-red-700 rounded-lg font-bold hover:bg-red-50 transition text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Ekspor PDF
                    </button>
                    <button type="button" id="btnTambahProduk" class="flex items-center px-5 py-2.5 bg-[#B91C1C] text-white rounded-lg font-bold hover:bg-red-800 transition text-sm shadow-md">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            Tambah Produk
                    </button>
                </div>

                <div class="flex justify-between items-center mb-6">
                    <div class="relative w-48">
                        <select class="appearance-none w-full border border-gray-200 rounded-lg pl-4 pr-10 py-2.5 text-sm text-gray-600 bg-white focus:outline-none focus:border-red-500 shadow-sm">
                            <option>Semua kategori</option>
                            <option>Frozen Food</option>
                            <option>Siap Saji</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>

                    <div class="relative w-72">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" placeholder="Cari nama produk..." class="block w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-lg text-sm text-gray-700 focus:outline-none focus:border-red-500 shadow-sm bg-white">
                    </div>
                </div>

                <div class="overflow-x-auto rounded-t-lg border border-gray-200 border-b-0">
                    <table class="w-full text-left border-collapse text-sm">
                        <thead class="bg-gray-50 border-b border-gray-200 text-gray-700 font-bold">
                            <tr>
                                <th class="py-4 px-6">Gambar Produk</th>
                                <th class="py-4 px-6">Nama Produk</th>
                                <th class="py-4 px-6">Status</th>
                                <th class="py-4 px-6 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            
                            <tr class="border-b border-gray-200 hover:bg-gray-50/50 transition">
                                <td class="py-3 px-6">
                                    <div class="w-20 h-14 bg-gray-100 rounded-md overflow-hidden flex items-center justify-center">
                                        <img src="https://via.placeholder.com/150/EEEEEE/999999?text=Pempek" alt="Produk" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="py-3 px-6 font-medium">Pempek Tekwan Frozen</td>
                                <td class="py-3 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-[#B91C1C] text-white">Aktif</span>
                                </td>
                                <td class="py-3 px-6 text-right">
                                    <button type="button" class="btnEditProduk text-red-600 hover:text-red-800 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </button>
                                    <button type="button" class="btnHapusProduk text-yellow-500 hover:text-yellow-600 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="border-b border-gray-200 hover:bg-gray-50/50 transition">
                                <td class="py-3 px-6">
                                    <div class="w-20 h-14 bg-gray-100 rounded-md overflow-hidden flex items-center justify-center"><img src="https://via.placeholder.com/150/EEEEEE/999999?text=Pempek" class="w-full h-full object-cover"></div>
                                </td>
                                <td class="py-3 px-6 font-medium">Pempek Telur Frozen</td>
                                <td class="py-3 px-6"><span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-[#B91C1C] text-white">Aktif</span></td>
                                <td class="py-3 px-6 text-right">
                                    <button type="button" class="btnEditProduk text-red-600 hover:text-red-800 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </button>
                                    <button type="button" class="btnHapusProduk text-yellow-500 hover:text-yellow-600 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="border-b border-gray-200 hover:bg-gray-50/50 transition">
                                <td class="py-3 px-6">
                                    <div class="w-20 h-14 bg-gray-100 rounded-md overflow-hidden flex items-center justify-center"><img src="https://via.placeholder.com/150/EEEEEE/999999?text=Pempek" class="w-full h-full object-cover"></div>
                                </td>
                                <td class="py-3 px-6 font-medium">Pempek Kriting Frozen</td>
                                <td class="py-3 px-6"><span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-[#B91C1C] text-white">Aktif</span></td>
                                <td class="py-3 px-6 text-right">
                                    <button type="button" class="btnEditProduk text-red-600 hover:text-red-800 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </button>
                                    <button type="button" class="btnHapusProduk text-yellow-500 hover:text-yellow-600 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="border-b border-gray-200 hover:bg-gray-50/50 transition">
                                <td class="py-3 px-6">
                                    <div class="w-20 h-14 bg-gray-100 rounded-md overflow-hidden flex items-center justify-center"><img src="https://via.placeholder.com/150/EEEEEE/999999?text=Pempek" class="w-full h-full object-cover"></div>
                                </td>
                                <td class="py-3 px-6 font-medium">Pempek Lenjer Frozen</td>
                                <td class="py-3 px-6"><span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-[#B91C1C] text-white">Aktif</span></td>
                                <td class="py-3 px-6 text-right">
                                    <button type="button" class="btnEditProduk text-red-600 hover:text-red-800 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </button>
                                    <button type="button" class="btnHapusProduk text-yellow-500 hover:text-yellow-600 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="border-b border-gray-200 hover:bg-gray-50/50 transition">
                                <td class="py-3 px-6">
                                    <div class="w-20 h-14 bg-gray-100 rounded-md overflow-hidden flex items-center justify-center"><img src="https://via.placeholder.com/150/EEEEEE/999999?text=Pempek" class="w-full h-full object-cover"></div>
                                </td>
                                <td class="py-3 px-6 font-medium">Pempek Kulit Ikan Tenggiri<br>Frozen</td>
                                <td class="py-3 px-6"><span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-[#B91C1C] text-white">Aktif</span></td>
                                <td class="py-3 px-6 text-right">
                                    <button type="button" class="btnEditProduk text-red-600 hover:text-red-800 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </button>
                                    <button type="button" class="btnHapusProduk text-yellow-500 hover:text-yellow-600 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="border-b border-gray-200 hover:bg-gray-50/50 transition">
                                <td class="py-3 px-6">
                                    <div class="w-20 h-14 bg-gray-100 rounded-md overflow-hidden flex items-center justify-center"><img src="https://via.placeholder.com/150/EEEEEE/999999?text=Pempek" class="w-full h-full object-cover"></div>
                                </td>
                                <td class="py-3 px-6 font-medium">Pempek Adaan Frozen</td>
                                <td class="py-3 px-6"><span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-[#B91C1C] text-white">Aktif</span></td>
                                <td class="py-3 px-6 text-right">
                                    <button type="button" class="btnEditProduk text-red-600 hover:text-red-800 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </button>
                                    <button type="button" class="btnHapusProduk text-yellow-500 hover:text-yellow-600 mx-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 text-xs text-gray-500 px-2">
                    Menampilkan 1 - 6 dari 6 data
                </div>

            </div>
        </div>

    </main>

    <div id="modalTambahProduk" class="fixed inset-0 z-50 hidden bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4 transition-opacity">
        
        <div class="bg-white rounded-2xl w-full max-w-2xl max-h-[90vh] flex flex-col shadow-2xl relative animate-fade-in-up">
            
            <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center sticky top-0 bg-white rounded-t-2xl z-10">
                <h3 class="text-xl font-bold text-gray-800">Tambah Produk Baru</h3>
                <button type="button" class="closeModal text-gray-400 hover:text-gray-700 transition p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="p-6 overflow-y-auto">
                <p class="text-gray-600 text-sm mb-6">Masukkan detail produk baru</p>

                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf

                    <div class="border border-gray-200 rounded-xl p-6 bg-gray-50/30">
                        <h4 class="font-bold text-gray-800 mb-5 text-lg">Informasi Utama (Katalog)</h4>
                        
                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama produk <span class="text-yellow-500">*</span></label>
                                <input type="text" value="Pempek Campur" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi Singkat <span class="text-yellow-500">*</span></label>
                                <input type="text" value="Isi lengkap: adaan, lenjer, kulit, kriting & telur" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Gambar produk</label>
                                <div class="flex items-center space-x-4">
                                    <div class="w-32 h-24 bg-gray-100 border border-gray-200 rounded-lg overflow-hidden flex items-center justify-center shadow-sm">
                                        <img src="https://via.placeholder.com/300x200/EEEEEE/999999?text=Pempek+Campur" alt="Preview" class="w-full h-full object-cover">
                                    </div>
                                    <div class="text-sm text-gray-500 space-y-1">
                                        <p>Format: JPG, PNG, atau GIF</p>
                                        <p>Ukuran maksimal: 2MB</p>
                                        <input type="file" class="mt-2 text-xs text-gray-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100 transition cursor-pointer w-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-xl p-6 bg-gray-50/30">
                        <h4 class="font-bold text-gray-800 mb-5 text-lg">Informasi Detail (Pop-up)</h4>
                        
                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Harga (Rp) <span class="text-yellow-500">*</span></label>
                                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden focus-within:border-red-500 focus-within:ring-1 focus-within:ring-red-500 shadow-sm bg-white">
                                    <span class="px-4 py-2.5 text-[#B91C1C] font-bold text-lg bg-gray-50 border-r border-gray-300">Rp</span>
                                    <input type="text" value="30.000" class="w-full px-4 py-2.5 focus:outline-none text-gray-700">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi Detail <span class="text-yellow-500">*</span></label>
                                <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white leading-relaxed">Ragu mau pilih yang mana? Paket komplit ini adalah jawabannya! Nikmati semua kelezatan varian Pempek Abdel dalam satu kemasan. Terbuat dari 100% ikan tenggiri segar dengan perpaduan tekstur lembut, renyah, dan kenyal yang memanjakan lidah. Lengkap dengan siraman cuko hitam pekat khas Jambi.</textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Isi Kemasan <span class="text-yellow-500">*</span></label>
                                <input type="text" value="2 Adaan, 2 Lenjer, 2 Kulit, 2 Kriting, 2 Telur (Total 10 Pcs) + 1 Botol Cuko 250ml." class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Berat Bersih <span class="text-yellow-500">*</span></label>
                                <input type="text" value="500 gram." class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status aktif</label>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#B91C1C]"></div>
                        </label>
                    </div>

                </form>
            </div>

            <div class="px-6 py-4 border-t border-gray-100 flex justify-between space-x-4 sticky bottom-0 bg-white rounded-b-2xl z-10">
                <button type="button" class="closeModal w-1/2 py-3 rounded-lg font-bold text-[#B91C1C] border border-[#B91C1C] hover:bg-red-50 transition">
                    Batal
                </button>
                <button type="submit" class="w-1/2 py-3 rounded-lg font-bold text-white bg-[#B91C1C] hover:bg-red-800 shadow-md transition">
                    Simpan
                </button>
            </div>

        </div>
    </div>

    <div id="modalEditProduk" class="fixed inset-0 z-50 hidden bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4 transition-opacity">
        <div class="bg-white rounded-2xl w-full max-w-2xl max-h-[90vh] flex flex-col shadow-2xl relative animate-fade-in-up">
            
            <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center sticky top-0 bg-white rounded-t-2xl z-10">
                <h3 class="text-xl font-bold text-gray-800">Edit Produk</h3>
                <button type="button" class="closeModal text-gray-400 hover:text-gray-700 transition p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="p-6 overflow-y-auto">
                <p class="text-gray-600 text-sm mb-6">Edit detail produk</p>

                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    <div class="border border-gray-200 rounded-xl p-6 bg-gray-50/30">
                        <h4 class="font-bold text-gray-800 mb-5 text-lg">Informasi Utama (Katalog)</h4>
                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama produk <span class="text-yellow-500">*</span></label>
                                <input type="text" value="Pempek Campur Frozen" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi Singkat <span class="text-yellow-500">*</span></label>
                                <input type="text" value="Isi lengkap: adaan, lenjer, kulit, kriting & telur" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Gambar produk</label>
                                <div class="flex items-center space-x-4">
                                    <div class="w-32 h-24 bg-gray-100 border border-gray-200 rounded-lg overflow-hidden flex items-center justify-center shadow-sm">
                                        <img src="https://via.placeholder.com/300x200/EEEEEE/999999?text=Pempek+Campur" class="w-full h-full object-cover">
                                    </div>
                                    <div class="text-sm text-gray-500 space-y-1">
                                        <p>Format: JPG, PNG, atau GIF</p>
                                        <p>Ukuran maksimal: 2MB</p>
                                        <input type="file" class="mt-2 text-xs text-gray-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100 cursor-pointer w-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-xl p-6 bg-gray-50/30">
                        <h4 class="font-bold text-gray-800 mb-5 text-lg">Informasi Detail (Pop-up)</h4>
                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Harga (Rp) <span class="text-yellow-500">*</span></label>
                                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden focus-within:border-red-500 focus-within:ring-1 focus-within:ring-red-500 shadow-sm bg-white">
                                    <span class="px-4 py-2.5 text-[#B91C1C] font-bold text-lg bg-gray-50 border-r border-gray-300">Rp</span>
                                    <input type="text" value="30.000" class="w-full px-4 py-2.5 focus:outline-none text-gray-700">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi Detail <span class="text-yellow-500">*</span></label>
                                <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white leading-relaxed">Ragu mau pilih yang mana? Paket komplit ini adalah jawabannya! Nikmati semua kelezatan varian Pempek Abdel dalam satu kemasan. Terbuat dari 100% ikan tenggiri segar dengan perpaduan tekstur lembut, renyah, dan kenyal yang memanjakan lidah. Lengkap dengan siraman cuko hitam pekat khas Jambi.</textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Isi Kemasan <span class="text-yellow-500">*</span></label>
                                <input type="text" value="2 Adaan, 2 Lenjer, 2 Kulit, 2 Kriting, 2 Telur (Total 10 Pcs) + 1 Botol Cuko 250ml." class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Berat Bersih <span class="text-yellow-500">*</span></label>
                                <input type="text" value="500 gram." class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition shadow-sm bg-white">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status aktif</label>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#B91C1C]"></div>
                        </label>
                    </div>
                </form>
            </div>

            <div class="px-6 py-4 border-t border-gray-100 flex justify-between space-x-4 sticky bottom-0 bg-white rounded-b-2xl z-10">
                <button type="button" class="closeModal w-1/2 py-3 rounded-lg font-bold text-[#B91C1C] border border-[#B91C1C] hover:bg-red-50 transition">Batal</button>
                <button type="submit" class="w-1/2 py-3 rounded-lg font-bold text-white bg-[#B91C1C] hover:bg-red-800 shadow-md transition">Simpan</button>
            </div>
        </div>
    </div>

    <div id="modalHapusProduk" class="fixed inset-0 z-50 hidden bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4 transition-opacity">
        <div class="bg-white rounded-2xl w-full max-w-xl shadow-2xl relative animate-fade-in-up overflow-hidden">
            
            <div class="px-8 py-6 flex justify-between items-center border-b border-gray-50">
                <h3 class="text-xl font-bold text-gray-900">Konfirmasi Hapus Katalog</h3>
                <button type="button" class="closeModal text-gray-900 hover:text-gray-600 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="px-8 py-10">
                <p class="text-gray-800 text-lg leading-relaxed">
                    Apakah kamu yakin ingin menghapus produk ini dari katalog? Data produk tidak dapat dipulihkan setelah dihapus.
                </p>
            </div>

            <div class="px-8 pb-8 flex space-x-4">
                <button type="button" class="closeModal flex-1 py-3.5 rounded-xl font-bold text-[#B91C1C] border-2 border-[#B91C1C] hover:bg-red-50 transition">
                    Batal
                </button>
                <button type="button" class="flex-1 py-3.5 rounded-xl font-bold text-white bg-[#B91C1C] hover:bg-red-800 shadow-md transition">
                    Konfirmasi
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil semua Modal
            const modalTambah = document.getElementById('modalTambahProduk');
            const modalEdit = document.getElementById('modalEditProduk');
            const modalHapus = document.getElementById('modalHapusProduk');
            
            // Ambil semua Tombol Pemicu
            const btnOpenTambah = document.getElementById('btnTambahProduk');
            const btnsOpenEdit = document.querySelectorAll('.btnEditProduk');
            const btnsOpenHapus = document.querySelectorAll('.btnHapusProduk');
            const btnsClose = document.querySelectorAll('.closeModal');

            // Fungsi Buka Modal Tambah
            if(btnOpenTambah) {
                btnOpenTambah.addEventListener('click', () => modalTambah.classList.remove('hidden'));
            }

            // Fungsi Buka Modal Edit
            btnsOpenEdit.forEach(btn => {
                btn.addEventListener('click', () => modalEdit.classList.remove('hidden'));
            });

            // Fungsi Buka Modal Hapus
            btnsOpenHapus.forEach(btn => {
                btn.addEventListener('click', () => modalHapus.classList.remove('hidden'));
            });

            // Fungsi Tutup Semua Modal (Tombol Batal / X)
            btnsClose.forEach(btn => {
                btn.addEventListener('click', () => {
                    modalTambah.classList.add('hidden');
                    modalEdit.classList.add('hidden');
                    modalHapus.classList.add('hidden');
                });
            });

            // Tutup jika klik area hitam di luar box modal
            window.addEventListener('click', (e) => {
                if (e.target === modalTambah) modalTambah.classList.add('hidden');
                if (e.target === modalEdit) modalEdit.classList.add('hidden');
                if (e.target === modalHapus) modalHapus.classList.add('hidden');
            });
        });
    </script>

</body>
</html>