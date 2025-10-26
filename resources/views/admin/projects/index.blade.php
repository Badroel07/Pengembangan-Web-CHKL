@extends('layouts.app') 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    @include('components.style')
</head>
@section('content')
<body>
    <div class="container mx-auto px-4 py-8 flex-grow">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Project Management</h1>
    
    <a href="{{ route('projects.create') }}" class="bg-green-600 text-white py-2 px-4 rounded-lg font-semibold shadow-md hover:bg-green-700 transition duration-300 mb-6 inline-block">
        + Tambah Proyek Baru
    </a>

    <div class="bg-white p-6 rounded-lg shadow-xl overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($projects as $project)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $project->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $project->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $project->category }}</td>
                    
                    {{-- DESKRIPSI: Dibuat wrap dan panjang penuh --}}
                    {{-- Hapus 'whitespace-nowrap' dan Str::limit(). Tambahkan style. --}}
                    <td class="px-6 py-4 text-sm text-gray-500" style="max-width: 250px; overflow-wrap: break-word;">
                        {{ $project->description }}
                    </td>
                    
                    {{-- URL GAMBAR: Dibuat wrap dan panjang penuh --}}
                    {{-- Hapus 'whitespace-nowrap' dan Str::limit(). Tambahkan style. --}}
                    <td class="px-6 py-4 text-sm text-gray-500" style="max-width: 150px; overflow-wrap: break-word;">
                        {{ $project->image_url }}
                    </td>
                    
                    {{-- Teknologi tetap bisa wrap jika isi arraynya banyak --}}
                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{ implode(', ', $project->technologies ?? []) }}
                    </td>
                    
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center">
                        <a href="{{ route('projects.edit', $project) }}" class="text-indigo-600 hover:text-indigo-900 mr-4 font-semibold">Edit</a>
                        <button 
                            onclick="openDeleteModal('{{ route('projects.destroy', $project) }}', '{{ $project->title }}')" 
                            class="text-red-600 hover:text-red-900 font-semibold bg-transparent border-none p-0 cursor-pointer transition duration-150"
                        >
                            Hapus
                        </button>
                    </td>
                </tr>
                @endforeach
                </tbody>
        </table>
    </div>
</div>
</body>
@endsection
</html>
