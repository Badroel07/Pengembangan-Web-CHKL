<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
        public function index()
    {

        // Kirim data proyek ke View 'portfolio'
        return view('about'); 
    }
}
