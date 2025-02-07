<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'])->name('home.index');


Route::get('/dashboard', function () {
    return view('dashboard/index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('product_list',[ProductController::class,'index'])->name('product.index');
    Route::get('product_add',[ProductController::class,'create'])->name('product.add');
    Route::post('product_add',[ProductController::class,'store'])->name('product.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
