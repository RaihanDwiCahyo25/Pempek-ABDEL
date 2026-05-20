<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Abdel - Pempek Asli Jambi</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased text-gray-800">

<nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo-abdel.png') }}" alt="Icon Warung Abdel" class="h-10 object-contain">
            
            <img src="{{ asset('images/nama-warung.png') }}" alt="Teks Warung Abdel" class="h-6 object-contain">
        </div>
        
        <div class="hidden md:flex space-x-6">
            <a href="#menu" class="hover:text-red-600 font-medium transition">Katalog Produk</a>
            <a href="#keunggulan" class="hover:text-red-600 font-medium transition">Keunggulan</a>
            <a href="#jangkauan" class="hover:text-red-600 font-medium transition">Jangkauan Kami</a>
            <a href="#testimoni" class="hover:text-red-600 font-medium transition">Testimoni</a>
        </div>
        <div>
            <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20jadi%20reseller" target="_blank" class="bg-[#cc0000] text-white px-6 py-2.5 rounded-full font-bold hover:bg-red-800 transition shadow-md">Jadi Reseller</a>
        </div>
    </nav>

    <section class="container mx-auto px-6 py-12 flex flex-col-reverse md:flex-row items-center">
        <div class="md:w-1/2 mt-8 md:mt-0">
            <h1 class="text-5xl font-extrabold leading-tight mb-4 text-black">
                {!! optional($homepageSetting)->slogan ? nl2br(e($homepageSetting->slogan)) : ($heroSection ? nl2br(e($heroSection->title)) : 'Asli Jambi<br>Sertifikasi BPOM<br><span class="text-[#cc0000]">Halal</span>') !!}
            </h1>
            <p class="text-gray-800 mb-8 max-w-md text-base">
                {!! optional($homepageSetting)->description ? nl2br(e($homepageSetting->description)) : ($heroSection ? nl2br(e($heroSection->description)) : 'Nikmati kelezatan Pempek Abdel dengan cuko kental khasnya. Dikemas vakum, tahan lama, dan siap kirim aman ke seluruh kota di Indonesia.') !!}
            </p>
            <div class="flex space-x-6 items-center">
                <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20pesan%20Pempek%20Abdel" target="_blank" class="bg-[#cc0000] text-white px-8 py-3 rounded-lg font-bold hover:bg-red-800 transition shadow-lg">Pesan Sekarang (WA)</a>
                
                <a href="#menu" class="flex items-center text-black font-bold hover:text-gray-700 transition">
                    Lihat Daftar Menu 
                    <img src="{{ asset('images/icon-buku.png') }}" alt="Icon Menu" class="ml-3 h-10 w-10 object-contain">
                </a>
            </div>
        </div>

        <div class="md:w-1/2 flex flex-col items-center">
            <div class="w-[540px] h-[452.25px] rounded-full overflow-hidden mb-6">
               <img src="{{ asset('images/pempek-logo.png') }}" alt="Mangkuk Pempek Campur" class="w-full h-full object-cover">
            </div>
            
            <div class="flex space-x-8 items-center ml-12">
                <img src="{{ asset('images/logo-halal.png') }}" alt="Halal Indonesia" class="h-16 object-contain">
                
                <img src="{{ asset('images/logo-bpom.png') }}" alt="Badan POM" class="h-16 object-contain">
            </div>
        </div>
    </section>

<section class="container mx-auto px-6 py-8">
        @php
            $phone = optional($homepageSetting)->telepon;
            $hours = optional($homepageSetting)->jam_operasional;
            $address = optional($homepageSetting)->alamat;
            $addressLines = $address ? preg_split('/\r\n|\r|\n/', trim($address)) : [];
        @endphp

        <div class="bg-white border border-gray-100 rounded-[40px] shadow-sm py-10 flex flex-col md:flex-row justify-between items-center text-center divide-y md:divide-y-0 md:divide-x divide-gray-200">
            <div class="px-4 py-4 md:py-0 w-full flex flex-col items-center">
                <div class="w-12 h-12 bg-[#cc0000] rounded-full flex items-center justify-center text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <p class="font-bold text-gray-900 text-sm">{{ $phone ?: '0811-7408-504' }}</p>
                <p class="text-gray-500 text-sm font-bold">Nomor Telepon</p>
            </div>

            <div class="px-4 py-4 md:py-0 w-full flex flex-col items-center">
                <div class="w-12 h-12 bg-[#cc0000] rounded-full flex items-center justify-center text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="font-bold text-gray-900 text-sm">{{ $hours ?: 'Senin - Sabtu, 09:00 - 19:00' }}</p>
                <p class="font-bold text-gray-900 text-sm mb-2">Jam Operasional</p>
            </div>

            <div class="px-4 py-4 md:py-0 w-full flex flex-col items-center">
                <div class="w-12 h-12 bg-[#cc0000] rounded-full flex items-center justify-center text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                @if(count($addressLines))
                    @foreach($addressLines as $line)
                        <p class="font-bold text-gray-900 text-sm {{ $loop->last ? 'mb-2' : '' }}">{{ $line }}</p>
                    @endforeach
                @else
                    <p class="font-bold text-gray-900 text-sm">Jl. Pratu Satir, The Hok, Kec. Jambi Sel.</p>
                    <p class="font-bold text-gray-900 text-sm mb-2">Kota Jambi, Jambi 36125</p>
                @endif
                <p class="text-gray-500 text-sm mb-2">Alamat Toko</p>
            </div>
        </div>
    </section>

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
                            <svg class="h-8 w-8 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @endif
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-black">{{ $advantage->title }}</h3>
                    <p class="text-gray-800 text-sm leading-relaxed">{{ $advantage->description }}</p>
                </div>
            @empty
                <div class="bg-yellow-400 rounded-3xl p-8 shadow-md hover:shadow-lg transition">
                    <div class="bg-white w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-6 shadow-sm">
                        <svg class="h-8 w-8 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-black">Bahan Ikan Tenggiri Premium</h3>
                    <p class="text-gray-800 text-sm leading-relaxed">Dibuat dari 100% daging ikan tenggiri segar pilihan untuk menjamin tekstur yang lembut, kenyal, dan rasa gurih yang otentik tanpa bau amis.</p>
                </div>

                <div class="bg-yellow-400 rounded-3xl p-8 shadow-md hover:shadow-lg transition">
                    <div class="bg-white w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-6 shadow-sm">
                        <svg class="h-8 w-8 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-black">Garansi Cuko Kental Asli</h3>
                    <p class="text-gray-800 text-sm leading-relaxed">Diracik menggunakan resep rahasia dengan gula batok asli. Cuko yang pekat, perpaduan pas pedas, manis, dan asam yang menggugah selera.</p>
                </div>

                <div class="bg-yellow-400 rounded-3xl p-8 shadow-md hover:shadow-lg transition">
                    <div class="bg-white w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-6 shadow-sm">
                        <svg class="h-8 w-8 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-black">Kemasan Vakum Aman</h3>
                    <p class="text-gray-800 text-sm leading-relaxed">Dikemas dengan teknologi vakum kedap udara dan dibekukan. Menjamin pempek tetap fresh, higienis, dan sangat aman dikirim hingga ke luar pulau.</p>
                </div>
            @endforelse
        </div>
    </section>

<section id="menu" class="bg-gray-50 py-16 mt-8">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="text-center mb-12">
                <p class="text-[#cc0000] font-bold text-sm tracking-widest uppercase mb-1">Katalog Produk</p>
                <h2 class="text-3xl font-black text-black">Menu Jualan Utama Kami</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="bg-white rounded-3xl p-5 shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                   <div class="bg-gray-100 rounded-2xl h-56 mb-4 overflow-hidden cursor-pointer group" onclick="bukaModal('modal-campur')">
                        <img src="{{ asset('images/pempek-frozen-campur.png') }}" alt="Pempek Campur" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                   </div>
                    <div class="flex justify-between items-end flex-1">
                        <div class="pr-3">
                            <h3 class="font-bold text-lg text-black">Pempek Campur Frozen</h3>
                            <p class="text-gray-500 text-xs mt-1 leading-tight">Isi lengkap: adaan, lenjer, kulit, kriting & telur</p>
                        </div>
                        <a href="https://wa.me/6289527235298?text=Halo,%20saya%20mau%20pesan%20Pempek%20Campur%20Frozen." target="_blank" rel="noopener noreferrer" class="shrink-0 text-[#cc0000] hover:text-red-800 transition transform hover:scale-110">
                            <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-10 h-10 object-contain">
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-5 shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <div class="bg-gray-100 rounded-2xl h-56 mb-4 overflow-hidden cursor-pointer group" onclick="bukaModal('modal-adaan')">
                        <img src="{{ asset('images/pempek-frozen-adaan.png') }}" alt="Pempek Adaan" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="flex justify-between items-end flex-1">
                        <div class="pr-3">
                            <h3 class="font-bold text-lg text-black">Pempek Adaan Frozen</h3>
                            <p class="text-gray-500 text-xs mt-1 leading-tight">Bulat kenyal dari ikan tenggiri pilihan</p>
                        </div>
                        <a href="https://wa.me/6289527235298?text=Halo,%20saya%20mau%20pesan%20Pempek%20Adaan%20Frozen." target="_blank" rel="noopener noreferrer" class="shrink-0 text-[#cc0000] hover:text-red-800 transition transform hover:scale-110">
                           <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-10 h-10 object-contain">
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-5 shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <div class="bg-gray-100 rounded-2xl h-56 mb-4 overflow-hidden cursor-pointer group" onclick="bukaModal('modal-kulit')">
                        <img src="{{ asset('images/pempek-frozen-kulit.png') }}" alt="Pempek Kulit" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="flex justify-between items-end flex-1">
                        <div class="pr-3">
                            <h3 class="font-bold text-lg text-black">Pempek Kulit Frozen</h3>
                            <p class="text-gray-500 text-xs mt-1 leading-tight">Tekstur renyah, cocok digoreng kering</p>
                        </div>
                        <a href="https://wa.me/6289527235298?text=Halo,%20saya%20mau%20pesan%20Pempek%20Kulit%20Frozen." target="_blank" rel="noopener noreferrer" class="shrink-0 text-[#cc0000] hover:text-red-800 transition transform hover:scale-110">
                           <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-10 h-10 object-contain">
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-5 shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <div class="bg-gray-100 rounded-2xl h-56 mb-4 overflow-hidden cursor-pointer group" onclick="bukaModal('modal-lenjer')">
                        <img src="{{ asset('images/pempek-frozen-lenjer.png') }}" alt="Pempek Lenjer Frozen" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="flex justify-between items-end flex-1">
                        <div class="pr-3">
                            <h3 class="font-bold text-lg text-black">Pempek Lenjer Frozen</h3>
                            <p class="text-gray-500 text-xs mt-1 leading-tight">Klasik panjang, cocok untuk semua selera</p>
                        </div>
                        <a href="https://wa.me/6289527235298?text=Halo,%20saya%20mau%20pesan%20Pempek%20Lenjer%20Frozen." target="_blank" rel="noopener noreferrer" class="shrink-0 text-[#cc0000] hover:text-red-800 transition transform hover:scale-110">
                            <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-10 h-10 object-contain">
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-5 shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <div class="bg-gray-100 rounded-2xl h-56 mb-4 overflow-hidden cursor-pointer group" onclick="bukaModal('modal-kriting')">
                        <img src="{{ asset('images/pempek-frozen-kriting.png') }}" alt="Pempek Kriting" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="flex justify-between items-end flex-1">
                        <div class="pr-3">
                            <h3 class="font-bold text-lg text-black">Pempek Kriting Frozen</h3>
                            <p class="text-gray-500 text-xs mt-1 leading-tight">Bentuk unik, favorit anak-anak</p>
                        </div>
                        <a href="https://wa.me/6289527235298?text=Halo,%20saya%20mau%20pesan%20Pempek%20Kriting%20Frozen." target="_blank" rel="noopener noreferrer" class="shrink-0 text-[#cc0000] hover:text-red-800 transition transform hover:scale-110">
                           <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-10 h-10 object-contain">
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-5 shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col">
                    <div class="bg-gray-100 rounded-2xl h-56 mb-4 overflow-hidden cursor-pointer group" onclick="bukaModal('modal-telur')">
                        <img src="{{ asset('images/pempek-frozen-telur.png') }}" alt="Pempek Telur" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="flex justify-between items-end flex-1">
                        <div class="pr-3">
                            <h3 class="font-bold text-lg text-black">Pempek Telur Frozen</h3>
                            <p class="text-gray-500 text-xs mt-1 leading-tight">Isi telur penuh, ukuran besar</p>
                        </div>
                        <a href="https://wa.me/6289527235298?text=Halo,%20saya%20mau%20pesan%20Pempek%20Telur%20Frozen." target="_blank" rel="noopener noreferrer" class="shrink-0 text-[#cc0000] hover:text-red-800 transition transform hover:scale-110">
                            <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-10 h-10 object-contain">
                        </a>
                    </div>
                </div>

            </div>
            
            <div class="text-center mt-12">
                 <button class="bg-[#cc0000] text-white pl-8 pr-2 py-2 rounded-full font-bold inline-flex items-center hover:bg-red-800 shadow-lg transition">
                     Tampilkan lebih banyak 
                     <span class="ml-4 bg-white text-[#cc0000] rounded-full w-10 h-10 flex items-center justify-center">
                         <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"></path></svg>
                     </span>
                 </button>
            </div>
        </div>
    </section>

<div id="modal-campur" class="modal-overlay fixed inset-0 z-50 hidden flex items-center justify-center px-4 bg-black/60 transition-opacity">
    <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl relative flex flex-col max-h-[90vh]">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-white sticky top-0 z-10">
            <h3 class="text-lg font-bold text-gray-900">Detail Pempek Campur Frozen</h3>
            <button onclick="tutupModal('modal-campur')" class="text-gray-900 hover:bg-gray-100 p-1 rounded-md transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="px-6 py-5 space-y-4 overflow-y-auto">
            <div><p class="font-bold text-sm text-gray-900 mb-1">Harga (Rp) <span class="text-yellow-400">*</span></p><p class="text-gray-700">Rp30.000</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Deskripsi <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm leading-relaxed">Ragu mau pilih yang mana? Paket komplit ini adalah jawabannya! Terbuat dari 100% ikan tenggiri segar. Lengkap dengan siraman cuko hitam pekat khas Jambi.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Isi Kemasan <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">2 Adaan, 2 Lenjer, 2 Kulit, 2 Kriting, 2 Telur (Total 10 Pcs) + 1 Botol Cuko 250ml.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Berat Bersih <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">500 gram.</p></div>
        </div>
        <div class="px-6 py-4 border-t border-gray-100 bg-white sticky bottom-0">
            <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20pesan%20*Pempek%20Campur%20Frozen*" target="_blank" class="w-full flex items-center justify-center gap-2.5 bg-[#cc0000] text-white py-3 rounded-xl font-bold hover:bg-red-800 shadow-md transition text-base">
                <span class="leading-none pt-[2px]">Pesan Sekarang</span>
                <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-6 h-6 object-contain">
            </a>
        </div>
    </div>
</div>

<div id="modal-adaan" class="modal-overlay fixed inset-0 z-50 hidden flex items-center justify-center px-4 bg-black/60 transition-opacity">
    <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl relative flex flex-col max-h-[90vh]">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-white sticky top-0 z-10">
            <h3 class="text-lg font-bold text-gray-900">Detail Pempek Adaan Frozen</h3>
            <button onclick="tutupModal('modal-adaan')" class="text-gray-900 hover:bg-gray-100 p-1 rounded-md transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="px-6 py-5 space-y-4 overflow-y-auto">
            <div><p class="font-bold text-sm text-gray-900 mb-1">Harga (Rp) <span class="text-yellow-400">*</span></p><p class="text-gray-700">Rp25.000</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Deskripsi <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm leading-relaxed">Pempek adaan bentuk bulat yang gurih dan kenyal. Digoreng langsung lebih nikmat, terbuat dari daging ikan tenggiri dan santan pilihan.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Isi Kemasan <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">10 Pcs Pempek Adaan + 1 Botol Cuko 250ml.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Berat Bersih <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">500 gram.</p></div>
        </div>
        <div class="px-6 py-4 border-t border-gray-100 bg-white sticky bottom-0">
            <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20pesan%20*Pempek%20Adaan%20Frozen*" target="_blank" class="w-full flex items-center justify-center gap-2.5 bg-[#cc0000] text-white py-3 rounded-xl font-bold hover:bg-red-800 shadow-md transition text-base">
                <span class="leading-none pt-[2px]">Pesan Sekarang</span>
                <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-6 h-6 object-contain">
            </a>
        </div>
    </div>
</div>

<div id="modal-kulit" class="modal-overlay fixed inset-0 z-50 hidden flex items-center justify-center px-4 bg-black/60 transition-opacity">
    <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl relative flex flex-col max-h-[90vh]">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-white sticky top-0 z-10">
            <h3 class="text-lg font-bold text-gray-900">Detail Pempek Kulit Frozen</h3>
            <button onclick="tutupModal('modal-kulit')" class="text-gray-900 hover:bg-gray-100 p-1 rounded-md transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="px-6 py-5 space-y-4 overflow-y-auto">
            <div><p class="font-bold text-sm text-gray-900 mb-1">Harga (Rp) <span class="text-yellow-400">*</span></p><p class="text-gray-700">Rp25.000</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Deskripsi <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm leading-relaxed">Bagi pecinta tekstur crispy, pempek kulit ini juaranya! Makin garing saat digoreng kering, rasanya lebih *fishy* dan gurih khas ikan segar.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Isi Kemasan <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">10 Pcs Pempek Kulit + 1 Botol Cuko 250ml.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Berat Bersih <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">500 gram.</p></div>
        </div>
        <div class="px-6 py-4 border-t border-gray-100 bg-white sticky bottom-0">
            <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20pesan%20*Pempek%20Kulit%20Frozen*" target="_blank" class="w-full flex items-center justify-center gap-2.5 bg-[#cc0000] text-white py-3 rounded-xl font-bold hover:bg-red-800 shadow-md transition text-base">
                <span class="leading-none pt-[2px]">Pesan Sekarang</span>
                <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-6 h-6 object-contain">
            </a>
        </div>
    </div>
</div>

<div id="modal-lenjer" class="modal-overlay fixed inset-0 z-50 hidden flex items-center justify-center px-4 bg-black/60 transition-opacity">
    <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl relative flex flex-col max-h-[90vh]">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-white sticky top-0 z-10">
            <h3 class="text-lg font-bold text-gray-900">Detail Pempek Lenjer Frozen</h3>
            <button onclick="tutupModal('modal-lenjer')" class="text-gray-900 hover:bg-gray-100 p-1 rounded-md transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="px-6 py-5 space-y-4 overflow-y-auto">
            <div><p class="font-bold text-sm text-gray-900 mb-1">Harga (Rp) <span class="text-yellow-400">*</span></p><p class="text-gray-700">Rp25.000</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Deskripsi <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm leading-relaxed">Varian klasik yang bentuknya panjang. Potong-potong lalu goreng, nikmati tekstur kenyal asli ikan tenggiri yang menyatu dengan cuko pedas manis.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Isi Kemasan <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">10 Pcs Pempek Lenjer Potong + 1 Botol Cuko 250ml.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Berat Bersih <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">500 gram.</p></div>
        </div>
        <div class="px-6 py-4 border-t border-gray-100 bg-white sticky bottom-0">
            <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20pesan%20*Pempek%20Lenjer%20Frozen*" target="_blank" class="w-full flex items-center justify-center gap-2.5 bg-[#cc0000] text-white py-3 rounded-xl font-bold hover:bg-red-800 shadow-md transition text-base">
                <span class="leading-none pt-[2px]">Pesan Sekarang</span>
                <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-6 h-6 object-contain">
            </a>
        </div>
    </div>
</div>

<div id="modal-kriting" class="modal-overlay fixed inset-0 z-50 hidden flex items-center justify-center px-4 bg-black/60 transition-opacity">
    <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl relative flex flex-col max-h-[90vh]">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-white sticky top-0 z-10">
            <h3 class="text-lg font-bold text-gray-900">Detail Pempek Kriting Frozen</h3>
            <button onclick="tutupModal('modal-kriting')" class="text-gray-900 hover:bg-gray-100 p-1 rounded-md transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="px-6 py-5 space-y-4 overflow-y-auto">
            <div><p class="font-bold text-sm text-gray-900 mb-1">Harga (Rp) <span class="text-yellow-400">*</span></p><p class="text-gray-700">Rp25.000</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Deskripsi <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm leading-relaxed">Bentuknya yang keriting bergelombang bikin teksturnya unik, kenyal di dalam renyah di luar. Sangat digemari anak-anak dan keluarga.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Isi Kemasan <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">10 Pcs Pempek Kriting + 1 Botol Cuko 250ml.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Berat Bersih <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">500 gram.</p></div>
        </div>
        <div class="px-6 py-4 border-t border-gray-100 bg-white sticky bottom-0">
            <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20pesan%20*Pempek%20Kriting%20Frozen*" target="_blank" class="w-full flex items-center justify-center gap-2.5 bg-[#cc0000] text-white py-3 rounded-xl font-bold hover:bg-red-800 shadow-md transition text-base">
                <span class="leading-none pt-[2px]">Pesan Sekarang</span>
                <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-6 h-6 object-contain">
            </a>
        </div>
    </div>
</div>

<div id="modal-telur" class="modal-overlay fixed inset-0 z-50 hidden flex items-center justify-center px-4 bg-black/60 transition-opacity">
    <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden shadow-2xl relative flex flex-col max-h-[90vh]">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-white sticky top-0 z-10">
            <h3 class="text-lg font-bold text-gray-900">Detail Pempek Telur Frozen</h3>
            <button onclick="tutupModal('modal-telur')" class="text-gray-900 hover:bg-gray-100 p-1 rounded-md transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="px-6 py-5 space-y-4 overflow-y-auto">
            <div><p class="font-bold text-sm text-gray-900 mb-1">Harga (Rp) <span class="text-yellow-400">*</span></p><p class="text-gray-700">Rp25.000</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Deskripsi <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm leading-relaxed">Pempek selam ukuran kecil dengan isian telur utuh yang gurih. Perpaduan adonan ikan tenggiri dan gurihnya telur bikin nagih!</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Isi Kemasan <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">10 Pcs Pempek Telur + 1 Botol Cuko 250ml.</p></div>
            <div><p class="font-bold text-sm text-gray-900 mb-1">Berat Bersih <span class="text-yellow-400">*</span></p><p class="text-gray-600 text-sm">500 gram.</p></div>
        </div>
        <div class="px-6 py-4 border-t border-gray-100 bg-white sticky bottom-0">
            <a href="https://wa.me/6289527235298?text=Halo%20Admin,%20saya%20mau%20pesan%20*Pempek%20Telur%20Frozen*" target="_blank" class="w-full flex items-center justify-center gap-2.5 bg-[#cc0000] text-white py-3 rounded-xl font-bold hover:bg-red-800 shadow-md transition text-base">
                <span class="leading-none pt-[2px]">Pesan Sekarang</span>
                <img src="{{ asset('images/logo-wa.png') }}" alt="Pesan WA" class="w-6 h-6 object-contain">
            </a>
        </div>
    </div>
</div>

    <section id="jangkauan" class="bg-white py-20 border-t border-gray-100 overflow-hidden">
        <div class="container mx-auto px-6 max-w-6xl">
            
            <div class="text-center mb-16">
                <p class="text-[#cc0000] font-bold text-sm tracking-widest uppercase">Jangkauan Kami</p>
                <h2 class="text-3xl md:text-4xl font-black mt-2 text-black">Hadir Lebih Dekat, Kirim ke Seluruh Indonesia</h2>
            </div>
            
            <div class="relative w-full">
                
                <img src="/images/garis-background2.svg" alt="Alur Garis" 
                     class="hidden md:block absolute top-0 left-0 w-full h-full object-contain z-20 pointer-events-none">
                
                <div class="flex flex-col md:flex-row justify-between items-stretch gap-12 md:gap-4 pt-4 md:pt-0 relative z-10">
                    
                    <div class="w-full md:w-[30%] flex flex-col text-center md:text-left">
                        <div class="h-48 mb-6 overflow-hidden rounded-xl">
                            <img src="/images/pempek-box.png" alt="Pempek Box" class="w-full h-full object-cover">
                        </div>
                        <div class="opacity-100 md:opacity-0 transition-opacity">
                            <h3 class="text-xl font-black text-[#cc0000] leading-tight mb-3">PESAN<br>ONLINE</h3>
                            <p class="text-gray-800 text-sm leading-relaxed pr-0 md:pr-4">Buka katalog digital kami dan hubungi admin via WhatsApp untuk pemesanan langsung dari pusat. Sangat praktis untuk Anda yang berada di luar pulau.</p>
                        </div>
                    </div>

                    <div class="w-full md:w-[30%] flex flex-col text-center mt-0 md:-mt-4">
                        <div class="opacity-100 md:opacity-0 transition-opacity">
                            <h3 class="text-xl font-black text-[#cc0000] leading-tight mb-3">KUNJUNGI<br>WARUNG<br>(OFFLINE)</h3>
                            <p class="text-gray-800 text-sm leading-relaxed mb-6 px-2">Sedang berada di Jambi? Mampir langsung ke Warung Pempek Abdel untuk menikmati cuko kental otentik dan pempek segar yang baru diangkat dari wajan.</p>
                        </div>
                        <div class="h-48 mt-auto overflow-hidden rounded-xl md:mt-2">
                            <img src="/images/toko-abdel.png" alt="Warung Abdel" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div class="w-full md:w-[30%] flex flex-col text-center md:text-right">
                        <div class="h-48 mb-6 flex items-center justify-center md:justify-end">
                            <img src="/images/peta-jawa.png" alt="Peta Reseller" class="max-h-full object-contain">
                        </div>
                        <div class="opacity-100 md:opacity-0 transition-opacity">
                            <h3 class="text-xl font-black text-[#cc0000] leading-tight mb-3">JARINGAN<br>RESELLER</h3>
                            <p class="text-gray-800 text-sm leading-relaxed pl-0 md:pl-4">Dikemas vakum dengan standar aman, produk kami telah didistribusikan melalui puluhan reseller aktif di Solo, Semarang, Jogja, Jakarta, Bandung, dan Bogor.</p>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>
        
        <div class="text-center mb-12">
            <p class="text-[#cc0000] font-bold text-sm tracking-widest uppercase">Testimoni</p>
            <h2 class="text-3xl font-black mt-2 text-black">Apa Kata Pelanggan Kami?</h2>
        </div>
        
        <div class="flex flex-col md:flex-row items-center gap-12">
            
            <div class="md:w-1/2 w-full relative">
                
                <button class="absolute -left-4 md:-left-6 top-1/2 -translate-y-1/2 z-10 hover:scale-110 transition drop-shadow-md">
                    <img src="{{ asset('images/panah-kiri.png') }}" alt="Previous" class="w-12 h-12 md:w-14 md:h-14 object-contain">
                </button>

                <div class="bg-white border border-gray-100 rounded-3xl p-8 md:p-12 shadow-lg text-center mx-4 md:mx-6">
                    <div class="flex flex-col items-center justify-center mb-6">
                        <img src="{{ asset('images/foto-profil.jpg') }}" alt="Budi Santoso" class="w-16 h-16 rounded-full object-cover bg-gray-200 mb-3 shadow-sm">
                        <h4 class="font-bold text-black text-lg">Budi Santoso</h4>
                        <p class="text-xs text-gray-500">Reseller - Jakarta Selatan</p>
                    </div>
                    <p class="text-gray-800 text-sm md:text-base leading-relaxed font-medium">"Pempeknya sampai di Jakarta masih fresh banget karena kemasan vakumnya rapi! Cukonya kental, pedasnya pas, dan ikannya sangat terasa. Laris manis dijual lagi di sini."</p>
                </div>

                <button class="absolute -right-4 md:-right-6 top-1/2 -translate-y-1/2 z-10 hover:scale-110 transition drop-shadow-md">
                    <img src="{{ asset('images/panah-kanan.png') }}" alt="Next" class="w-12 h-12 md:w-14 md:h-14 object-contain">
                </button>
                
            </div>

            <div class="md:w-1/2 flex justify-center">
                <div class="w-[488.25px] h-[500.25px] rounded-3xl overflow-hidden shadow-xl">
                   <img src="{{ asset('images/mangkok-bawah.png') }}" alt="Gambar Mangkok Pempek" class="w-full h-full object-cover">
                </div>
            </div>
            
        </div>
    </section>

    <section class="container mx-auto px-6 py-8">
        <div class="bg-[#cc0000] rounded-3xl overflow-hidden flex flex-col md:flex-row shadow-2xl">
            
            <div class="md:w-5/12 min-h-[250px]">
                <img src="{{ asset('images/pempek-frozen-campur.png') }}" alt="Pempek Frozen Reseller" class="w-full h-full object-cover">
            </div>
            
            <div class="md:w-7/12 p-10 flex flex-col justify-center text-white">
                <h2 class="text-3xl font-black mb-4">Tertarik Menjadi Reseller Kami?</h2>
                <p class="mb-8 text-red-100">Bergabunglah dengan puluhan mitra kami di Solo, Semarang, Jogja, Jakarta, dan Bandung. Dapatkan harga khusus untuk pembelian partai besar dan raih untung bersama Pempek Abdel.</p>
                <div>
                    <a href="#" class="bg-yellow-400 text-gray-900 px-8 py-3 rounded-full font-bold hover:bg-yellow-500 transition shadow-md">Daftar Jadi Reseller</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t border-gray-200 mt-16 pt-16 pb-8">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
        <div class="col-span-1 md:col-span-1">
            <div class="flex items-center space-x-2 mb-4">
                <img src="{{ asset('images/logo-abdel.png') }}" alt="Logo" class="h-8 object-contain">
                <img src="{{ asset('images/nama-warung.png') }}" alt="Warung Abdel" class="h-5 object-contain">
            </div>
            <p class="text-gray-500 text-sm">Menyajikan pempek otentik asli Jambi dengan cuka kental khas. Berkomitmen memberikan kualitas terbaik dan membawa peluang kemitraan reseller.</p>
        </div>
            <div>
                <h4 class="font-bold mb-4">Jam Operasional</h4>
                <p class="text-gray-500 text-sm">Senin - Sabtu<br>09:00 - 17:00</p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Akses Cepat</h4>
                <ul class="text-gray-500 text-sm space-y-2">
                    <li><a href="#" class="hover:text-red-600">Beranda</a></li>
                    <li><a href="#keunggulan" class="hover:text-red-600">Keunggulan</a></li>
                    <li><a href="#menu" class="hover:text-red-600">Katalog Produk</a></li>
                    <li><a href="#testimoni" class="hover:text-red-600">Testimoni</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Hubungi Kami</h4>
                <p class="text-gray-500 text-sm mb-2">Jl. Pintu Sela, The Hok, Kec. Jambi Sel., Kota Jambi 36125</p>
                <p class="text-gray-500 text-sm font-bold">0812-xxxx-xxxx</p>
            </div>
        </div>
        <div class="container mx-auto px-6 border-t border-gray-100 pt-8 text-center text-gray-400 text-sm">
            &copy; 2026 Warung Abdel. All rights reserved.
        </div>
    </footer>

    <script>
        // Fungsi buka modal
        function bukaModal(idModal) {
            document.getElementById(idModal).classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Menghilangkan scroll saat modal terbuka
        }

        // Fungsi tutup modal
        function tutupModal(idModal) {
            document.getElementById(idModal).classList.add('hidden');
            document.body.style.overflow = 'auto'; // Mengembalikan scroll
        }

        // Menutup modal jika klik area gelap/hitam di luar popup
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay')) {
                event.target.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }
    </script>

</body>
</html>