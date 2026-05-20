@extends('layouts.admin')

@section('title', 'Kelola Kemitraan & Info')
@section('page_title', 'Kelola Kemitraan & Info')
@section('page_description', 'Kelola konten di Kemitraan & Info')

@section('content')
    <div class="p-8">
        <div class="bg-white rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.02)] border border-gray-100 p-8">
            <div class="grid gap-8 lg:grid-cols-[360px_minmax(0,_1fr)]">
                <div class="rounded-3xl border border-gray-200 bg-slate-50 p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Info Kemitraan</h3>
                    <p class="text-sm text-gray-500">Atur konten promosi kemitraan, benefit, dan detail reseller yang tampil di halaman kemitraan.</p>
                </div>
                <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
                    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Judul Seksi</label>
                            <input type="text" value="Menjadi Mitra Pempek Abdel" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                            <textarea rows="5" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500">Dukung usaha lokal dan raih kesempatan pemasaran baru dengan bergabung sebagai mitra atau reseller Pempek Abdel.</textarea>
                        </div>
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Banner</label>
                                <input type="file" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Logo Reseller</label>
                                <input type="file" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-red-700 px-6 py-3 text-white transition hover:bg-red-800 shadow-sm">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
