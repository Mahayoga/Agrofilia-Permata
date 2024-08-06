<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/readDataRataRata', [App\Http\Controllers\SensorController::class, 'dataRataRata'])->name('readDataRataRata');

Route::get('/dashboard', function () {
    return view('dashboard-template');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dashboard/tabel-data', function() {
    return view('pages/tables');
})->name('tableView');

Route::get('dashboard/tabel-data/tabel-blok', function() {
    return view('pages/tabel-blok');
})->name('blocksTableView');

Route::get('dashboard/tabel-data/tabel-blok/info-blok', function() {
    return view('pages/info-kebun');
})->name('specificBlockView');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
