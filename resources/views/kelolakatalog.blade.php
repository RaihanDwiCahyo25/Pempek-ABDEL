@extends('layouts.admin')

@section('title', 'Kelola Katalog Produk')
@section('page_title', 'Kelola Katalog Produk')
@section('page_description', 'Kelola daftar produk dan kelola item katalog yang tampil di web.')

@section('content')
    <div class="space-y-8">
        @if(session('success'))
            <div class="rounded-3xl border border-green-200 bg-green-50 p-5 text-sm text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-3xl border border-gray-100 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.02)] p-8">
            <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-900">Daftar Produk</h3>
                    <p class="text-sm text-gray-500">Kelola produk, gambar, harga, tautan WhatsApp, dan detail modal secara dinamis.</p>
                </div>

                <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-3 gap-3">
                    <a href="{{ route('admin.products.create') }}" class="inline-flex items-center px-5 py-3 bg-red-700 text-white rounded-2xl font-semibold hover:bg-red-800 transition text-sm">Tambah Produk</a>
                    <a href="{{ route('admin.products.index') }}" class="inline-flex items-center px-5 py-3 border border-gray-200 rounded-2xl text-gray-700 hover:bg-gray-50 transition text-sm">Segarkan</a>
                </div>
            </div>

            <div class="mt-8 grid gap-4 lg:grid-cols-[240px_minmax(0,_1fr)]">
                <div class="space-y-4">
                    <div class="rounded-3xl border border-gray-200 bg-slate-50 p-5">
                        <p class="text-sm font-semibold text-gray-800 mb-3">Cari produk</p>
                        <form action="{{ route('admin.products.index') }}" method="GET">
                            <div class="relative">
                                <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </span>
                                <input name="search" type="text" value="{{ $search ?? '' }}" placeholder="Cari nama atau deskripsi..." class="w-full rounded-2xl border border-gray-200 bg-white pl-12 pr-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="mt-6 overflow-x-auto rounded-3xl border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                    <thead class="bg-gray-50 text-gray-700 font-semibold">
                        <tr>
                            <th class="py-4 px-6">Gambar Produk</th>
                            <th class="py-4 px-6">Nama Produk</th>
                            <th class="py-4 px-6">Urutan</th>
                            <th class="py-4 px-6">Status</th>
                            <th class="py-4 px-6 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse($products as $product)
                            <tr class="border-t border-gray-200 hover:bg-gray-50 transition">
                                <td class="py-4 px-6">
                                    <div class="w-20 h-14 rounded-xl overflow-hidden bg-gray-100 flex items-center justify-center">
                                        <img src="{{ $product->image_url }}" alt="{{ $product->nama_produk }}" class="w-full h-full object-cover" />
                                    </div>
                                </td>
                                <td class="py-4 px-6 font-medium">{{ $product->nama_produk }}</td>
                                <td class="py-4 px-6">{{ $product->urutan_produk }}</td>
                                <td class="py-4 px-6">
                                    @if($product->status_active)
                                        <span class="inline-flex items-center rounded-full bg-green-600 px-3 py-1 text-white text-xs font-semibold">Aktif</span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-gray-300 px-3 py-1 text-gray-700 text-xs font-semibold">Nonaktif</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <a href="{{ route('admin.products.edit', $product) }}" class="text-red-600 hover:text-red-800">Edit</a>
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-yellow-500 hover:text-yellow-700">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="border-t border-gray-200">
                                <td colspan="5" class="py-10 px-6 text-center text-gray-500">Belum ada produk. Klik tombol "Tambah Produk" untuk membuat data katalog baru.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <p class="text-sm text-gray-500">Menampilkan {{ $products->firstItem() ?? 0 }} - {{ $products->lastItem() ?? 0 }} dari {{ $products->total() }} produk</p>
                <div class="text-sm text-gray-500">Halaman {{ $products->currentPage() }} dari {{ $products->lastPage() }}</div>
            </div>

            <div class="mt-6">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
