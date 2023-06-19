<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KampusController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/create', [KampusController::class, 'index'])->name('tambah-kampus.create');
    Route::post('/store', [KampusController::class, 'store'])->name('tambah-kampus.store');
    Route::get('/edit/{id}', [KampusController::class, 'edit'])->name('tambah-kampus.edit');
    Route::put('/update/{id}', [KampusController::class, 'update'])->name('tambah-kampus.update');
    Route::delete('/destroy/{id}', [KampusController::class, 'destroy'])->name('tambah-kampus.destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
