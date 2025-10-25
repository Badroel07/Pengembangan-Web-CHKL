<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'category',
        'technologies',
        'detail_link',
    ];

    // Casting tipe data: memastikan 'technologies' diubah dari JSON string (di DB) menjadi array PHP saat diakses.
    protected $casts = [
        'technologies' => 'array',
    ];
}   
