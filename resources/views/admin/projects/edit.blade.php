@extends('layouts.app') 

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit Proyek: {{ $project->title }}</h1>
    
    <div class="bg-white p-6 rounded-lg shadow-xl max-w-4xl mx-auto">
        
        <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf 
            @method('PUT') <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Judul Proyek</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring-blue-500" value="{{ old('title', $project->title) }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring-blue-500" required>{{ old('description', $project->description) }}</textarea>
            </div>
            
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category" id="category" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    @php $currentCategory = old('category', $project->category); @endphp
                    <option value="Tugas Kuliah" @selected($currentCategory == 'Tugas Kuliah')>Tugas Kuliah</option>
                    <option value="Data & AI" @selected($currentCategory == 'Data & AI')>Data & AI</option>
                    <option value="Core Programming" @selected($currentCategory == 'Core Programming')>Core Programming</option>
                </select>
            </div>

            <div class="mb-4">
                @php $techsString = is_array($project->technologies) ? implode(', ', $project->technologies) : ''; @endphp
                
                <label for="technologies_input" class="block text-sm font-medium text-gray-700">Teknologi (Pisahkan dengan koma)</label>
                <input type="text" name="technologies_input" id="technologies_input" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" 
                    value="{{ old('technologies_input', $techsString) }}">
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div>
                    <label for="image_url" class="block text-sm font-medium text-gray-700">URL Gambar</label>
                    <input type="url" name="image_url" id="image_url" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ old('image_url', $project->image_url) }}">
                </div>
                <div>
                    <label for="detail_link" class="block text-sm font-medium text-gray-700">Link Detail Proyek</label>
                    <input type="url" name="detail_link" id="detail_link" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="{{ old('detail_link', $project->detail_link) }}">
                </div>
            </div>

            <div class="mt-8">
                <button type="submit" class="bg-indigo-600 text-white py-2 px-6 rounded-lg font-semibold shadow-md hover:bg-indigo-700 transition duration-300">
                    Perbarui Proyek
                </button>
                <a href="{{ route('projects.index') }}" class="ml-4 text-gray-600 hover:text-gray-800">Batal</a>
            </div>
        </form>
        
    </div>
</div>
@endsection