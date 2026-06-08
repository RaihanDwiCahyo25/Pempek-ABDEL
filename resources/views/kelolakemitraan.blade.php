@extends('layouts.admin')

@section('title', 'Kelola Kemitraan & Info')
@section('page_title', 'Kelola Kemitraan & Info')
@section('page_description', 'Kelola konten di Kemitraan & Info')

@section('content')
    <div class="p-8">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.02)] p-8">
            <div class="grid gap-8 lg:grid-cols-[360px_minmax(0,_1fr)]">
                <div class="rounded-3xl border border-gray-200 bg-slate-50 p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Info Kemitraan</h3>
                    <p class="text-sm text-gray-500">Atur konten promosi kemitraan, benefit, dan detail reseller yang tampil di halaman kemitraan.</p>
                </div>
                <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
                    <form action="{{ route('admin.kemitraan.save') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf

                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Pesan Online</label>
                                <input type="file" name="kemitraan_online_image" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                                @if($setting?->kemitraan_online_image_url)
                                    <img src="{{ $setting->kemitraan_online_image_url }}" alt="Preview Pesan Online" class="mt-3 h-28 w-full rounded-2xl object-cover border border-gray-200" />
                                @endif
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Kunjungi Warung</label>
                                <input type="file" name="kemitraan_offline_image" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                                @if($setting?->kemitraan_offline_image_url)
                                    <img src="{{ $setting->kemitraan_offline_image_url }}" alt="Preview Kunjungi Warung" class="mt-3 h-28 w-full rounded-2xl object-cover border border-gray-200" />
                                @endif
                            </div>
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Peta Reseller</label>
                                <input type="file" name="kemitraan_reseller_map_image" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                                @if($setting?->kemitraan_reseller_map_image_url)
                                    <img src="{{ $setting->kemitraan_reseller_map_image_url }}" alt="Preview Peta Reseller" class="mt-3 h-28 w-full rounded-2xl object-contain border border-gray-200" />
                                @endif
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Banner Kemitraan</label>
                                <input type="file" name="kemitraan_banner_image" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                                @if($setting?->kemitraan_banner_image_url)
                                    <img src="{{ $setting->kemitraan_banner_image_url }}" alt="Preview Banner Kemitraan" class="mt-3 h-28 w-full rounded-2xl object-cover border border-gray-200" />
                                @endif
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Pesan Online</label>
                            <textarea name="kemitraan_online_description" rows="4" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500">{{ old('kemitraan_online_description', $setting?->kemitraan_online_description) }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Kunjungi Warung</label>
                            <textarea name="kemitraan_offline_description" rows="4" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500">{{ old('kemitraan_offline_description', $setting?->kemitraan_offline_description) }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Jaringan Reseller</label>
                            <textarea name="kemitraan_reseller_description" rows="4" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500">{{ old('kemitraan_reseller_description', $setting?->kemitraan_reseller_description) }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Judul Banner Kemitraan</label>
                            <input type="text" name="kemitraan_banner_title" value="{{ old('kemitraan_banner_title', $setting?->kemitraan_banner_title) }}" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Banner Kemitraan</label>
                            <textarea name="kemitraan_banner_description" rows="4" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500">{{ old('kemitraan_banner_description', $setting?->kemitraan_banner_description) }}</textarea>
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
