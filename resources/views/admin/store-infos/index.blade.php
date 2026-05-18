@extends('layouts.admin')

@section('title', 'Store Info')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Store Info</h1>
            <p class="text-sm text-gray-500">Kelola item informasi toko yang tampil di homepage.</p>
        </div>
        <a href="{{ route('admin.store-infos.create') }}" class="inline-flex items-center bg-[#cc0000] text-white px-4 py-2 rounded-lg shadow hover:bg-red-700 transition">
            Tambah Item
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-xl bg-green-50 border border-green-200 p-4 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto rounded-3xl bg-white shadow-sm border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Sort</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Title</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Subtitle</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Label</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Icon</th>
                    <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($storeInfos as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $item->sort_order }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">{{ $item->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $item->subtitle }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $item->label }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ ucfirst($item->icon) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-3">
                            <a href="{{ route('admin.store-infos.edit', $item) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('admin.store-infos.destroy', $item) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Hapus item ini?')" class="text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-8 text-center text-sm text-gray-500">Belum ada item informasi toko. Tambahkan item baru.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection