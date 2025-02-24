<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AuthController;
use App\Models\Category;
use App\Models\Product;

// Chuyển hướng trang chủ về trang đăng nhập
Route::redirect('/', '/login');

// Routes xác thực
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Route đăng xuất
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Route dashboard và products (yêu cầu đăng nhập)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $products = Product::with('category')->get();
        return view('dashboard', compact('products'));
    })->name('dashboard');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
});
