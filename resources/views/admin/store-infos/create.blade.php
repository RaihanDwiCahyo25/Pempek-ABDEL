@extends('layouts.admin')

@section('title', 'Create Store Info')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Tambah Item Store Info</h1>
        <p class="text-sm text-gray-500">Tambahkan informasi toko yang akan ditampilkan di homepage.</p>
    </div>

    <div class="rounded-3xl bg-white p-8 shadow-sm border border-gray-200">
        <form action="{{ route('admin.store-infos.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input id="title" name="title" type="text" value="{{ old('title') }}" class="mt-2 block w-full rounded-2xl border border-gray-300 bg-gray-50 px-4 py-3 text-sm text-gray-900 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-100" required>
                @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="subtitle" class="block text-sm font-medium text-gray-700">Subtitle</label>
                <input id="subtitle" name="subtitle" type="text" value="{{ old('subtitle') }}" class="mt-2 block w-full rounded-2xl border border-gray-300 bg-gray-50 px-4 py-3 text-sm text-gray-900 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-100">
                @error('subtitle') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="label" class="block text-sm font-medium text-gray-700">Label</label>
                <input id="label" name="label" type="text" value="{{ old('label') }}" class="mt-2 block w-full rounded-2xl border border-gray-300 bg-gray-50 px-4 py-3 text-sm text-gray-900 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-100" required>
                @error('label') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="icon" class="block text-sm font-medium text-gray-700">Icon</label>
                <select id="icon" name="icon" class="mt-2 block w-full rounded-2xl border border-gray-300 bg-gray-50 px-4 py-3 text-sm text-gray-900 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-100" required>
                    <option value="clock" {{ old('icon') == 'clock' ? 'selected' : '' }}>Clock</option>
                    <option value="location" {{ old('icon') == 'location' ? 'selected' : '' }}>Location</option>
                    <option value="phone" {{ old('icon') == 'phone' ? 'selected' : '' }}>Phone</option>
                </select>
                @error('icon') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="sort_order" class="block text-sm font-medium text-gray-700">Sort Order</label>
                <input id="sort_order" name="sort_order" type="number" min="1" value="{{ old('sort_order', 1) }}" class="mt-2 block w-full rounded-2xl border border-gray-300 bg-gray-50 px-4 py-3 text-sm text-gray-900 focus:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-100" required>
                @error('sort_order') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="flex flex-wrap gap-3 justify-end">
                <a href="{{ route('admin.store-infos.index') }}" class="inline-flex items-center rounded-full border border-gray-300 bg-white px-5 py-3 text-sm font-semibold text-gray-700 hover:bg-gray-50">Cancel</a>
                <button type="submit" class="inline-flex items-center rounded-full bg-[#cc0000] px-5 py-3 text-sm font-semibold text-white shadow hover:bg-red-700">Save Item</button>
            </div>
        </form>
    </div>
</div>
@endsection