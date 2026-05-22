@extends('layouts.admin')

@section('title', 'Edit Produk')
@section('page_title', 'Edit Produk')
@section('page_description', 'Perbarui detail produk, gambar, harga, dan tautan WhatsApp.')

@section('content')
    <div class="space-y-6">
        <div class="rounded-3xl border border-gray-200 bg-slate-50 p-6">
            <p class="text-sm text-gray-600">Perbarui data produk dan pastikan detail di modal selalu akurat.</p>
        </div>

        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data" class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
            @csrf
            @method('PUT')

            @include('admin.products._form')

            <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <a href="{{ route('admin.products.index') }}" class="inline-flex items-center justify-center rounded-3xl border border-gray-200 px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition">Kembali ke daftar</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-3xl bg-red-700 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-red-800 transition">Perbarui Produk</button>
            </div>
        </form>
    </div>
@endsection
