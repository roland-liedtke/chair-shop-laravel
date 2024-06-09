<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// =============== HOME =================== //
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/shop', [ProductController::class, 'showAll']);


// ================ CART =================== //
Route::middleware(['auth'])->group(function () {
    Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
});


// ================ DASHBOARD ============== //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ================ PROFILE =============== //
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ================= ADMIN ================ //
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');

    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');

    Route::post('/admin/products/save', [ProductController::class, 'save'])->name('admin/products/save');

    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');

    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');

    Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin/products/delete');
});

require __DIR__.'/auth.php';
