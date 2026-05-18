@extends('layouts.admin')

@section('title', 'Tambah Keunggulan')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Tambah Keunggulan</h1>
        <p class="text-sm text-gray-500">Tambahkan card keunggulan baru agar tampil di homepage.</p>
    </div>

    <div class="rounded-3xl bg-white p-8 shadow-sm border border-gray-200">
        <form action="{{ route('admin.advantages.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input id="title" name="title" type="text" value="{{ old('title') }}" class="mt-2 block w-full rounded-2xl border border-gray-300 bg-gray-50 px-4 py-3 text-sm text-gray-900 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-100" required>
                @error('title')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" class="mt-2 block w-full rounded-2xl border border-gray-300 bg-gray-50 px-4 py-3 text-sm text-gray-900 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-100" required>{{ old('description') }}</textarea>
                @error('description')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="icon" class="block text-sm font-medium text-gray-700">Icon Image</label>
                <input id="icon" name="icon" type="file" accept="image/png,image/jpeg,image/jpg" class="mt-2 block w-full text-sm text-gray-900 file:mr-4 file:rounded-full file:border-0 file:bg-[#cc0000] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white" required>
                @error('icon')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="sort_order" class="block text-sm font-medium text-gray-700">Sort Order</label>
                <input id="sort_order" name="sort_order" type="number" min="1" value="{{ old('sort_order', 1) }}" class="mt-2 block w-full rounded-2xl border border-gray-300 bg-gray-50 px-4 py-3 text-sm text-gray-900 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-100" required>
                @error('sort_order')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="flex items-center gap-3">
                <label class="inline-flex items-center gap-2 text-sm text-gray-700">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-[#cc0000] focus:ring-[#cc0000]">
                    Tampilkan di homepage
                </label>
            </div>

            <div class="flex flex-wrap gap-3 justify-end">
                <a href="{{ route('admin.advantages.index') }}" class="inline-flex items-center rounded-full border border-gray-300 bg-white px-5 py-3 text-sm font-semibold text-gray-700 hover:bg-gray-50">Cancel</a>
                <button type="submit" class="inline-flex items-center rounded-full bg-[#cc0000] px-5 py-3 text-sm font-semibold text-white shadow hover:bg-red-700">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection