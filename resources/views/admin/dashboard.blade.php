<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Warung Abdel</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 min-h-screen">
    <div class="max-w-5xl mx-auto p-8">
        <header class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-red-600">Dashboard Admin</h1>
                <p class="text-gray-500 mt-2">Selamat datang di panel admin Warung Abdel.</p>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="inline-flex items-center px-5 py-3 bg-red-700 text-white rounded-lg shadow-sm hover:bg-red-800 transition">
                    Keluar
                </button>
            </form>
        </header>

        <div class="grid gap-6 sm:grid-cols-2">
            <div class="rounded-3xl bg-white border border-gray-200 p-6 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 mb-3">Kontrol Admin</h2>
                <p class="text-sm text-gray-600">Gunakan menu di sidebar untuk mengelola hero section, produk, informasi toko, dan konten kemitraan.</p>
            </div>
            <div class="rounded-3xl bg-white border border-gray-200 p-6 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 mb-3">Status Login</h2>
                <p class="text-sm text-gray-600">Anda masuk sebagai <strong>admin</strong>. Akses hanya untuk administrator.</p>
            </div>
        </div>
    </div>
</body>
</html>
