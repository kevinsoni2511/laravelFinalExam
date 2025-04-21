<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SampleController;

// Redirect root to login page
Route::redirect('/', '/login'); 

// Auth Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('auth.login');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});

// Protected Routes (requires login)
Route::middleware(['auth'])->group(function () {
    Route::view('/Home', 'Home')->name('home');
    Route::view('/menu', 'menu')->name('menu');
    // Route::get('/index', [SampleController::class, 'index'])->name('index');
    Route::resource('Stud', SampleController::class);
});