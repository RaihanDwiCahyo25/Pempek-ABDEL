@extends('layouts.admin')

@section('title', 'Kelola Testimoni')
@section('page_title', 'Kelola Testimoni')
@section('page_description', 'Kelola Testimoni di Kemitraan & Info')

@section('content')
    <div class="p-8">
        <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-900">Daftar Testimoni</h3>
                <p class="text-sm text-gray-500">Kelola testimoni pelanggan untuk tampilan website.</p>
            </div>
            <button id="btnTambahTestimoni" class="inline-flex items-center px-5 py-3 bg-red-700 text-white rounded-2xl font-semibold hover:bg-red-800 transition text-sm shadow-md">
                Tambah Testimoni
            </button>
        </div>

        <div class="overflow-x-auto rounded-3xl border border-gray-200 bg-white">
            <table class="w-full text-left border-collapse text-sm">
                <thead class="bg-gray-50 border-b border-gray-200 text-gray-800 font-bold">
                    <tr>
                        <th class="py-4 px-6">Nama Pelanggan</th>
                        <th class="py-4 px-6">Asal</th>
                        <th class="py-4 px-6">Testimoni</th>
                        <th class="py-4 px-6 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-b border-gray-200 hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6 font-medium">Fara Ditta</td>
                        <td class="py-4 px-6">Pembeli</td>
                        <td class="py-4 px-6 leading-relaxed">Enak dan pelayanannya ramah sekali.</td>
                        <td class="py-4 px-6 text-right space-x-2">
                            <button type="button" class="btnEditTestimoni text-red-600 hover:text-red-800">Edit</button>
                            <button type="button" class="btnHapusTestimoni text-yellow-500 hover:text-yellow-700">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50/50 transition">
                        <td class="py-4 px-6 font-medium">Dewi Sartika</td>
                        <td class="py-4 px-6">Pembeli</td>
                        <td class="py-4 px-6 leading-relaxed">Rasanya mantap dan bikin ketagihan.</td>
                        <td class="py-4 px-6 text-right space-x-2">
                            <button type="button" class="btnEditTestimoni text-red-600 hover:text-red-800">Edit</button>
                            <button type="button" class="btnHapusTestimoni text-yellow-500 hover:text-yellow-700">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('modals')
    <div id="modalTambahTestimoni" class="fixed inset-0 z-50 hidden bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl w-full max-w-xl shadow-2xl">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <h3 class="text-xl font-bold text-gray-900">Tambah Testimoni</h3>
                <button type="button" class="closeModal text-gray-400 hover:text-gray-700 p-2">&times;</button>
            </div>
            <div class="p-6">
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Pelanggan</label>
                        <input type="text" class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Asal</label>
                        <input type="text" class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Testimoni</label>
                        <textarea rows="4" class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700"></textarea>
                    </div>
                    <div class="flex justify-end gap-3">
                        <button type="button" class="closeModal rounded-2xl border border-red-600 px-5 py-3 text-red-600 hover:bg-red-50">Batal</button>
                        <button type="submit" class="rounded-2xl bg-red-700 px-5 py-3 text-white hover:bg-red-800">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalEditTestimoni" class="fixed inset-0 z-50 hidden bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl w-full max-w-xl shadow-2xl">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <h3 class="text-xl font-bold text-gray-900">Edit Testimoni</h3>
                <button type="button" class="closeModal text-gray-400 hover:text-gray-700 p-2">&times;</button>
            </div>
            <div class="p-6">
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Pelanggan</label>
                        <input type="text" class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Asal</label>
                        <input type="text" class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Testimoni</label>
                        <textarea rows="4" class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-700"></textarea>
                    </div>
                    <div class="flex justify-end gap-3">
                        <button type="button" class="closeModal rounded-2xl border border-red-600 px-5 py-3 text-red-600 hover:bg-red-50">Batal</button>
                        <button type="submit" class="rounded-2xl bg-red-700 px-5 py-3 text-white hover:bg-red-800">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalHapusTestimoni" class="fixed inset-0 z-50 hidden bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl w-full max-w-md shadow-2xl">
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Hapus Testimoni</h3>
                <p class="text-sm text-gray-600">Apakah Anda yakin ingin menghapus testimoni ini? Tindakan ini tidak dapat dibatalkan.</p>
                <div class="mt-6 flex justify-end gap-3">
                    <button type="button" class="closeModal rounded-2xl border border-red-600 px-5 py-3 text-red-600 hover:bg-red-50">Batal</button>
                    <button type="button" class="rounded-2xl bg-red-700 px-5 py-3 text-white hover:bg-red-800">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modalTambah = document.getElementById('modalTambahTestimoni');
        const modalEdit = document.getElementById('modalEditTestimoni');
        const modalHapus = document.getElementById('modalHapusTestimoni');
        const btnTambah = document.getElementById('btnTambahTestimoni');
        const btnsOpenEdit = document.querySelectorAll('.btnEditTestimoni');
        const btnsHapus = document.querySelectorAll('.btnHapusTestimoni');
        const btnsClose = document.querySelectorAll('.closeModal');

        if (btnTambah) {
            btnTambah.addEventListener('click', () => modalTambah.classList.remove('hidden'));
        }
        btnsOpenEdit.forEach(btn => btn.addEventListener('click', () => modalEdit.classList.remove('hidden')));
        btnsHapus.forEach(btn => btn.addEventListener('click', () => modalHapus.classList.remove('hidden')));

        btnsClose.forEach(btn => btn.addEventListener('click', () => {
            modalTambah.classList.add('hidden');
            modalEdit.classList.add('hidden');
            modalHapus.classList.add('hidden');
        }));

        window.addEventListener('click', (e) => {
            if (e.target === modalTambah) modalTambah.classList.add('hidden');
            if (e.target === modalEdit) modalEdit.classList.add('hidden');
            if (e.target === modalHapus) modalHapus.classList.add('hidden');
        });
    });
</script>
@endpush
