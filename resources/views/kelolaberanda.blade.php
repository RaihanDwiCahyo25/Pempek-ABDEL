@extends('layouts.admin')

@section('title', 'Kelola Beranda')
@section('page_title', 'Kelola Beranda')
@section('page_description', 'Perbarui konten beranda, slogan, jam operasional, dan informasi kontak.')

@section('content')
    @if(session('success'))
        <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 p-5 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-5 text-red-700">
            <ul class="list-disc ml-5 space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.beranda.save') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <section class="grid gap-8 lg:grid-cols-[360px_minmax(0,_1fr)]">
            <div class="rounded-3xl border border-gray-200 bg-slate-50 p-6 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Tampilan Beranda</h3>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Preview Logo</label>
                        <div class="rounded-3xl border border-dashed border-gray-300 bg-white p-5">
                            <div class="h-32 w-full overflow-hidden rounded-3xl bg-gray-100 flex items-center justify-center">
                                @if(optional($setting)->logo_path)
                                    <img src="{{ asset('storage/' . $setting->logo_path) }}" alt="Logo" class="h-full object-contain" />
                                @else
                                    <span class="text-sm text-gray-400">Logo belum diunggah</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Preview Banner</label>
                        <div class="rounded-3xl border border-dashed border-gray-300 bg-white p-5">
                            <div class="h-40 w-full overflow-hidden rounded-3xl bg-gray-100 flex items-center justify-center">
                                @if(optional($setting)->banner_path)
                                    <img src="{{ asset('storage/' . $setting->banner_path) }}" alt="Banner" class="h-full w-full object-cover" />
                                @else
                                    <span class="text-sm text-gray-400">Banner belum diunggah</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
                <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Informasi Utama</h3>
                        <p class="text-sm text-gray-500">Simpan semua data yang tampil di beranda.</p>
                    </div>
                    <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-red-700 px-6 py-3 text-white transition hover:bg-red-800 shadow-sm">Simpan Semua</button>
                </div>

                <div class="grid gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Upload Logo Toko</label>
                        <input type="file" name="logo" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Upload Banner Landing Page</label>
                        <input type="file" name="banner" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Slogan Utama</label>
                        <input type="text" name="slogan" value="{{ old('slogan', optional($setting)->slogan) }}" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Slogan</label>
                        <textarea name="description" rows="4" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500">{{ old('description', optional($setting)->description) }}</textarea>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                            <input type="text" name="telepon" value="{{ old('telepon', optional($setting)->telepon) }}" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jam Operasional</label>
                        <input type="text" name="jam_operasional" value="{{ old('jam_operasional', optional($setting)->jam_operasional) }}" placeholder="09:00 - 21:00" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                        <p class="text-gray-500 text-xs mt-2">Gunakan format <strong>09:00 - 21:00</strong>.</p>
                    </div>
                </div>

                <div>
    <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Lengkap</label>

    <textarea
        name="alamat"
        rows="3"
        class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500"
        placeholder="Jl. Pratu Satir, The Hok, Kec. Jambi Sel., Kota Jambi, Jambi 36125"
    >{{ old('alamat', optional($setting)->alamat) }}</textarea>

    <p class="text-gray-500 text-xs mt-2">
        Masukkan alamat lengkap dalam 1-2 baris.
    </p>
</div>

<div class="grid gap-6 sm:grid-cols-2">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Link URL Akun
        </label>

        <input
            type="url"
            name="url_sosmed"
            value="{{ old('url_sosmed', optional($setting)->url_sosmed) }}"
            class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500"
        />
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Username / Nama Akun
        </label>

        <input
            type="text"
            name="username_sosmed"
            value="{{ old('username_sosmed', optional($setting)->username_sosmed) }}"
            class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500"
        />
    </div>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-3">
        Preview Foto Profil Sosial
    </label>

    <div class="grid gap-4 sm:grid-cols-[120px_minmax(0,_1fr)] items-center rounded-3xl border border-gray-200 bg-slate-50 p-5">
        <div class="h-28 w-full overflow-hidden rounded-3xl bg-white shadow-sm flex items-center justify-center">
            @if(optional($setting)->foto_sosmed_path)
                <img
                    src="{{ asset('storage/' . $setting->foto_sosmed_path) }}"
                    alt="Foto Sosial"
                    class="h-full w-full object-cover"
                />
            @else
                <span class="text-sm text-gray-400">Belum ada foto</span>
            @endif
        </div>

        <div>
            <input
                type="file"
                name="foto_sosmed"
                class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500"
            />

            <p class="mt-2 text-sm text-gray-500">
                Unggah foto profil sosial media.
            </p>
        </div>
    </div>
</div>

    </form>
@endsection
