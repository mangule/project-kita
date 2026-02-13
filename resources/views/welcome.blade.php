<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Pemerintah - Portal Pelayanan Publik</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white dark:bg-gray-950 text-gray-900 dark:text-gray-100">
    
    <!-- Navigation Bar -->
    <nav class="fixed top-0 z-50 w-full bg-white/80 dark:bg-gray-950/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-xl font-semibold text-blue-600 dark:text-blue-400">
                        Pemerintah
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Beranda</a>
                    <a href="#services" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Layanan</a>
                    <a href="#about" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Tentang</a>
                    <a href="#contact" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Kontak</a>
                </div>
                <div class="md:hidden">
                    <button type="button" class="p-2 text-gray-700 dark:text-gray-300" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden md:hidden border-t border-gray-200 dark:border-gray-800" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Beranda</a>
                <a href="#services" class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Layanan</a>
                <a href="#about" class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Tentang</a>
                <a href="#contact" class="block px-3 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative pt-16 pb-32 md:pt-24 md:pb-48 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 via-indigo-600 to-purple-600 dark:from-blue-800 dark:via-indigo-900 dark:to-purple-900"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIxLjUiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 tracking-tight">
                    Portal Pelayanan<br>Pemerintah Digital
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Memberikan pelayanan terbaik untuk masyarakat dengan transparansi dan inovasi teknologi
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#services" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-lg text-blue-600 bg-white hover:bg-gray-50 transition-all shadow-lg">
                        Lihat Layanan
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center px-8 py-3 border-2 border-white text-base font-medium rounded-lg text-white hover:bg-white/10 transition-all">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Layanan Unggulan</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Kami menyediakan berbagai layanan publik yang efisien dan mudah diakses
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Pelayanan Kependudukan</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Pengurusan KTP, KK, Akta Lahir/Mati secara online dan offline dengan proses yang cepat dan mudah.
                    </p>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:underline inline-flex items-center">
                        Pelajari lebih lanjut
                        <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                
                <!-- Service Card 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Perizinan Usaha</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Pengajuan dan pemantauan status izin usaha dengan sistem terpadu yang terintegrasi.
                    </p>
                    <a href="#" class="text-green-600 dark:text-green-400 font-medium hover:underline inline-flex items-center">
                        Pelajari lebih lanjut
                        <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                
                <!-- Service Card 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all border border-gray-200 dark:border-gray-700">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Informasi Publik</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Akses mudah terhadap data dan berita terkini pemerintah dengan transparansi penuh.
                    </p>
                    <a href="#" class="text-purple-600 dark:text-purple-400 font-medium hover:underline inline-flex items-center">
                        Pelajari lebih lanjut
                        <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white dark:bg-gray-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">Tentang Kami</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-4">
                        Pemerintah berkomitmen untuk mewujudkan tata kelola pemerintahan yang baik, transparan, dan akuntabel melalui pemanfaatan teknologi informasi.
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                        Kami percaya bahwa dengan kolaborasi antara pemerintah dan masyarakat, tujuan-tujuan pembangunan dapat tercapai dengan lebih efektif dan efisien.
                    </p>
                    <a href="#" class="inline-flex items-center text-blue-600 dark:text-blue-400 font-medium hover:underline">
                        Baca lebih lanjut
                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
                <div class="relative">
                    <div class="aspect-video bg-gradient-to-br from-blue-400 to-indigo-600 rounded-xl shadow-xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Hubungi Kami</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Kami siap mendengarkan masukan dan melayani pertanyaan Anda
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 border border-gray-200 dark:border-gray-700">
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-white" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:text-white" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors shadow-lg">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-black text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-white font-semibold mb-4">Pemerintah</h3>
                    <p class="text-sm text-gray-400">
                        Portal resmi pelayanan publik dengan teknologi terkini untuk kemudahan masyarakat.
                    </p>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#home" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Layanan</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">Tentang</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>Email: info@pemerintah.go.id</li>
                        <li>Telp: (021) 1234-5678</li>
                        <li>Alamat: Jl. Pemerintahan No. 1</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} Pemerintah. Hak Cipta Dilindungi Undang-Undang.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.getElementById('mobile-menu')?.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>