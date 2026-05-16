<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Beranda - Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 flex h-screen overflow-hidden">

    @if(session('success'))
    <div class="absolute top-24 right-8 z-50 flex items-center bg-green-50 border border-green-200 shadow-sm rounded-lg px-4 py-3">
        <div class="w-5 h-5 bg-green-600 rounded-full flex items-center justify-center mr-3 shrink-0">
            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <span class="text-green-700 font-bold text-sm">{{ session('success') }}</span>
    </div>
    @endif

    <aside class="w-72 bg-white border-r border-gray-200 flex flex-col justify-between">
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
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
                    </svg>
                </button>
            </div>

            <nav class="p-4 space-y-2">
                <a href="#" class="flex items-center space-x-4 px-4 py-3 bg-slate-50 text-red-600 rounded-xl font-bold transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span>Kelola Beranda</span>
                </a>
                
                <a href="#" class="flex items-center space-x-4 px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-gray-900 rounded-xl font-medium transition">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
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
                    <img src="{{ asset('images/lamp-pendant.png') }}" alt="Ikon Lampu" class="w-6 h-6 object-contain opacity-70">            
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
                <p class="text-gray-500 text-sm">Kelola konten di beranda</p>
            </div>

            <div class="flex items-center space-x-3">
                
                <button class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center text-red-600 hover:bg-gray-200 transition relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                </button>
                
                <div class="bg-gray-100 h-12 px-5 flex flex-col justify-center rounded-2xl text-left">
                    <p class="text-sm font-bold text-gray-800 leading-tight">Waktu</p>
                    <p class="text-xs text-gray-500 leading-tight mt-0.5">15:07:14 WIB</p>
                </div>

                <div class="bg-gray-100 h-12 pl-2 pr-5 flex items-center space-x-3 rounded-2xl">
                    <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center overflow-hidden shadow-sm border border-gray-100">
                        
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
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

<form action="#" method="POST" enctype="multipart/form-data">
    @csrf

    <h4 class="text-lg font-bold text-gray-800 mb-6">Identitas & Tampilan Utama</h4>

    <div class="mb-8">
        <label class="block text-sm text-gray-700 mb-3">Upload Logo Toko</label>
        <div class="flex items-center space-x-5">
            <div class="w-16 h-16 rounded-full border border-gray-200 overflow-hidden flex items-center justify-center bg-gray-50 shrink-0 shadow-sm">
                <img src="https://via.placeholder.com/150/FFFFFF/FF0000?text=Logo" alt="Logo preview" class="w-full h-full object-cover">
            </div>
            <div>
                <p class="text-sm text-gray-600">Format: JPG, PNG, atau SVG</p>
                <p class="text-sm text-gray-600">Ukuran maksimal: 2MB</p>
                <input type="file" name="logo" class="mt-2 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100 transition cursor-pointer">
            </div>
        </div>
    </div>

    <div class="mb-8">
        <label class="block text-sm text-gray-700 mb-3">Upload Banner Landing Page</label>
        <div class="flex items-center space-x-5">
            <div class="w-48 h-32 rounded-full border border-gray-200 overflow-hidden flex items-center justify-center bg-gray-50 shrink-0 shadow-sm">
                <img src="https://via.placeholder.com/300x200/EEEEEE/999999?text=Banner+Pempek" alt="Banner preview" class="w-full h-full object-cover">
            </div>
            <div>
                <p class="text-sm text-gray-600">Format: JPG, PNG, atau SVG</p>
                <p class="text-sm text-gray-600">Ukuran maksimal: 2MB</p>
                <input type="file" name="banner" class="mt-2 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100 transition cursor-pointer">
            </div>
        </div>
    </div>

    <div class="mb-5">
        <label class="block text-sm text-gray-700 mb-2">Slogan Utama <span class="text-yellow-400">*</span></label>
        <input type="text" name="slogan" value="Asli Jambi, Sertifikasi BPOM, Halal" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
    </div>

    <div class="mb-5">
        <label class="block text-sm text-gray-700 mb-2">Deskripsi Slogan <span class="text-yellow-400">*</span></label>
        <textarea name="deskripsi" rows="3" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition leading-relaxed">Nikmati kelezatan Pempek Abdel dengan cuko kental khasnya. Dikemas vakum, tahan lama, dan siap kirim aman ke seluruh kota di Indonesia.</textarea>
    </div>

    <div class="mb-5">
        <label class="block text-sm text-gray-700 mb-2">Nomor Telephone <span class="text-yellow-400">*</span></label>
        <input type="text" name="telepon" value="08117408504" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
    </div>

    <div class="mb-5">
        <label class="block text-sm text-gray-700 mb-2">Jam Operasional <span class="text-yellow-400">*</span></label>
        <input type="text" name="jam_operasional" value="Senin - Sabtu, Jam 09:00 - 19.00" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
    </div>

    <div class="mb-5">
        <label class="block text-sm text-gray-700 mb-2">Alamat lengkap <span class="text-yellow-400">*</span></label>
        <textarea name="alamat" rows="2" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">Jl. Pratu Satir, The Hok, Kec. Jambi Sel., Kota Jambi, Jambi 36125</textarea>
    </div>

    <div class="mb-5">
        <label class="block text-sm text-gray-700 mb-2">Link URL Akun <span class="text-yellow-400">*</span></label>
        <input type="url" name="url_sosmed" value="https://www.instagram.com/inipempekabdel/" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
    </div>

    <div class="mb-8">
        <label class="block text-sm text-gray-700 mb-2">Username / Nama Akun <span class="text-yellow-400">*</span></label>
        <input type="text" name="username_sosmed" value="@inipempekabdel" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
    </div>

    <div class="mb-8 border-t border-gray-100 pt-8">
        <label class="block text-sm text-gray-700 mb-3">Upload foto profil akun sosmed</label>
        <div class="flex items-start space-x-5">
            <div class="w-48 h-auto rounded-lg border border-gray-200 overflow-hidden flex items-center justify-center bg-gray-50 shrink-0 shadow-sm">
                <img src="https://via.placeholder.com/300x400/EEEEEE/999999?text=Screenshot+Instagram" alt="Sosmed preview" class="w-full h-auto object-cover">
            </div>
            <div class="mt-2">
                <p class="text-sm text-gray-600">Format: JPG, PNG, atau SVG</p>
                <p class="text-sm text-gray-600">Ukuran maksimal: 2MB</p>
                <input type="file" name="foto_sosmed" class="mt-2 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100 transition cursor-pointer">
            </div>
        </div>
    </div>

    <div class="mt-10">
        <button type="submit" class="bg-[#B91C1C] text-white px-8 py-3 rounded-lg font-bold hover:bg-red-800 transition shadow-md">
            Simpan Perubahan
        </button>
    </div>
</form>

            </div>
        </div>

    </main>

</body>
</html>