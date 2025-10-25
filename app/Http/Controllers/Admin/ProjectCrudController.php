<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Data Input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:50',
            'technologies_input' => 'nullable|string', // Ambil input string
            'image_url' => 'nullable|url|max:255',
            'detail_link' => 'nullable|url|max:255',
        ]);
        
        // 2. Memproses Technologies (dari string koma-separated menjadi JSON array)
        if (!empty($validatedData['technologies_input'])) {
            // Pisahkan string berdasarkan koma, trim whitespace, dan hapus yang kosong
            $techs = array_map('trim', explode(',', $validatedData['technologies_input']));
            $techs = array_filter($techs); // Hapus string kosong
        } else {
            $techs = [];
        }

        // 3. Menyiapkan Data untuk Model
        $projectData = [
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'category' => $validatedData['category'],
            'image_url' => $validatedData['image_url'],
            'detail_link' => $validatedData['detail_link'],
            'technologies' => $techs, // Model Project akan meng-cast ini ke JSON secara otomatis (karena Anda sudah set $casts di Model)
        ];

        // 4. Menyimpan ke Database
        Project::create($projectData);

        // 5. Redirect ke halaman daftar proyek admin
        return redirect()->route('projects.index')
                         ->with('success', 'Proyek berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project) // Menggunakan Route Model Binding
    {
        // Data proyek sudah otomatis dimuat oleh Laravel
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        // 1. Validasi Data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:50',
            'technologies_input' => 'nullable|string', 
            'image_url' => 'nullable|url|max:255',
            'detail_link' => 'nullable|url|max:255',
        ]);
        
        // 2. Memproses Technologies (dari string koma-separated menjadi array)
        if (!empty($validatedData['technologies_input'])) {
            $techs = array_map('trim', explode(',', $validatedData['technologies_input']));
            $techs = array_filter($techs);
        } else {
            $techs = [];
        }

        // 3. Menyiapkan Data untuk Update
        $projectData = $validatedData;
        unset($projectData['technologies_input']); // Hapus input mentah
        $projectData['technologies'] = $techs; 
        
        // 4. Update data proyek
        $project->update($projectData);

        return redirect()->route('projects.index')
                         ->with('success', 'Proyek berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
                         ->with('success', 'Proyek berhasil dihapus!');
    }
}
