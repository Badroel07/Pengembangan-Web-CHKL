@extends('layouts.app')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHKL</title>
    @include('components.style')
</head>
<body class="bg-gray-50 text-gray-800">
    @section('content')
    <main>
        <!-- Bagian Beranda (Hero) - Telah diubah menjadi RATA KIRI -->
        <section id="beranda" class="py-20 md:py-32 lg:py-40 bg-gray-900 relative overflow-hidden">
            <!-- Latar belakang abstrak -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-gray-50 opacity-50 -z-10"></div>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl">
                    <!-- Foto Profil Placeholder (Ganti dengan URL foto Anda) -->
                    <!-- Rata kiri di desktop, rata tengah di mobile -->
                    <img src="{{ asset('img/home/profil_chikal.jpg') }}" alt="Foto Profil Chikal" class="w-72 h-72 rounded-full mb-6 shadow-xl ring-4 ring-blue-200 object-cover mx-auto md:mx-0">
                    
                    <!-- Hapus text-center dari parent, agar rata kiri -->
                    <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white mb-4 leading-tight">
                        Hello, I'm <span class="text-blue-600">Chikal</span>
                    </h1>
                    <p class="text-xl sm:text-2xl text-white mb-8">
                        Informatics <span class="font-semibold text-blue-600">Engineering Student</span> | Garut Institute of Technology
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="/projects" class="btn-primary bg-blue-600 text-white py-3 px-8 rounded-full font-semibold shadow-lg hover:bg-blue-700 transition duration-300 text-center">
                            View My Projects
                        </a>
                        <a href="mailto:muhamadchikal12@gmail.com" class="btn-primary border border-gray-300 text-gray-700 bg-white py-3 px-8 rounded-full font-semibold hover:bg-gray-100 transition duration-300 text-center">
                            Contact Me
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Tentang Saya -->
        <section id="tentang" class="py-16 md:py-24 bg-gray-900">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                
                {{-- Hapus 'text-center' dari h2 --}}
                <h2 class="text-3xl font-bold text-white mb-12 border-b-4 border-blue-500 inline-block pb-1">Tentang Saya</h2>
                
                {{-- Hapus 'max-w-3xl mx-auto' agar konten menempati lebar penuh --}}
                <div class="text-lg text-white leading-relaxed">
                    <p class="mb-4">
                        Saya Chikal, seorang mahasiswa semester 5 di Teknik Informatika, Institut Teknologi Garut. Sejak memulai perkuliahan, saya telah mengembangkan minat yang kuat di bidang pengembangan software.
                    </p>
                    <p class="mb-4">
                        Fokus utama saya saat ini adalah menjadi Pengembang Web *Full-Stack* yang handal. Saya aktif mempelajari teknologi terbaru di ranah *front-end* seperti React dan Tailwind CSS, serta mendalami *back-end* menggunakan Python dan NodeJS.
                    </p>
                    <p>
                        Saya selalu antusias dalam mengambil tantangan baru, terutama proyek-proyek yang melibatkan pemecahan masalah kompleks dan pembelajaran mesin. Saya percaya bahwa pendidikan di IT Garut memberikan fondasi yang kokoh untuk karir di bidang teknologi.
                    </p>
                </div>
                
            </div>
        </section>

        <!-- Bagian Proyek (Projects) -->
        <section id="proyek" class="py-16 md:py-24 bg-gray-900">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-white mb-12 border-b-4 border-blue-500 inline-block pb-1">Proyek Terbaru</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Menggunakan @forelse untuk menangani kasus kosong --}}
                    @forelse ($latestProjects as $project)
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ $project->image_url }}" alt="Proyek {{ $project->title }}" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white mb-2">{{ $project->title }}</h3>
                                <p class="text-gray-50 text-sm mb-4">{{ Str::limit($project->description, 70) }}</p>
                                <div class="space-x-2">
                                    {{-- Loop Teknologi --}}
                                    @if (is_array($project->technologies))
                                        @foreach (array_slice($project->technologies, 0, 2) as $tech)
                                            <span class="inline-block bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">{{ $tech }}</span>
                                        @endforeach
                                    @endif
                                </div>
                                <a href="{{ $project->detail_link ?? route('portfolio.index') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold transition duration-300">Lihat Detail &rarr;</a>
                            </div>
                        </div>
                    @empty
                        {{-- KONTEN INI AKAN MUNCUL JIKA $latestProjects KOSONG --}}
                        <div class="col-span-full text-center py-10">
                            <p class="text-xl text-gray-400 font-medium">
                                Ops! Saat ini belum ada proyek yang ditambahkan
                            </p>
                            <p class="text-gray-500 mt-2 text-lg">
                                Coba tambahkan proyek baru melalui halaman admin!
                            </p>
                        </div>
                    @endforelse
                    
                </div>
            </div>
        </section>

        <!-- Bagian Kontak (Contact) -->
        <section id="kontak" class="py-16 md:py-24 bg-gray-900">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-center text-white mb-12 border-b-4 border-blue-500 inline-block pb-1">Mari Berkolaborasi</h2>
                <div class="max-w-xl mx-auto">
                    <p class="text-lg text-white mb-6">
                        Jika Anda tertarik dengan keahlian dan proyek-proyek saya, atau ingin mendiskusikan peluang kolaborasi, jangan ragu untuk menghubungi saya.
                    </p>
                    <a href="mailto:chikal.itg@email.com" class="btn-primary bg-blue-600 text-white py-3 px-8 rounded-full font-semibold shadow-xl hover:bg-blue-700 transition duration-300 text-lg">
                        Kirim Email Sekarang
                    </a>
                </div>
            </div>
        </section>
    </main>
    @endsection

    <!-- Script JavaScript untuk Navigasi Mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            // Fungsi untuk toggle menu
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Fungsi untuk menutup menu saat link diklik (di mobile)
            window.closeMenu = function() {
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    </script>
</div>
</body>
</html>
