@extends('layouts.app')

@section('title', 'Tentang Kami - Warung Abdel')

@section('content')
    <section class="container mx-auto px-6 py-16 max-w-6xl">
        
        <!-- Header Judul -->
        <div class="text-center mb-16">
            <p class="text-[#cc0000] font-bold text-sm tracking-widest uppercase">Tentang Kami</p>
            <h1 class="text-3xl md:text-4xl font-black mt-2 text-black">Cerita Rasa Pempek Abdel</h1>
        </div>

        <!-- Baris 1: Teks Kiri, Gambar Kanan -->
        <div class="flex flex-col md:flex-row items-center gap-12 mb-16">
            <div class="md:w-1/2 text-justify">
                <p class="text-gray-800 leading-relaxed mb-6">
                    Pempek Abdel hadir dari kecintaan mendalam terhadap warisan kuliner otentik Nusantara. Berawal dari dapur lokal di Jambi, kami berkomitmen untuk terus menjaga keaslian rasa dengan hanya menggunakan 100% daging ikan tenggiri segar pilihan dan bahan baku berkualitas tinggi.
                </p>
                <p class="text-gray-800 leading-relaxed">
                    Setiap gigitan Pempek Abdel menawarkan tekstur yang lembut namun kenyal, disempurnakan dengan siraman cuko kental khas Jambi yang kaya rempah—pedas, manis, dan asam yang pas di lidah. Diproses secara higienis tanpa bahan pengawet buatan dan dikemas menggunakan teknologi vakum modern, kami memastikan setiap porsi yang sampai ke meja makan Anda tetap fresh, aman, dan siap dinikmati bersama keluarga tercinta. Pempek Abdel: Cita Rasa Asli Jambi yang Selalu Dirindukan.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <!-- Ukuran presisi 520x574 disetel di class -->
                <img src="{{ asset('images/foto-about.png') }}" alt="Proses Pembuatan Pempek" class="w-[520px] h-[574px] object-cover shadow-sm">
            </div>
        </div>

        <!-- Baris 2: Gambar Kiri, Teks Kanan (Di-reverse di layar Desktop) -->
        <div class="flex flex-col md:flex-row-reverse items-center gap-12 mb-16">
            <div class="md:w-1/2 text-justify">
                <p class="text-gray-800 leading-relaxed mb-6">
                    Pempek Abdel hadir dari kecintaan mendalam terhadap warisan kuliner otentik Nusantara. Berawal dari dapur lokal di Jambi, kami berkomitmen untuk terus menjaga keaslian rasa dengan hanya menggunakan 100% daging ikan tenggiri segar pilihan dan bahan baku berkualitas tinggi.
                </p>
                <p class="text-gray-800 leading-relaxed">
                    Setiap gigitan Pempek Abdel menawarkan tekstur yang lembut namun kenyal, disempurnakan dengan siraman cuko kental khas Jambi yang kaya rempah—pedas, manis, dan asam yang pas di lidah. Diproses secara higienis tanpa bahan pengawet buatan dan dikemas menggunakan teknologi vakum modern, kami memastikan setiap porsi yang sampai ke meja makan Anda tetap fresh, aman, dan siap dinikmati bersama keluarga tercinta. Pempek Abdel: Cita Rasa Asli Jambi yang Selalu Dirindukan.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('images/foto-about.png') }}" alt="Proses Pembuatan Pempek" class="w-[520px] h-[574px] object-cover shadow-sm">
            </div>
        </div>

        <!-- Baris 3: Teks Kiri, Gambar Kanan -->
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 text-justify">
                <p class="text-gray-800 leading-relaxed mb-6">
                    Pempek Abdel hadir dari kecintaan mendalam terhadap warisan kuliner otentik Nusantara. Berawal dari dapur lokal di Jambi, kami berkomitmen untuk terus menjaga keaslian rasa dengan hanya menggunakan 100% daging ikan tenggiri segar pilihan dan bahan baku berkualitas tinggi.
                </p>
                <p class="text-gray-800 leading-relaxed">
                    Setiap gigitan Pempek Abdel menawarkan tekstur yang lembut namun kenyal, disempurnakan dengan siraman cuko kental khas Jambi yang kaya rempah—pedas, manis, dan asam yang pas di lidah. Diproses secara higienis tanpa bahan pengawet buatan dan dikemas menggunakan teknologi vakum modern, kami memastikan setiap porsi yang sampai ke meja makan Anda tetap fresh, aman, dan siap dinikmati bersama keluarga tercinta. Pempek Abdel: Cita Rasa Asli Jambi yang Selalu Dirindukan.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('images/foto-about.png') }}" alt="Proses Pembuatan Pempek" class="w-[520px] h-[574px] object-cover shadow-sm">
            </div>
        </div>

    </section>
@endsection