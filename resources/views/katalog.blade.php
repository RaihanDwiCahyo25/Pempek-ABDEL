@extends('layouts.app')

@section('title', 'Katalog Produk - Warung Abdel')

@section('content')
    <section class="py-16">
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
@endsection