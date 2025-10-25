<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 proyek terbaru. 
        // diurutkan berdasarkan 'created_at' secara descending (terbaru dulu)
        $latestProjects = Project::orderBy('created_at', 'desc')->take(3)->get();
        
        return view('home', [ // Asumsi nama view Anda adalah 'home.blade.php'
            'latestProjects' => $latestProjects
        ]);    
    }
}
