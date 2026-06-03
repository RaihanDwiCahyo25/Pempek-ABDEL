@extends('layouts.app')

@section('title', (optional($tentangKami)->meta_title ?? 'Tentang Kami - Warung Abdel'))

@section('content')
    <section class="container mx-auto px-6 py-16 max-w-6xl">
        
        <!-- Header Judul -->
        <div class="text-center mb-16">
            <p class="text-[#cc0000] font-bold text-sm tracking-widest uppercase">{{ optional($tentangKami)->section_subtitle ?? 'Tentang Kami' }}</p>
            <h1 class="text-3xl md:text-4xl font-black mt-2 text-black">{{ optional($tentangKami)->section_title ?? 'Cerita Rasa Pempek Abdel' }}</h1>
        </div>

        <!-- Baris 1: Teks Kiri, Gambar Kanan -->
        @if(optional($tentangKami)->section1_content)
        <div class="flex flex-col md:flex-row items-center gap-12 mb-16">
            <div class="md:w-1/2 text-justify">
                <p class="text-gray-800 leading-relaxed whitespace-pre-wrap">
                    {{ optional($tentangKami)->section1_content }}
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="w-full max-w-[520px] overflow-hidden rounded-3xl shadow-sm bg-gray-100">
                    @if(optional($tentangKami)->section1_image)
                        <img src="{{ asset('storage/' . optional($tentangKami)->section1_image) }}" alt="Section 1" class="w-full h-[574px] object-cover">
                    @else
                        <div class="w-full h-[574px] bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-400">Gambar belum tersedia</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endif

        <!-- Baris 2: Gambar Kiri, Teks Kanan -->
        @if(optional($tentangKami)->section2_content)
        <div class="flex flex-col md:flex-row-reverse items-center gap-12 mb-16">
            <div class="md:w-1/2 text-justify">
                <p class="text-gray-800 leading-relaxed whitespace-pre-wrap">
                    {{ optional($tentangKami)->section2_content }}
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="w-full max-w-[520px] overflow-hidden rounded-3xl shadow-sm bg-gray-100">
                    @if(optional($tentangKami)->section2_image)
                        <img src="{{ asset('storage/' . optional($tentangKami)->section2_image) }}" alt="Section 2" class="w-full h-[574px] object-cover">
                    @else
                        <div class="w-full h-[574px] bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-400">Gambar belum tersedia</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endif

        <!-- Baris 3: Teks Kiri, Gambar Kanan -->
        @if(optional($tentangKami)->section3_content)
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 text-justify">
                <p class="text-gray-800 leading-relaxed whitespace-pre-wrap">
                    {{ optional($tentangKami)->section3_content }}
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="w-full max-w-[520px] overflow-hidden rounded-3xl shadow-sm bg-gray-100">
                    @if(optional($tentangKami)->section3_image)
                        <img src="{{ asset('storage/' . optional($tentangKami)->section3_image) }}" alt="Section 3" class="w-full h-[574px] object-cover">
                    @else
                        <div class="w-full h-[574px] bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-400">Gambar belum tersedia</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endif

    </section>
@endsection