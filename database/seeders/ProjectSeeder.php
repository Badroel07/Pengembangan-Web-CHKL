<?php

// database/seeders/ProjectSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project; // 👈 Import Model Project
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Opsional: Hapus data yang sudah ada sebelum menanam data baru (berguna untuk testing)
        // Project::truncate(); // atau
        DB::table('projects')->delete();

        $projects = [
            [
                'title' => 'Platform E-Commerce Sederhana',
                'description' => 'Pengembangan Full-Stack menggunakan MERN stack. Mencakup otentikasi, keranjang belanja, dan manajemen produk.',
                'image_url' => 'https://placehold.co/600x400/10b981/ffffff?text=E-Commerce+Mockup',
                'category' => 'Pengembangan Web',
                'technologies' => ['React', 'Node.js', 'MongoDB'],
                'detail_link' => 'proyek-detail-ecommerce.html',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chatbot Informasi Kampus ITG',
                'description' => 'Membuat chatbot yang dapat menjawab pertanyaan umum tentang IT Garut menggunakan Python dan model NLP dasar.',
                'image_url' => 'https://placehold.co/600x400/f59e0b/ffffff?text=AI+Chatbot+Project',
                'category' => 'Data & AI',
                'technologies' => ['Python', 'NLP', 'Flask API'],
                'detail_link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data proyek 3 sampai 6 di sini...
            [
                'title' => 'Visualisasi Algoritma A* Pathfinding',
                'description' => 'Implementasi dan visualisasi algoritma A* (A-Star) dalam C++ untuk mencari jalur terpendek di grid.',
                'image_url' => 'https://placehold.co/600x400/3b82f6/ffffff?text=Pathfinding+Visualizer',
                'category' => 'Core Programming',
                'technologies' => ['C++', 'Algoritma'],
                'detail_link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Portofolio Web Pribadi',
                'description' => 'Membangun situs web responsif ini dari nol menggunakan HTML, JavaScript, dan Tailwind CSS.',
                'image_url' => 'https://placehold.co/600x400/60a5fa/ffffff?text=Portofolio+Web+Project',
                'category' => 'Pengembangan Web',
                'technologies' => ['Tailwind CSS', 'HTML/JS'],
                'detail_link' => 'index.html',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Analisis Sentimen Twitter',
                'description' => 'Proyek semester untuk mengklasifikasikan sentimen pengguna Twitter terhadap produk tertentu menggunakan Pandas dan Scikit-learn.',
                'image_url' => 'https://placehold.co/600x400/ef4444/ffffff?text=Data+Analysis+Mockup',
                'category' => 'Data & AI',
                'technologies' => ['Python', 'Pandas', 'Scikit-learn'],
                'detail_link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sistem Manajemen Data Matakuliah',
                'description' => 'Membuat sistem CRUD sederhana berbasis PHP/Laravel untuk mengelola data mata kuliah dan dosen di lingkungan kampus.',
                'image_url' => 'https://placehold.co/600x400/f97316/ffffff?text=Database+System',
                'category' => 'Pengembangan Web',
                'technologies' => ['Laravel/PHP', 'MySQL'],
                'detail_link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Konversi array 'technologies' menjadi JSON string untuk penyimpanan
        $formattedProjects = array_map(function ($project) {
            $project['technologies'] = json_encode($project['technologies']);
            return $project;
        }, $projects);

        // Masukkan semua data ke tabel 'projects'
        DB::table('projects')->insert($formattedProjects);
    }


}