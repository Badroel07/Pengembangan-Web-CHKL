<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
        {
            // 1. Ambil kategori dari URL Query String (misal: /portofolio?category=Tugas Kuliah)
            $filterCategory = $request->get('category'); // Hasilnya: 'Tugas Kuliah' atau null

            // 2. Query Data Proyek
            $query = Project::query(); // Mulai query

            if ($filterCategory) {
                // Jika ada filter, tambahkan klausa WHERE
                $query->where('category', $filterCategory);
            }
            
            // 3. Ambil data (semua jika tidak ada filter, atau hanya yang sesuai filter)
            $projects = $query->get();

            // 4. Kirim data dan kategori aktif ke View
            return view('projects', [
                'projects' => $projects,
                'activeCategory' => $filterCategory // Kirim kategori yang sedang aktif
            ]);
        }
}
