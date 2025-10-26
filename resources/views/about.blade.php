@extends('layouts.app')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya | Chikal, Teknik Informatika</title>
    @include('components.style')
</head>
@section('content')
<body class="text-gray-800">

    <main class="bg-gray-900">
<!-- Bagian Hero/Intro -->
<section id="intro" class="py-16 md:py-24 lg:py-32 relative overflow-hidden">
  <!-- Latar belakang abstrak -->
  <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-gray-50 opacity-50 -z-10"></div>

  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <!-- Grid 2 kolom, teks di kiri dan foto di kanan di layar besar -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      
      <!-- Kolom kiri: teks -->
      <div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white mb-4 leading-tight">
          Mengenal Lebih Dekat <span class="text-blue-600 leading-tight">Chikal</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-50 mb-6 text-justify">
          Mahasiswa semester 5 Teknik Informatika, Institut Teknologi Garut, dengan fokus pada pengembangan 
          <em>software</em> Full-Stack. Misi saya adalah membangun solusi digital yang efisien dan memberikan dampak nyata.
        </p>
        <!-- Tombol "Hubungi Saya" di sini telah dihapus, sesuai permintaan. -->
      </div>

      <!-- Kolom kanan: foto -->
      <div class="flex justify-center lg:justify-end">
        <img src="{{ asset('img/about/foto_chikal.jpg') }}"
             alt="Foto Profil Chikal"
             class="w-full max-w-sm h-auto rounded-xl shadow-2xl ring-4 ring-blue-200 object-cover">
      </div>

    </div>
  </div>
