<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Warung Abdel - Pempek Asli Jambi')</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased text-gray-800 flex flex-col min-h-screen bg-fixed" style="background-image: url('{{ asset('images/background1.png') }}'); background-repeat: repeat; background-size: 500px;">

<!-- NAVBAR -->
    <nav class="container mx-auto px-6 py-6 flex justify-between items-center">
        <!-- Kiri: Logo dan Teks Warung Abdel -->
        <a href="{{ route('beranda') }}" class="flex items-center space-x-3">
            <div class="flex items-center justify-center h-[56px] w-[56px] min-w-[56px] overflow-hidden rounded-lg bg-white">
                <img src="{{ optional($homepageSetting ?? null)->logo_url ?? asset('images/logo-abdel.png') }}" alt="Logo Warung Abdel" class="max-h-full max-w-full object-contain">
            </div>
            <div class="font-black text-2xl tracking-wide uppercase">
                <span class="text-yellow-400">Warung</span> <span class="text-[#cc0000]">Abdel</span>
            </div>
        </a>
        
        <!-- Kanan: Menu Navigasi -->
        <div class="hidden md:flex space-x-8">
            <a href="{{ route('beranda') }}" class="text-gray-900 hover:text-red-600 font-bold transition {{ request()->routeIs('beranda') ? 'text-red-600' : '' }}">Beranda</a>
            <a href="{{ route('katalog') }}" class="text-gray-900 hover:text-red-600 font-bold transition {{ request()->routeIs('katalog') ? 'text-red-600' : '' }}">Katalog Produk</a>
            <a href="{{ route('tentang') }}" class="text-gray-900 hover:text-red-600 font-bold transition {{ request()->routeIs('tentang') ? 'text-red-600' : '' }}">Tentang Kami</a>
            <a href="{{ route('kemitraan') }}" class="text-gray-900 hover:text-red-600 font-bold transition {{ request()->routeIs('kemitraan') ? 'text-red-600' : '' }}">Kemitraan & Info</a>
        </div>
    </nav>

    <!-- KONTEN DINAMIS -->
    <main class="flex-grow">
        @yield('content')
    </main>

<!-- FOOTER -->
    <footer class="mt-16 pt-16 pb-12">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Kolom 1: Logo, Deskripsi & Sosial Media -->
            <div class="col-span-1 pr-4">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="flex items-center justify-center h-[64px] w-[64px] min-w-[64px] overflow-hidden rounded-lg bg-white">
                        <img src="{{ optional($homepageSetting ?? null)->logo_url ?? asset('images/logo-abdel.png') }}" alt="Logo" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="font-black text-3xl leading-none uppercase">
                        <span class="text-yellow-400 block">Warung</span>
                        <span class="text-[#cc0000] block mt-1">Abdel</span>
                    </div>
                </div>
                <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                    Menyajikan pempek otentik asli Jambi dengan cuko kental khas. Melayani pengiriman aman ke seluruh nusantara dan membuka peluang kemitraan reseller.
                </p>
                <div class="flex space-x-3">
                    <!-- Icon WhatsApp -->
                    <a href="https://wa.me/628117408504" target="_blank" class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-white hover:bg-yellow-500 transition shadow-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 0C5.383 0 0 5.383 0 12.031c0 2.128.552 4.16 1.603 5.965L.031 24l6.195-1.62c1.758.98 3.743 1.498 5.805 1.498 6.648 0 12.031-5.383 12.031-12.031S18.679 0 12.031 0zm0 21.905c-1.802 0-3.565-.483-5.112-1.401l-.367-.217-3.799.996.996-3.799-.217-.367C2.614 15.569 2.13 13.806 2.13 12.031c0-5.467 4.452-9.918 9.918-9.918s9.918 4.451 9.918 9.918-4.451 9.918-9.918 9.918zm5.441-7.428c-.298-.149-1.768-.874-2.042-.974-.274-.101-.474-.149-.673.149-.199.298-.77 .974-.943 1.173-.174.199-.348.224-.646.075-.298-.149-1.261-.465-2.404-1.485-.89-.794-1.491-1.774-1.664-2.073-.174-.298-.018-.46.13-.609.134-.134.298-.348.448-.522.149-.174.199-.298.298-.497.1-.199.05-.373-.025-.522-.075-.149-.673-1.62-.921-2.217-.243-.583-.489-.504-.673-.513-.174-.008-.374-.008-.573-.008s-.522.075-.796.373c-.274.298-1.045 1.02-1.045 2.488s1.07 2.886 1.22 3.085c.149.199 2.103 3.209 5.093 4.5.711.307 1.265.49 1.696.627.713.227 1.362.195 1.876.118.577-.087 1.768-.722 2.017-1.42.249-.697.249-1.294.174-1.42-.074-.125-.273-.2-.572-.349z"/></svg>
                    </a>
                    <!-- Icon Instagram -->
                    <a href="https://www.instagram.com/inipempekabdel" target="_blank" class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-white hover:bg-yellow-500 transition shadow-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Kolom 2: Jam Operasional -->
            <div>
                <h4 class="font-bold text-black mb-4 text-lg">Jam Operasional</h4>
                <p class="text-gray-400 text-sm leading-relaxed">
                    {{ optional($homepageSetting)->jam_operasional ?: 'Senin - Sabtu' }}<br>
                    09:00 - 19:00
                </p>
            </div>

            <!-- Kolom 3: Akses Cepat -->
            <div>
                <h4 class="font-bold text-black mb-4 text-lg">Akses Cepat</h4>
                <ul class="text-gray-400 text-sm space-y-3">
                    <li><a href="{{ route('beranda') }}" class="hover:text-[#cc0000] transition">Beranda</a></li>
                    <li><a href="{{ route('katalog') }}" class="hover:text-[#cc0000] transition">Katalog Produk</a></li>
                    <li><a href="{{ route('tentang') }}" class="hover:text-[#cc0000] transition">Tentang Kami</a></li>
                    <li><a href="{{ route('kemitraan') }}" class="hover:text-[#cc0000] transition">Kemitraan & Info</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Hubungi Kami -->
            <div>
                <h4 class="font-bold text-black mb-4 text-lg">Hubungi Kami</h4>
                <p class="text-gray-400 text-sm mb-2 leading-relaxed">Jl. Pratu Satir, The Hok, Kec. Jambi Sel.,<br>Kota Jambi, Jambi 36125</p>
                <a href="tel:08117408504" class="text-gray-400 text-sm hover:text-[#cc0000] border-b border-gray-300 hover:border-[#cc0000] transition inline-block pb-0.5">
                    {{ optional($homepageSetting)->telepon ?: '0811-7408-504' }}
                </a>
            </div>
        </div>
    </footer>

    <!-- SCRIPT MODAL -->
