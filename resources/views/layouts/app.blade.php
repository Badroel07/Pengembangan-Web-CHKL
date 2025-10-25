@php
    // Pastikan Anda menggunakan Facade Request
    use Illuminate\Support\Facades\Request;

    // Definisikan class yang ingin Anda terapkan saat link aktif.
    // Di sini saya asumsikan 'active-link' adalah styling kustom Anda.
    $activeClass = 'text-blue-600 border-blue-600';
    $inactiveClass = 'text-gray-600 border-transparent hover:text-blue-600 hover:border-blue-600';

    // Tambahkan class yang statis (non-aktif) terlebih dahulu
    $baseClass = 'font-medium transition duration-300 border-b-2 pb-1';
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <!-- Memuat Tailwind CSS melalui CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    @include('components.style')
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
</head>
<body class="flex flex-col min-h-screen">
     <!-- Header & Navigasi -->
    <header class="shadow-md sticky top-0 z-50 bg-gray-800 backdrop-blur-md">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600 hover:text-blue-700 transition duration-300">.CHKL</a>
            <div class="hidden md:flex flex-wrap justify-center gap-6">
                <!-- Tambahkan border bottom dan transisi -->
                <a href="/" class="{{ $baseClass }} {{ Request::is('/') ? $activeClass : $inactiveClass }}">HOME</a>
                <a href="/projects" class="{{ $baseClass }} {{ Request::is('projects') ? $activeClass : $inactiveClass }}">PROJECTS</a>
                <a href="#keahlian" class="text-gray-600 hover:text-blue-600 font-medium transition duration-300 border-b-2 border-transparent hover:border-blue-600 pb-1">MY SKILLS</a>
                <a href="/about" class="{{ $baseClass }} {{ Request::is('about') ? $activeClass : $inactiveClass }}">ABOUT</a>
            </div>
            <!-- Tombol Menu Mobile (Icon SVG) -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-white hover:bg-gray-900 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </nav>
        <!-- Menu Mobile (Tersembunyi secara default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-800 shadow-lg border-gray-100">
            <a href="/" class="block py-3 px-6 text-white hover:bg-gray-900 transition duration-300" onclick="closeMenu()">HOME</a>
            <a href="/projects" class="block py-3 px-6 text-white hover:bg-gray-900 transition duration-300" onclick="closeMenu()">PROJECTS</a>
            <a href="#keahlian" class="block py-3 px-6 text-white hover:bg-gray-900 transition duration-300" onclick="closeMenu()">MY SKILLS</a>
            <a href="/about" class="block py-3 px-6 text-white hover:bg-gray-900 transition duration-300" onclick="closeMenu()">ABOUT</a>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm">&copy; 2025 Chikal. Dibuat dengan semangat Teknik Informatika IT Garut. | Hak Cipta Dilindungi.</p>
            <div class="mt-4 flex justify-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300">GitHub</a>
                <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300">LinkedIn</a>
                <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300">Instagram</a>
            </div>
        </div>
    </footer>
</body>
</html>