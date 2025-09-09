<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Dashboard Route (contoh route dengan middleware auth)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// API Routes (contoh)
Route::prefix('api')->group(function () {
    Route::get('/users', function () {
        return response()->json([
            'message' => 'Success',
            'data' => [
                ['id' => 1, 'name' => 'John Doe'],
                ['id' => 2, 'name' => 'Jane Smith']
            ]
        ]);
    });
});