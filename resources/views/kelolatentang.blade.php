@extends('layouts.admin')

@section('title', 'Kelola Tentang Kami')
@section('page_title', 'Kelola Tentang Kami')
@section('page_description', 'Kelola konten di halaman Tentang Kami - Teks, Gambar, dan Meta SEO')

@section('content')
    <div class="p-8">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.02)] p-8 space-y-8">
            {{-- Success Message --}}
            @if(session('success'))
                <div class="rounded-2xl border border-green-200 bg-green-50 p-5 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Error Messages --}}
            @if($errors->any())
                <div class="rounded-2xl border border-red-200 bg-red-50 p-5 text-red-700">
                    <ul class="list-disc ml-5 space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.tentang.save') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- Hidden inputs untuk delete fields -->
                <input type="hidden" id="delete_section1_image" name="delete_section1_image" value="0">
                <input type="hidden" id="delete_section2_image" name="delete_section2_image" value="0">
                <input type="hidden" id="delete_section3_image" name="delete_section3_image" value="0">

                <!-- CARD: Header Section -->
                <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
                    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Pengaturan Judul Halaman</h3>
                            <p class="text-sm text-gray-500">Sesuaikan judul dan subjudul halaman Tentang Kami.</p>
                        </div>
                    </div>

                    <div class="grid gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subjudul Kecil</label>
                            <input type="text" name="section_subtitle" value="{{ old('section_subtitle', $tentangKami->section_subtitle ?? 'Tentang Kami') }}" placeholder="Tentang Kami" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Judul Utama</label>
                            <input type="text" name="section_title" value="{{ old('section_title', $tentangKami->section_title ?? 'Cerita Rasa Pempek Abdel') }}" placeholder="Cerita Rasa Pempek Abdel" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                        </div>
                    </div>
                </div>

                <!-- CARD: Section 1 -->
                <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
                    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Section 1</h3>
                            <p class="text-sm text-gray-500">Teks bagian pertama (Teks Kiri, Gambar Kanan)</p>
                        </div>
                    </div>

                    <div class="grid gap-6 lg:grid-cols-2">
                        <!-- Textarea -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Konten Section 1</label>
                            <textarea name="section1_content" rows="6" maxlength="750" data-char-counter="section1_counter" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500 char-counter" placeholder="Masukkan konten untuk section 1...">{{ old('section1_content', $tentangKami->section1_content ?? '') }}</textarea>
                            <div class="mt-2 text-right text-xs text-gray-500">
                                <span id="section1_counter">{{ strlen($tentangKami->section1_content ?? '') }}</span> / 750 karakter
                            </div>
                        </div>

                        <!-- Image Preview & Upload -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Gambar Section 1</label>
                            <div class="rounded-3xl border border-dashed border-gray-300 bg-gray-50 p-5">
                                <!-- Preview -->
                                <div id="section1_preview" class="mb-4 h-56 w-full overflow-hidden rounded-2xl bg-gray-200 flex items-center justify-center">
                                    @if($tentangKami->section1_image)
                                        <img src="{{ asset('storage/' . $tentangKami->section1_image) }}" alt="Section 1" class="w-full h-full object-cover">
                                    @else
                                        <span class="text-sm text-gray-400">Belum ada gambar</span>
                                    @endif
                                </div>

                                <!-- Upload Input -->
                                <input type="file" name="section1_image" accept="image/jpg,image/jpeg,image/png,image/webp" class="w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" data-preview="section1_preview">

                                <!-- Delete Button (jika ada gambar) -->
                                @if($tentangKami->section1_image)
                                    <button type="button" onclick="deleteImage('section1_image')" class="mt-3 w-full rounded-lg bg-red-100 px-3 py-2 text-sm font-medium text-red-700 hover:bg-red-200 transition">Hapus Gambar</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD: Section 2 -->
                <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
                    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Section 2</h3>
                            <p class="text-sm text-gray-500">Teks bagian kedua (Gambar Kiri, Teks Kanan)</p>
                        </div>
                    </div>

                    <div class="grid gap-6 lg:grid-cols-2">
                        <!-- Textarea -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Konten Section 2</label>
                            <textarea name="section2_content" rows="6" maxlength="750" data-char-counter="section2_counter" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500 char-counter" placeholder="Masukkan konten untuk section 2...">{{ old('section2_content', $tentangKami->section2_content ?? '') }}</textarea>
                            <div class="mt-2 text-right text-xs text-gray-500">
                                <span id="section2_counter">{{ strlen($tentangKami->section2_content ?? '') }}</span> / 750 karakter
                            </div>
                        </div>

                        <!-- Image Preview & Upload -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Gambar Section 2</label>
                            <div class="rounded-3xl border border-dashed border-gray-300 bg-gray-50 p-5">
                                <!-- Preview -->
                                <div id="section2_preview" class="mb-4 h-56 w-full overflow-hidden rounded-2xl bg-gray-200 flex items-center justify-center">
                                    @if($tentangKami->section2_image)
                                        <img src="{{ asset('storage/' . $tentangKami->section2_image) }}" alt="Section 2" class="w-full h-full object-cover">
                                    @else
                                        <span class="text-sm text-gray-400">Belum ada gambar</span>
                                    @endif
                                </div>

                                <!-- Upload Input -->
                                <input type="file" name="section2_image" accept="image/jpg,image/jpeg,image/png,image/webp" class="w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" data-preview="section2_preview">

                                <!-- Delete Button (jika ada gambar) -->
                                @if($tentangKami->section2_image)
                                    <button type="button" onclick="deleteImage('section2_image')" class="mt-3 w-full rounded-lg bg-red-100 px-3 py-2 text-sm font-medium text-red-700 hover:bg-red-200 transition">Hapus Gambar</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD: Section 3 -->
                <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
                    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Section 3</h3>
                            <p class="text-sm text-gray-500">Teks bagian ketiga (Teks Kiri, Gambar Kanan)</p>
                        </div>
                    </div>

                    <div class="grid gap-6 lg:grid-cols-2">
                        <!-- Textarea -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Konten Section 3</label>
                            <textarea name="section3_content" rows="6" maxlength="750" data-char-counter="section3_counter" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500 char-counter" placeholder="Masukkan konten untuk section 3...">{{ old('section3_content', $tentangKami->section3_content ?? '') }}</textarea>
                            <div class="mt-2 text-right text-xs text-gray-500">
                                <span id="section3_counter">{{ strlen($tentangKami->section3_content ?? '') }}</span> / 750 karakter
                            </div>
                        </div>

                        <!-- Image Preview & Upload -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Gambar Section 3</label>
                            <div class="rounded-3xl border border-dashed border-gray-300 bg-gray-50 p-5">
                                <!-- Preview -->
                                <div id="section3_preview" class="mb-4 h-56 w-full overflow-hidden rounded-2xl bg-gray-200 flex items-center justify-center">
                                    @if($tentangKami->section3_image)
                                        <img src="{{ asset('storage/' . $tentangKami->section3_image) }}" alt="Section 3" class="w-full h-full object-cover">
                                    @else
                                        <span class="text-sm text-gray-400">Belum ada gambar</span>
                                    @endif
                                </div>

                                <!-- Upload Input -->
                                <input type="file" name="section3_image" accept="image/jpg,image/jpeg,image/png,image/webp" class="w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" data-preview="section3_preview">

                                <!-- Delete Button (jika ada gambar) -->
                                @if($tentangKami->section3_image)
                                    <button type="button" onclick="deleteImage('section3_image')" class="mt-3 w-full rounded-lg bg-red-100 px-3 py-2 text-sm font-medium text-red-700 hover:bg-red-200 transition">Hapus Gambar</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD: Meta SEO -->
                <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
                    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Meta SEO (Opsional)</h3>
                            <p class="text-sm text-gray-500">Optimasi untuk mesin pencari.</p>
                        </div>
                    </div>

                    <div class="grid gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ old('meta_title', $tentangKami->meta_title ?? '') }}" maxlength="60" placeholder="Tentang Kami - Pempek Abdel" class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500" />
                            <p class="text-xs text-gray-500 mt-1">Maksimal 60 karakter untuk tampilan optimal di search engine.</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                            <textarea name="meta_description" maxlength="160" rows="3" placeholder="Pelajari cerita di balik Pempek Abdel, warisan kuliner khas Jambi..." class="w-full rounded-2xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 focus:border-red-500 focus:outline-none focus:ring-1 focus:ring-red-500">{{ old('meta_description', $tentangKami->meta_description ?? '') }}</textarea>
                            <p class="text-xs text-gray-500 mt-1">Maksimal 160 karakter untuk tampilan optimal di search engine.</p>
                        </div>
                    </div>
                </div>

                <!-- Save Button -->
                <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm flex gap-4">
                    <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-red-700 px-6 py-3 text-white transition hover:bg-red-800 shadow-sm font-medium">
                        Simpan Perubahan
                    </button>
                    <a href="javascript:history.back()" class="inline-flex items-center justify-center rounded-2xl border border-gray-300 px-6 py-3 text-gray-700 transition hover:bg-gray-50 shadow-sm">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Character Counter
        document.querySelectorAll('.char-counter').forEach(textarea => {
            const counter = document.getElementById(textarea.dataset.charCounter);
            updateCounter(textarea, counter);

            textarea.addEventListener('input', function() {
                updateCounter(this, counter);
            });
        });

        function updateCounter(textarea, counter) {
            counter.textContent = textarea.value.length;
        }

        // Image Preview on Upload
        document.querySelectorAll('input[type="file"][data-preview]').forEach(input => {
            input.addEventListener('change', function() {
                const previewId = this.dataset.preview;
                const preview = document.getElementById(previewId);
                const file = this.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.innerHTML = `<img src="${e.target.result}" alt="Preview" class="w-full h-full object-cover">`;
                    };
                    reader.readAsDataURL(file);
                    
                    // Reset delete flag jika user upload file baru
                    const fieldName = input.name;
                    const deleteFieldName = 'delete_' + fieldName;
                    const deleteInput = document.getElementById(deleteFieldName);
                    if (deleteInput) {
                        deleteInput.value = '0';
                    }
                }
            });
        });

        // Delete Image Function
        function deleteImage(field) {
            if (confirm('Apakah Anda yakin ingin menghapus gambar ini?')) {
                const deleteInput = document.getElementById('delete_' + field);
                if (deleteInput) {
                    deleteInput.value = '1';
                    // Update preview
                    const previewId = field.replace('_image', '_preview');
                    const preview = document.getElementById(previewId);
                    if (preview) {
                        preview.innerHTML = '<span class="text-sm text-gray-400">Gambar akan dihapus setelah disimpan</span>';
                    }
                }
            }
        }
    </script>
@endsection