</section>



        <!-- Bagian Tentang Saya (Detail) - Konten ini tetap bisa menggunakan layout 2 kolom yang sudah ada untuk detail -->
        <section id="detail" class="py-16 md:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                
                <h2 class="text-3xl font-bold text-center text-white mb-12 border-b-4 border-blue-500 inline-block pb-1">Perjalanan & Filosofi Saya</h2>
                
                <div class="text-lg text-white leading-relaxed grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-16">
                    
                    <div class="lg:col-span-1">
                        <h3 class="text-2xl font-semibold text-gray-50 mb-3 flex items-center">
                            <span class="text-blue-600 mr-2">&#127891;</span> Latar Belakang Pendidikan
                        </h3>
                        <div class="text-justify leading-relaxed">
                        <p class="mb-4">
                            Saya **Chikal**, seorang mahasiswa semester 5 di **Teknik Informatika, Institut Teknologi Garut (IT Garut)**. Sejak memulai perkuliahan, saya telah mengembangkan minat yang kuat di bidang pengembangan *software* dan pemecahan masalah.
                        </p>
                        <p>
                            Kurikulum yang saya ikuti memberi fondasi yang kuat di bidang algoritma, struktur data, dan sistem basis data, yang menjadi bekal utama saya dalam merancang solusi digital yang efisien.
                        </p>
                        </div>
                    </div>

                    <div class="lg:col-span-1">
                        <h3 class="text-2xl font-semibold text-white mb-3 flex items-center">
                            <span class="text-blue-600 mr-2">&#128187;</span> Fokus Profesional
                        </h3>
                        <div class="text-justify leading-relaxed">
                        <p class="mb-4">
                            Fokus utama saya saat ini adalah menjadi Pengembang Web *Full-Stack* yang handal. Saya aktif mempelajari teknologi terbaru di ranah *front-end* seperti React, Next.js, dan Tailwind CSS, untuk menciptakan pengalaman pengguna yang mulus.
                        </p>
                        <p>
                            Di sisi *back-end*, saya mendalami penggunaan Python (dengan framework Django/Flask) dan NodeJS (Express) untuk membangun API yang skalabel dan aman.
                        </p>
                        </div>
                    </div>

                    <div class="lg:col-span-1">
                        <h3 class="text-2xl font-semibold text-white mb-3 flex items-center mt-6 lg:mt-0">
                            <span class="text-blue-600 mr-2">&#128161;</span> Visi & Antusiasme
                        </h3>
                        <div class="text-justify leading-relaxed">
                        <p class="mb-4">
                            Saya selalu antusias dalam mengambil tantangan baru, terutama proyek-proyek yang melibatkan pemecahan masalah kompleks dan pembelajaran mesin. Saya percaya bahwa teknologi harus digunakan untuk memberikan dampak positif.
                        </p>
                        <p>
                            Tujuan saya adalah terus belajar, berkolaborasi dalam tim yang dinamis, dan berkontribusi pada inovasi teknologi yang bermanfaat bagi masyarakat.
                        </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Bagian Keahlian (Skills) - Dibiarkan sama -->
        <section id="keahlian" class="py-16 md:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-white mb-12 border-b-4 border-blue-500 inline-block pb-1">Keahlian Teknis</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-5xl mx-auto">
                    
                    <!-- Card 1: HTML & CSS -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-red-500 hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-red-500 text-center">&#128187;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-1">HTML & CSS</h3>
                        <p class="text-sm text-gray-500 text-center">Struktur dan Styling Dasar.</p>
                    </div>

                    <!-- Card 2: Tailwind CSS -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-teal-500 hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-teal-500 text-center">&#9981;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-1">Tailwind CSS</h3>
                        <p class="text-sm text-gray-500 text-center">Desain Cepat & Responsif.</p>
                    </div>

                    <!-- Card 3: JavaScript -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-yellow-500 hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-yellow-500 text-center">&#9733;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-1">JavaScript</h3>
                        <p class="text-sm text-gray-500 text-center">Logika Web Dinamis.</p>
                    </div>

                    <!-- Card 4: Python -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-blue-600 hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-blue-600 text-center">&#128013;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-1">Python</h3>
                        <p class="text-sm text-gray-500 text-center">Scripting & Data Science.</p>
                    </div>

                    <!-- Card 5: React.js -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-sky-500 hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-sky-500 text-center">&#9883;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-1">React.js</h3>
                        <p class="text-sm text-gray-500 text-center">Pembangunan UI Modern.</p>
                    </div>

                    <!-- Card 6: Node.js -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-green-500 hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-green-500 text-center">&#128293;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-1">Node.js</h3>
                        <p class="text-sm text-gray-500 text-center">Lingkungan Back-end.</p>
                    </div>
                    
                    <!-- Card 7: PostgreSQL -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-indigo-700 hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-indigo-700 text-center">&#128421;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-1">PostgreSQL</h3>
                        <p class="text-sm text-gray-500 text-center">Basis Data Relasional.</p>
                    </div>

                    <!-- Card 8: Git & Github -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-gray-700 hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-gray-700 text-center">&#128190;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-1">Git & Github</h3>
                        <p class="text-sm text-gray-500 text-center">Kontrol Versi Kolaboratif.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Bagian Call to Action Ringkas - Dibiarkan sama -->
        <section id="ajakan" class="py-12 bg-blue-600">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h3 class="text-2xl font-bold text-white mb-4">Tertarik untuk Berkolaborasi?</h3>
                <p class="text-lg text-blue-100 mb-6 max-w-2xl mx-auto">
                    Lihat proyek-proyek saya atau hubungi saya langsung untuk mendiskusikan peluang.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="/projects" class="btn-primary bg-white text-blue-600 py-3 px-8 rounded-full font-semibold shadow-lg hover:bg-gray-100 transition duration-300 text-center">
                        View Project
                    </a>
                    <a href="mailto:muhamadchikal12@gmail.com" class="btn-primary border border-white text-white py-3 px-8 rounded-full font-semibold hover:bg-blue-700 transition duration-300 text-center">
                        Contact Me
                    </a>
                </div>
            </div>
        </section>

    </main>
    @endsection

</body>
</html>
