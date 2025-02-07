<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