<script>
        // Modal Manager - Handle semua modal dengan konsisten
        const ModalManager = {
            currentModal: null,

            // Buka modal dengan animasi smooth
            open(modalId) {
                const overlay = document.getElementById(modalId);
                if (!overlay) return;

                // Tutup modal yang sedang aktif
                if (this.currentModal && this.currentModal !== modalId) {
                    this.close(this.currentModal);
                }

                const content = overlay.querySelector('.modal-content');
                
                // Reset state awal
                overlay.classList.remove('hidden');
                content.classList.remove('scale-95');
                content.classList.add('scale-100');
                
                // Trigger reflow untuk memastikan animasi berjalan
                void overlay.offsetHeight;
                
                // Animasi fade in
                overlay.classList.remove('opacity-0');
                
                // Disable body scroll
                document.body.style.overflow = 'hidden';
                this.currentModal = modalId;

                // Add escape key listener
                document.addEventListener('keydown', this.handleEscapeKey);
            },

            // Tutup modal dengan animasi smooth
            close(modalId) {
                const overlay = document.getElementById(modalId);
                if (!overlay) return;

                const content = overlay.querySelector('.modal-content');
                
                // Mulai animasi fade out
                overlay.classList.add('opacity-0');
                content.classList.remove('scale-100');
                content.classList.add('scale-95');
                
                // Tunggu animasi selesai baru sembunyikan
                setTimeout(() => {
                    overlay.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                    this.currentModal = null;
                    
                    // Remove escape key listener
                    document.removeEventListener('keydown', this.handleEscapeKey);
                }, 300);
            },

            // Handle escape key
            handleEscapeKey: (event) => {
                if (event.key === 'Escape' && ModalManager.currentModal) {
                    ModalManager.close(ModalManager.currentModal);
                }
            },

            // Init semua modal dengan click handlers
            init() {
                // Overlay click handler - close modal
                document.querySelectorAll('.modal-overlay').forEach(overlay => {
                    overlay.addEventListener('click', (e) => {
                        if (e.target === overlay) {
                            this.close(overlay.id);
                        }
                    });
                });

                // Prevent click propagation dari modal content
                document.querySelectorAll('.modal-content').forEach(content => {
                    content.addEventListener('click', (e) => {
                        e.stopPropagation();
                    });
                });

                // Tombol close modal
                document.querySelectorAll('[data-close-modal]').forEach(btn => {
                    btn.addEventListener('click', () => {
                        const modalId = btn.closest('.modal-overlay').id;
                        this.close(modalId);
                    });
                });
            }
        };

        // Helper functions untuk kompatibilitas dengan onclick handler
        function bukaModal(idModal) {
            ModalManager.open(idModal);
        }

        function tutupModal(idModal) {
            ModalManager.close(idModal);
        }

        // Init semua modal saat DOM siap
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => {
                ModalManager.init();
            });
        } else {
            ModalManager.init();
        }
    </script>
</body>
</html>