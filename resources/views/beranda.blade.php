@extends('layouts.app')

@section('title', 'Beranda - Warung Abdel')

@section('content')
    <section class="container mx-auto px-6 py-16 flex flex-col-reverse md:flex-row items-center justify-between md:gap-10">
        <div class="md:w-1/2 mt-10 md:mt-0">
            <h1 class="text-5xl md:text-6xl font-black leading-tight mb-6 text-black">
                {!! optional($homepageSetting)->slogan ? nl2br(e($homepageSetting->slogan)) : 'Asli Jambi<br>Sertifikasi BPOM<br><span class="text-[#cc0000]">Halal</span>' !!}
            </h1>
            <p class="text-gray-800 mb-8 max-w-md text-sm md:text-base leading-relaxed">
                {!! optional($homepageSetting)->description ? nl2br(e($homepageSetting->description)) : 'Nikmati kelezatan Pempek Abdel dengan cuko kental khasnya. Dikemas vakum, tahan lama, dan siap kirim aman ke seluruh kota di Indonesia.' !!}
            </p>
            
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6 items-center mb-10">
                <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20pesan%20Pempek%20Abdel" target="_blank" class="bg-[#cc0000] text-white px-8 py-3.5 rounded-lg font-bold hover:bg-red-800 transition shadow-md w-full sm:w-auto text-center">
                    Pesan Sekarang (WA)
                </a>
                <a href="{{ route('katalog') }}" class="flex items-center text-black font-bold hover:text-gray-600 transition group">
                    Lihat Daftar Menu 
                    <span class="ml-3 w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </span>
                </a>
            </div>

<!-- Logos Mitra -->
            <div class="flex flex-wrap gap-6 items-center mt-6">
                <img src="{{ optional($homepageSetting)->halal_logo_url ?? asset('images/logo-halal.png') }}" alt="Halal Indonesia" class="h-16 object-contain">
                <img src="{{ optional($homepageSetting)->bpom_logo_url ?? asset('images/logo-bpom.png') }}" alt="Badan POM" class="h-16 object-contain">
                <img src="{{ asset('images/logo-gofood.png') }}" alt="GoFood" class="w-[160px] h-[160px] object-contain">
                <img src="{{ asset('images/logo-grabfood.png') }}" alt="GrabFood" class="h-8 object-contain">
            </div>
        </div>

        <div class="md:w-1/2 flex justify-end md:justify-center items-center">
            <!-- Bingkai Banner - Ukuran statis tetap 520x420px -->
            <div style="width: 520px; height: 420px;" class="flex items-center justify-center rounded-[50%] overflow-hidden shadow-xl bg-white flex-shrink-0">
               <img src="{{ optional($homepageSetting)->banner_url ?? asset('images/pempek-logo.png') }}" alt="Pempek Abdel" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
        </div>
    </section>

    <section class="container mx-auto px-6 py-8">
        @php
            $phone = optional($homepageSetting)->telepon ?: '0811-7408-504';
            $hours = optional($homepageSetting)->jam_operasional ?: 'Senin - Sabtu<br>09:00 - 19:00';
            $address = optional($homepageSetting)->alamat ?: 'Jl. Pratu Satir, The Hok, Kec. Jambi Sel.,<br>Kota Jambi, Jambi 36125';
        @endphp
        
        <div class="bg-white border border-gray-100 rounded-[40px] shadow-sm py-8 px-4 flex flex-col md:flex-row justify-between text-center divide-y md:divide-y-0 md:divide-x divide-gray-200">
            <div class="py-6 md:py-0 w-full flex flex-col items-center justify-center">
                <div class="w-12 h-12 bg-[#cc0000] rounded-full flex items-center justify-center text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <p class="font-bold text-gray-900 text-base mb-2">{!! $hours !!}</p>
                <p class="text-gray-500 text-xs">Jam Buka</p>
            </div>
            
            <div class="py-6 md:py-0 w-full flex flex-col items-center justify-center px-4">
                <div class="w-12 h-12 bg-[#cc0000] rounded-full flex items-center justify-center text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <p class="font-bold text-gray-900 text-base mb-2">{!! $address !!}</p>
                <p class="text-gray-500 text-xs">Lokasi Toko Offline</p>
            </div>
            
            <div class="py-6 md:py-0 w-full flex flex-col items-center justify-center">
                <div class="w-12 h-12 bg-[#cc0000] rounded-full flex items-center justify-center text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                </div>
                <p class="font-bold text-gray-900 text-base mb-2">{{ $phone }}</p>
                <p class="text-gray-500 text-xs">Nomor Telepon</p>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-6 py-12 mb-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-6 border-b border-gray-200 pb-4">
            <div>
                <p class="text-[#cc0000] font-bold text-sm tracking-widest uppercase mb-1">IKUTI KAMI</p>
                <h2 class="text-2xl font-black text-black">@inipempekabdel</h2>
            </div>
            <a href="https://instagram.com/inipempekabdel" target="_blank" class="text-[#cc0000] font-bold flex items-center hover:text-red-800 transition mt-4 md:mt-0">
                Buka Instagram 
                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
        
        <div class="w-full rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
            <img src="{{ asset('images/ig-feed.png') }}" alt="Instagram Feed @inipempekabdel" class="w-full object-cover">
        </div>
    </section>
@endsection