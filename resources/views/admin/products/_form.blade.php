<div class="grid gap-6 lg:grid-cols-[1.4fr_0.9fr]">
    <div class="space-y-6">
        <div>
            <label for="nama_produk" class="block text-sm font-semibold text-gray-800">Nama Produk</label>
            <input id="nama_produk" name="nama_produk" type="text" value="{{ old('nama_produk', $product->nama_produk ?? '') }}" class="mt-3 w-full rounded-3xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-600 focus:outline-none focus:ring-1 focus:ring-red-600" placeholder="Contoh: Pempek Campur Frozen" />
            @error('nama_produk')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="deskripsi_singkat" class="block text-sm font-semibold text-gray-800">Deskripsi Singkat</label>
            <input id="deskripsi_singkat" name="deskripsi_singkat" type="text" value="{{ old('deskripsi_singkat', $product->deskripsi_singkat ?? '') }}" class="mt-3 w-full rounded-3xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-600 focus:outline-none focus:ring-1 focus:ring-red-600" placeholder="Ringkas dan jelas untuk tampilan kartu produk" />
            @error('deskripsi_singkat')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="deskripsi_lengkap" class="block text-sm font-semibold text-gray-800">Deskripsi Lengkap</label>
            <textarea id="deskripsi_lengkap" name="deskripsi_lengkap" rows="6" class="mt-3 w-full rounded-3xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-600 focus:outline-none focus:ring-1 focus:ring-red-600" placeholder="Detail produk yang akan tampil di modal">{{ old('deskripsi_lengkap', $product->deskripsi_lengkap ?? '') }}</textarea>
            @error('deskripsi_lengkap')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            <div>
                <label for="harga" class="block text-sm font-semibold text-gray-800">Harga</label>
                <input id="harga" name="harga" type="number" step="0.01" value="{{ old('harga', $product->harga ?? '') }}" class="mt-3 w-full rounded-3xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-600 focus:outline-none focus:ring-1 focus:ring-red-600" placeholder="Contoh: 35000" />
                @error('harga')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="urutan_produk" class="block text-sm font-semibold text-gray-800">Urutan Produk</label>
                <input id="urutan_produk" name="urutan_produk" type="number" value="{{ old('urutan_produk', $product->urutan_produk ?? 0) }}" class="mt-3 w-full rounded-3xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-600 focus:outline-none focus:ring-1 focus:ring-red-600" />
                @error('urutan_produk')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>
        </div>

        <div>
            <label for="link_whatsapp" class="block text-sm font-semibold text-gray-800">Link WhatsApp</label>
            <input id="link_whatsapp" name="link_whatsapp" type="url" value="{{ old('link_whatsapp', $product->link_whatsapp ?? '') }}" class="mt-3 w-full rounded-3xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-600 focus:outline-none focus:ring-1 focus:ring-red-600" placeholder="https://wa.me/6281234567890?text=Halo" />
            @error('link_whatsapp')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>

        <div class="flex flex-wrap gap-4 items-center">
            <label class="inline-flex items-center gap-3 text-sm font-semibold text-gray-800">
                <input type="checkbox" name="status_active" class="h-5 w-5 rounded border-gray-300 text-red-700 focus:ring-red-600" {{ old('status_active', isset($product) ? $product->status_active : true) ? 'checked' : '' }}>
                <span>Aktifkan produk</span>
            </label>

            <span class="text-sm text-gray-500">Nonaktifkan jika tidak ingin tampil di katalog.</span>
        </div>
    </div>

    <div class="space-y-6">
        <div class="rounded-3xl border border-gray-200 bg-slate-50 p-5">
            <p class="text-sm font-semibold text-gray-800 mb-4">Gambar Produk</p>
            <div class="aspect-[4/3] overflow-hidden rounded-3xl bg-white border border-dashed border-gray-200">
                <img id="preview-image" src="{{ old('gambar') ? asset('images/pempek-logo.png') : (isset($product) ? $product->image_url : asset('images/pempek-logo.png')) }}" alt="Preview Gambar Produk" class="w-full h-full object-cover">
            </div>

            <label class="mt-5 flex cursor-pointer items-center justify-center rounded-3xl border border-red-600 bg-red-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-red-700">
                <span>Pilih Gambar</span>
                <input id="gambar" name="gambar" type="file" accept="image/*" class="sr-only" />
            </label>
            @error('gambar')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
            <p class="mt-3 text-sm text-gray-500">Format JPEG, PNG, JPG, WEBP. Maksimum 4MB.</p>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('gambar');
        const preview = document.getElementById('preview-image');

        if (!input || !preview) {
            return;
        }

        input.addEventListener('change', function () {
            const file = this.files[0];
            if (!file) {
                return;
            }

            const reader = new FileReader();
            reader.onload = function (event) {
                preview.src = event.target.result;
            };
            reader.readAsDataURL(file);
        });
    });
</script>
@endpush
