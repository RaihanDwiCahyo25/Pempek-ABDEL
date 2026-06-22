<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Admin Panel Warung Abdel</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 flex h-screen overflow-hidden">

    <aside class="w-72 bg-white border-r border-gray-200 flex flex-col justify-between">
        <div class="p-6 flex items-center justify-between border-b border-gray-100">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <div>
                    <h1 class="text-lg font-bold text-red-600 leading-tight">Admin Panel</h1>
                    <p class="text-xs text-gray-400">Manajemen Pesanan</p>
                </div>
            </div>
        </div>

        <div class="flex-grow"></div>

        <div class="p-6 border-t border-gray-100 flex items-center justify-between">
            <div class="flex items-center space-x-2 text-gray-700 font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                <span>Mode Tampilan</span>
            </div>
            <button class="bg-gray-100 p-2 rounded-lg text-gray-600 hover:bg-gray-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            </button>
        </div>
    </aside>

    <main class="flex-1 flex flex-col relative">
        
        <header class="p-8 flex justify-between items-start">
            <div>
                <h2 class="text-2xl font-bold mb-1">Reset Password</h2>
                <p class="text-gray-500 text-sm">Masukkan password baru Anda.</p>
            </div>
        </header>

        <div class="flex-1 flex justify-center items-center -mt-20">
            <div class="bg-white w-[500px] rounded-xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)] border border-gray-100 overflow-hidden">
                <div class="px-8 py-5 border-b border-gray-100">
                    <h3 class="text-lg font-bold">Buat Password Baru</h3>
                </div>
                
                <div class="p-8">
                    @if ($errors->any())
                        <div class="mb-5 rounded-lg bg-red-50 border border-red-100 p-4 text-sm text-red-700">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('password.reset') }}" method="POST">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-5">
                            <label class="block text-sm text-gray-700 mb-2">Email <span class="text-yellow-400">*</span></label>
                            <input name="email" type="email" value="{{ old('email') ?? $email ?? '' }}" placeholder="Masukkan email Anda" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                        </div>

                        <div class="mb-5">
                            <label class="block text-sm text-gray-700 mb-2">Password Baru <span class="text-yellow-400">*</span></label>
                            <input name="password" type="password" placeholder="Masukkan password baru" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                            <p class="text-xs text-gray-500 mt-2">Minimal 8 karakter</p>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm text-gray-700 mb-2">Konfirmasi Password <span class="text-yellow-400">*</span></label>
                            <input name="password_confirmation" type="password" placeholder="Konfirmasi password baru" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                        </div>

                        <button type="submit" class="w-full sm:w-1/2 bg-red-700 text-white py-2.5 rounded-lg font-bold hover:bg-red-800 transition">
                            Reset Password
                        </button>

                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-red-600 transition">Kembali ke Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

</body>
</html>
