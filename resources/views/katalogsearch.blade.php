<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - Warung Abdel</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased text-gray-800">

<nav class="container mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
    <div class="flex items-center gap-3">
        <img src="{{ optional($homepageSetting)->logo_url ?? asset('images/logo-abdel.png') }}" alt="Logo Warung Abdel" class="h-10 object-contain">
        <div>
            <p class="text-sm font-bold">Warung Abdel</p>
            <p class="text-xs text-gray-500">Katalog Produk Otentik Jambi</p>
        </div>
    </div>

    <div class="flex flex-wrap items-center gap-6 text-sm font-medium text-gray-700">
        <a href="{{ route('katalog') }}" class="text-[#cc0000] hover:text-red-600">Katalog</a>
        <a href="{{ url('/') }}" class="hover:text-red-600">Beranda</a>
    </div>

    <div>
        <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20pesan%20Pempek%20Abdel" target="_blank" class="bg-[#cc0000] text-white px-6 py-2.5 rounded-full font-bold hover:bg-red-800 transition shadow-md">Pesan WA</a>
    </div>
</nav>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 max-w-6xl">
        <div class="text-center mb-10">
            <p class="text-[#cc0000] font-bold text-sm tracking-widest uppercase mb-2">Katalog</p>
            <h1 class="text-4xl md:text-5xl font-black text-black">Temukan Produk Pempek Abdel</h1>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Cari produk, lihat harga, dan pesan langsung via WhatsApp. Katalog kami selalu diperbarui dengan menu pempek terbaru.</p>
        </div>

        <form method="GET" action="{{ route('katalog') }}" class="max-w-3xl mx-auto mb-12">
            <div class="relative rounded-full border border-gray-200 bg-white shadow-sm overflow-hidden flex items-center">
                <input type="search" name="search" value="{{ $search ?? '' }}" placeholder="Cari produk, misalnya Pempek Campur" class="w-full px-6 py-4 text-sm text-gray-800 placeholder-gray-400 focus:outline-none" />
                <button type="submit" class="bg-[#cc0000] text-white px-6 py-4 text-sm font-bold hover:bg-red-800 transition">Cari</button>
            </div>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($products as $product)
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden flex flex-col">
                    <div class="h-64 overflow-hidden bg-gray-100">
                        <img src="{{ $product->image_url }}" alt="{{ $product->nama_produk }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div>
                            <h2 class="text-xl font-bold text-black">{{ $product->nama_produk }}</h2>
                            <p class="text-gray-500 text-sm mt-2">{{ \Illuminate\Support\Str::limit($product->deskripsi_singkat, 100) }}</p>
                        </div>
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <div>
                                <p class="text-lg font-bold text-gray-900">Rp{{ number_format($product->harga, 0, ',', '.') }}</p>
                                <p class="text-xs text-gray-500">Ready Stock / Kirim Cepat</p>
                            </div>
                            <a href="https://wa.me/6289527235298?text={{ urlencode('Halo, saya mau pesan ' . $product->nama_produk) }}" target="_blank" class="inline-flex items-center justify-center rounded-full bg-[#cc0000] px-4 py-2 text-sm font-bold text-white hover:bg-red-800 transition">Pesan</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-3 bg-white rounded-3xl p-10 text-center border border-gray-100">
                    <p class="text-gray-600">Tidak ada produk yang sesuai. Coba kata kunci lain atau kunjungi halaman admin untuk menambah produk.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-12 flex justify-center">
            {{ $products->links() }}
        </div>
    </div>
</section>

    <footer class="bg-white border-t border-gray-200 mt-16 pt-16 pb-8">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
        <div class="col-span-1 md:col-span-1">
            <div class="flex items-center space-x-2 mb-4">
                <img src="{{ asset('images/logo-abdel.png') }}" alt="Logo" class="h-8 object-contain">
                <img src="{{ asset('images/nama-warung.png') }}" alt="Warung Abdel" class="h-5 object-contain">
            </div>
            <p class="text-gray-500 text-sm">Menyajikan pempek otentik asli Jambi dengan cuka kental khas. Berkomitmen memberikan kualitas terbaik dan membawa peluang kemitraan reseller.</p>
        </div>
            <div>
                <h4 class="font-bold mb-4">Jam Operasional</h4>
                <p class="text-gray-500 text-sm">Senin - Sabtu<br>09:00 - 17:00</p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Akses Cepat</h4>
                <ul class="text-gray-500 text-sm space-y-2">
                    <li><a href="#" class="hover:text-red-600">Beranda</a></li>
                    <li><a href="#keunggulan" class="hover:text-red-600">Keunggulan</a></li>
                    <li><a href="#menu" class="hover:text-red-600">Katalog Produk</a></li>
                    <li><a href="#testimoni" class="hover:text-red-600">Testimoni</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Hubungi Kami</h4>
                <p class="text-gray-500 text-sm mb-2">Jl. Pintu Sela, The Hok, Kec. Jambi Sel., Kota Jambi 36125</p>
                <p class="text-gray-500 text-sm font-bold">0812-xxxx-xxxx</p>
            </div>
        </div>
        <div class="container mx-auto px-6 border-t border-gray-100 pt-8 text-center text-gray-400 text-sm">
            &copy; 2026 Warung Abdel. All rights reserved.
        </div>
    </footer>

</body>
</html>
