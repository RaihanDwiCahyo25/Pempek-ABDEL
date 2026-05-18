@extends('layouts.admin')

@section('title', 'Keunggulan')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Keunggulan</h1>
            <p class="text-sm text-gray-500">Kelola card keunggulan yang tampil di homepage.</p>
        </div>
        <a href="{{ route('admin.advantages.create') }}" class="inline-flex items-center rounded-full bg-[#cc0000] px-4 py-2 text-sm font-semibold text-white shadow hover:bg-red-700 transition">Tambah Keunggulan</a>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-3xl bg-green-50 border border-green-200 px-5 py-4 text-sm text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-sm">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Sort</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Title</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Description</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Icon</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Active</th>
                    <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($advantages as $advantage)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $advantage->sort_order }}</td>
                        <td class="px-6 py-4 text-sm font-semibold text-gray-900">{{ $advantage->title }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ Str::limit($advantage->description, 80) }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            @if($advantage->icon)
                                <img src="{{ asset('storage/' . $advantage->icon) }}" alt="Icon {{ $advantage->title }}" class="h-10 w-10 rounded-full object-cover">
                            @else
                                <span class="text-gray-400">No icon</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm font-semibold {{ $advantage->is_active ? 'text-green-600' : 'text-gray-500' }}">{{ $advantage->is_active ? 'Yes' : 'No' }}</td>
                        <td class="px-6 py-4 text-right text-sm font-medium space-x-3">
                            <a href="{{ route('admin.advantages.edit', $advantage) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('admin.advantages.destroy', $advantage) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Hapus item keunggulan ini?')" class="text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-sm text-gray-500">Belum ada keunggulan. Tambahkan item baru untuk ditampilkan di homepage.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $advantages->links() }}
    </div>
</div>
@endsection