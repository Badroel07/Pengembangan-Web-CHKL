@extends('layouts.app') 

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Tambah Proyek Baru</h1>
    
    <div class="bg-white p-6 rounded-lg shadow-xl max-w-4xl mx-auto">
        
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf 
            
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Judul Proyek</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring-blue-500" required></textarea>
            </div>
            
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category" id="category" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <option value="Tugas Kuliah">Tugas Kuliah</option>
                    <option value="Data & AI">Data & AI</option>
                    <option value="Core Programming">Core Programming</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="technologies" class="block text-sm font-medium text-gray-700">Teknologi (Pisahkan dengan koma, misal: React, Node.js, Tailwind)</label>
                <input type="text" name="technologies_input" id="technologies_input" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div>
                    <label for="image_url" class="block text-sm font-medium text-gray-700">URL Gambar (Placeholder)</label>
                    <input type="url" name="image_url" id="image_url" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
                <div>
                    <label for="detail_link" class="block text-sm font-medium text-gray-700">Link Detail Proyek</label>
                    <input type="url" name="detail_link" id="detail_link" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
            </div>

            <div class="mt-8">
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg font-semibold shadow-md hover:bg-blue-700 transition duration-300">
                    Simpan Proyek
                </button>
                <a href="{{ route('projects.index') }}" class="ml-4 text-gray-600 hover:text-gray-800">Kembali</a>
            </div>
        </form>
        
    </div>
</div>
@endsection