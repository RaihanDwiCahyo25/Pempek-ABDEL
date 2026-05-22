@extends('layouts.admin')

@section('title', 'Tambah Produk Baru')
@section('page_title', 'Tambah Produk Baru')
@section('page_description', 'Tambahkan produk baru ke katalog dan unggah gambar serta detail WhatsApp.')

@section('content')
    <div class="space-y-6">
        <div class="rounded-3xl border border-gray-200 bg-slate-50 p-6">
            <p class="text-sm text-gray-600">Isi form berikut untuk menambahkan produk baru ke katalog.</p>
        </div>

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
            @csrf
            @include('admin.products._form')

            <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <a href="{{ route('admin.products.index') }}" class="inline-flex items-center justify-center rounded-3xl border border-gray-200 px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition">Kembali ke daftar</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-3xl bg-red-700 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-red-800 transition">Simpan Produk</button>
            </div>
        </form>
    </div>
@endsection
