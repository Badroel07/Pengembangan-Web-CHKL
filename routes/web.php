<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ProjectCrudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Rute Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//Rute Projects
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

//Rute About Me
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Admin Routes Group
Route::prefix('admin')->group(function () {
    Route::resource('projects', ProjectCrudController::class); 
});

Route::get('/portofolio', [ProjectController::class, 'index'])->name('portfolio.index');