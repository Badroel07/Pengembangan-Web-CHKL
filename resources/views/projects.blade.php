@extends('layouts.app')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Proyek | Chikal</title>
    @include('components.style')
</head>
@section('content')
<body class="text-gray-800">
    <main class="py-16 md:py-24 flex-grow bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            
            <h1 class="text-5xl lg:text-6xl font-extrabold text-center text-white mb-4">
                Portofolio <span class="text-gradient">Proyek</span> Saya
            </h1>
            <p class="text-xl text-gray-50 text-center max-w-3xl mx-auto mb-16">
                Kumpulan pekerjaan yang mencerminkan perjalanan dan keahlian saya di Teknik Informatika, dari pengembangan web hingga analisis data.
            </p>

            <!-- Area Filter/Kategori -->
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                
                {{-- Tentukan URL dasar untuk semua filter --}}
                @php
                    $categories = ['Semua Proyek', 'Tugas Kuliah'];
                    $activeCategory = $activeCategory ?? 'Semua Proyek'; // Default ke 'Semua Proyek' jika $activeCategory null
                @endphp

                {{-- Tombol Semua Proyek --}}
                @php
                    $isActive = ($activeCategory == null || $activeCategory == 'Semua Proyek');
                    $buttonClass = $isActive 
                        ? 'bg-blue-600 text-white shadow-md hover:bg-blue-700' 
                        : 'bg-white text-gray-700 border border-gray-300 hover:border-blue-500 hover:text-blue-600';
                @endphp
                <a href="{{ route('projects') }}" class="px-6 py-2 rounded-full font-semibold transition duration-300 {{ $buttonClass }}">
                    Semua Proyek
                </a>

                {{-- Tombol Filter Lainnya --}}
                @foreach ($categories as $category)
                    @if ($category != 'Semua Proyek')
                        @php
                            $isActive = ($activeCategory == $category);
                            $buttonClass = $isActive 
                                ? 'bg-blue-600 text-white shadow-md hover:bg-blue-700' 
                                : 'bg-white text-gray-700 border border-gray-300 hover:border-blue-500 hover:text-blue-600';
                        @endphp

                        <a href="{{ route('projects', ['category' => $category]) }}" class="px-6 py-2 rounded-full font-semibold transition duration-300 {{ $buttonClass }}">
                            {{ $category }}
                        </a>
                    @endif
                @endforeach
            </div>

            <!-- Daftar Proyek (Grid) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        
                    {{-- Ulangi (Loop) data proyek di sini --}}
                        @forelse ($projects as $project)
                            <a href="{{ $project->detail_link ?? '#' }}" class="project-card block bg-white rounded-xl overflow-hidden shadow-xl border border-gray-100 transition-shadow duration-300 hover:shadow-2xl">
                                <img src="{{ $project->image_url }}" alt="Proyek {{ $project->title }}" class="w-full h-56 object-cover">
                                <div class="p-6">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $project->title }}</h3>
                                    <p class="text-gray-600 text-base mb-4 line-clamp-2">{{ $project->description }}</p>
                                    <div class="flex flex-wrap gap-2">
                                        {{-- Ulangi (Loop) teknologi --}}
                                        @if (is_array($project->technologies))
                                            @foreach ($project->technologies as $tech)
                                                <span class="inline-block bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">{{ $tech }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </a>
                        @empty
                            {{-- TULISAN KETIKA $projects KOSONG --}}
                            <div class="md:col-span-2 lg:col-span-3 text-center py-10 bg-gray-50 rounded-xl border border-gray-200">
                                <p class="text-xl text-gray-500 font-bold">
                                    No Project Yet
                                </p>
                                {{-- Tambahkan keterangan jika ini adalah hasil filter --}}
                                @if (!($activeCategory == null || $activeCategory == 'Semua Proyek'))
                                    <p class="text-gray-400 mt-1">There are no projects for <span class="font-bold">{{ $activeCategory }}</span> category yet</p>
                                @else
                                    <p class="text-gray-400 mt-1">Please try again later or check another category!</p>
                                @endif
                            </div>
                        @endforelse
                        {{-- Akhir Loop --}}

                </div>

        </div>
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

</body>
</html>
