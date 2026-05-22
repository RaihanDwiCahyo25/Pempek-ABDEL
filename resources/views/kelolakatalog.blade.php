@extends('layouts.admin')

@section('title', 'Kelola Katalog Produk')
@section('page_title', 'Kelola Katalog Produk')
@section('page_description', 'Kelola daftar produk dan kelola item katalog yang tampil di web.')

@section('content')
    <div class="p-8">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.02)] p-8 space-y-8">
            <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-900">Daftar Katalog</h3>
                    <p class="text-sm text-gray-500">Kelola data produk, filter kategori, dan tampilan katalog.</p>
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-3 gap-3">
                    <button class="inline-flex items-center px-5 py-3 bg-red-700 text-white rounded-2xl font-semibold hover:bg-red-800 transition text-sm" type="button">Tambah Produk</button>
                    <button class="inline-flex items-center px-5 py-3 border border-gray-200 rounded-2xl text-gray-700 hover:bg-gray-50 transition text-sm" type="button">Ekspor PDF</button>
                </div>
            </div>

            <div class="grid gap-4 lg:grid-cols-[240px_minmax(0,_1fr)]">
                <div class="space-y-4">
                    <div class="rounded-3xl border border-gray-200 bg-slate-50 p-5">
                        <p class="text-sm font-semibold text-gray-800 mb-3">Filter Kategori</p>
                        <select class="w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500">
                            <option>Semua kategori</option>
                            <option>Frozen Food</option>
                            <option>Siap Saji</option>
                        </select>
                    </div>
                    <div class="rounded-3xl border border-gray-200 bg-slate-50 p-5">
                        <p class="text-sm font-semibold text-gray-800 mb-3">Cari produk</p>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </span>
                            <input type="text" placeholder="Cari nama produk..." class="w-full rounded-2xl border border-gray-200 bg-white pl-12 pr-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto rounded-3xl border border-gray-200">
                <table class="w-full text-left border-collapse text-sm">
                    <thead class="bg-gray-50 text-gray-700 font-semibold">
                        <tr>
                            <th class="py-4 px-6">Gambar Produk</th>
                            <th class="py-4 px-6">Nama Produk</th>
                            <th class="py-4 px-6">Status</th>
                            <th class="py-4 px-6 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-t border-gray-200 hover:bg-gray-50 transition">
                            <td class="py-4 px-6">
                                <div class="w-20 h-14 rounded-xl overflow-hidden bg-gray-100 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/150/EEEEEE/999999?text=Pempek" alt="Produk" class="w-full h-full object-cover" />
                                </div>
                            </td>
                            <td class="py-4 px-6 font-medium">Pempek Tekwan Frozen</td>
                            <td class="py-4 px-6"><span class="inline-flex items-center rounded-full bg-red-600 px-3 py-1 text-white text-xs font-semibold">Aktif</span></td>
                            <td class="py-4 px-6 text-right space-x-2">
                                <button class="text-red-600 hover:text-red-800" type="button">Edit</button>
                                <button class="text-yellow-500 hover:text-yellow-700" type="button">Hapus</button>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-200 hover:bg-gray-50 transition">
                            <td class="py-4 px-6">
                                <div class="w-20 h-14 rounded-xl overflow-hidden bg-gray-100 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/150/EEEEEE/999999?text=Pempek" alt="Produk" class="w-full h-full object-cover" />
                                </div>
                            </td>
                            <td class="py-4 px-6 font-medium">Pempek Telur Frozen</td>
                            <td class="py-4 px-6"><span class="inline-flex items-center rounded-full bg-red-600 px-3 py-1 text-white text-xs font-semibold">Aktif</span></td>
                            <td class="py-4 px-6 text-right space-x-2">
                                <button class="text-red-600 hover:text-red-800" type="button">Edit</button>
                                <button class="text-yellow-500 hover:text-yellow-700" type="button">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-sm text-gray-500">Menampilkan 1 - 2 dari 10 data</div>
        </div>
    </div>
@endsection
