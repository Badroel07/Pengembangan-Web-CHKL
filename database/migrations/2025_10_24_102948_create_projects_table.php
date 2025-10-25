<?php

// database/migrations/2025_10_25_xxxxxx_create_projects_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            // Kolom untuk judul proyek
            $table->string('title', 255); 
            // Kolom untuk deskripsi
            $table->text('description'); 
            // Kolom untuk URL gambar (thumbnail)
            $table->string('image_url')->nullable(); 
            // Kolom untuk kategori (misalnya: Web Dev, Data & AI)
            $table->string('category', 50); 
            // Kolom untuk teknologi (simpan sebagai string JSON, atau buat tabel terpisah jika perlu)
            $table->json('technologies')->nullable(); 
            // Kolom untuk link detail proyek
            $table->string('detail_link')->nullable(); 
            
            $table->timestamps();
        });
    }

    /**
     * Kembalikan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
