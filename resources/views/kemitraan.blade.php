@extends('layouts.app')

@section('title', 'Kemitraan & Info - Warung Abdel')

@section('content')
    <!-- 1. SECTION KEUNGGULAN -->
    <section id="keunggulan" class="container mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <p class="text-[#cc0000] font-bold text-sm tracking-widest uppercase">Keunggulan</p>
            <h2 class="text-3xl font-black mt-2 text-black">Mengapa Pempek Abdel Jadi Pilihan Utama?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            @forelse($advantages as $advantage)
                <div class="bg-yellow-400 rounded-3xl p-8 shadow-md hover:shadow-lg transition">
                    <div class="bg-white w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-6 shadow-sm">
                        @if($advantage->icon)
                            <img src="{{ asset('storage/' . $advantage->icon) }}" alt="{{ $advantage->title }}" class="h-10 w-10 object-contain">
                        @else
                            <svg class="h-8 w-8 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        @endif
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-black">{{ $advantage->title }}</h3>
                    <p class="text-gray-800 text-sm leading-relaxed">{{ $advantage->description }}</p>
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500">Data keunggulan belum ditambahkan.</div>
            @endforelse
        </div>
    </section>

    <!-- 2. SECTION JANGKAUAN KAMI (Teks HTML Disembunyikan di Desktop Sesuai Kode Asli) -->
    <section id="jangkauan" class="py-16 overflow-hidden my-8">
        <div class="container mx-auto px-6 max-w-6xl">
            
            <div class="text-center mb-16">
                <p class="text-[#cc0000] font-bold text-sm tracking-widest uppercase">Jangkauan Kami</p>
                <h2 class="text-3xl md:text-4xl font-black mt-2 text-black">Hadir Lebih Dekat, Kirim ke Seluruh Indonesia</h2>
            </div>
            
            <div class="relative w-full">
                
                <img src="/images/garis-background2.svg" alt="Alur Garis" 
                     class="hidden md:block absolute top-0 left-0 w-full h-full object-contain z-20 pointer-events-none">
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 pt-4 md:pt-0 relative z-10">
                    
                    <div class="flex flex-col text-center md:text-left">
                        <div class="h-48 mb-6 overflow-hidden rounded-xl">
                            <img src="{{ optional($homepageSetting)->kemitraan_online_image_url ?? asset('images/pempek-box.png') }}" alt="Pempek Box" class="w-full h-full object-cover">
                        </div>
                        <div class="opacity-100 transition-opacity">
                            <!-- <h3 class="text-xl font-black text-[#cc0000] leading-tight mb-3">PESAN<br>ONLINE</h3> -->
                            <!-- <p class="text-gray-800 text-sm leading-relaxed pr-0 md:pr-4">{!! optional($homepageSetting)->kemitraan_online_description ? nl2br(e($homepageSetting->kemitraan_online_description)) : 'Buka katalog digital kami dan hubungi admin via WhatsApp untuk pemesanan langsung dari pusat. Sangat praktis untuk Anda yang berada di luar pulau.' !!}</p> -->
                        </div>
                    </div>

                    <div class="flex flex-col text-center">
                        <div class="opacity-100 transition-opacity">
                            <!-- <h3 class="text-xl font-black text-[#cc0000] leading-tight mb-3">KUNJUNGI<br>WARUNG<br>(OFFLINE)</h3> -->
                            <p class="text-gray-800 text-sm leading-relaxed mb-6 px-2">Sedang berada di Jambi? Mampir langsung ke Warung Pempek Abdel untuk menikmati cuko kental otentik dan pempek segar yang baru diangkat dari wajan.</p>
                        </div>
                        <div class="h-48 mt-auto overflow-hidden rounded-xl md:mt-2">
                            <img src="{{ optional($homepageSetting)->kemitraan_offline_image_url ?? asset('images/toko-abdel.png') }}" alt="Warung Abdel" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div class="flex flex-col text-center md:text-right">
                        <div class="h-48 mb-6 flex items-center justify-center md:justify-end">
                            <img src="{{ optional($homepageSetting)->kemitraan_reseller_map_image_url ?? asset('images/peta-jawa.png') }}" alt="Peta Reseller" class="max-h-full object-contain">
                        </div>
                        <div class="opacity-100 transition-opacity">
                            <!-- <h3 class="text-xl font-black text-[#cc0000] leading-tight mb-3">JARINGAN<br>RESELLER</h3>
                            <p class="text-gray-800 text-sm leading-relaxed pl-0 md:pl-4">{!! optional($homepageSetting)->kemitraan_reseller_description ? nl2br(e($homepageSetting->kemitraan_reseller_description)) : 'Dikemas vakum dengan standar aman, produk kami telah didistribusikan melalui puluhan reseller aktif di Solo, Semarang, Jogja, Jakarta, Bandung, dan Bogor.' !!}</p> -->
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>

    <!-- 3. SECTION BANNER KEMITRAAN (Bertukar posisi ke bawah Jangkauan) -->
    <section class="container mx-auto px-6 py-12">
        <div class="bg-[#cc0000] rounded-3xl overflow-hidden flex flex-col md:flex-row shadow-2xl">
            <div class="md:w-5/12 min-h-[250px]">
                <img src="{{ optional($homepageSetting)->kemitraan_banner_image_url ?? asset('images/pempek-frozen-campur.png') }}" alt="Pempek Frozen Reseller" class="w-full h-full object-cover">
            </div>
            <div class="md:w-7/12 p-10 flex flex-col justify-center text-white">
                <h2 class="text-3xl font-black mb-4">{{ optional($homepageSetting)->kemitraan_banner_title ?? 'Tertarik Menjadi Reseller Kami?' }}</h2>
                <p class="mb-8 text-red-100">{!! optional($homepageSetting)->kemitraan_banner_description ? nl2br(e($homepageSetting->kemitraan_banner_description)) : 'Bergabunglah dengan puluhan mitra kami di Solo, Semarang, Jogja, Jakarta, dan Bandung. Dapatkan harga khusus untuk pembelian partai besar dan raih untung bersama Pempek Abdel.' !!}</p>
                <div>
                    <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20daftar%20jadi%20reseller" target="_blank" class="bg-yellow-400 text-gray-900 px-8 py-3 rounded-full font-bold hover:bg-yellow-500 transition shadow-md inline-block">Daftar Jadi Reseller Via WA</a>
                </div>
            </div>
        </div>
    </section>

@endsection