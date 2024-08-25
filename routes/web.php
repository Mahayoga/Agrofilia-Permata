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
Route::get('/listKebun', [App\Http\Controllers\KebunController::class, 'kebunOptions'])->name('listKebun');
Route::get('/listBlok/{id_kebun}', [App\Http\Controllers\KebunController::class, 'blokOptions'])->name('listBlok');

Route::get('/dataSuhuSensor/hari', [App\Http\Controllers\SensorController::class, 'dataSensorSuhuPerHari'])->name('dataSensorSuhuPerHari');
Route::get('/dataCahayaSensor/hari', [App\Http\Controllers\SensorController::class, 'dataSensorCahayaPerHari'])->name('dataSensorCahayaPerHari');
Route::get('/dataUdaraSensor/hari', [App\Http\Controllers\SensorController::class, 'dataSensorUdaraPerHari'])->name('dataSensorUdaraPerHari');
Route::get('/dataTanahSensor/hari', [App\Http\Controllers\SensorController::class, 'dataSensorTanahPerHari'])->name('dataSensorTanahPerHari');
Route::get('/dataAir/hari', [App\Http\Controllers\ModeController::class, 'dataSensorAirPerHari'])->name('dataSensorAirPerHari');
Route::get('/dataPupuk/hari', [App\Http\Controllers\ModeController::class, 'dataSensorPupukPerHari'])->name('dataSensorPupukPerHari');

Route::get('/dataSuhuSensor/notifikasi', [App\Http\Controllers\SensorController::class, 'dataNotifikasiSuhu'])->name('dataNotifikasiSuhu');
Route::get('/dataCahayaSensor/notifikasi', [App\Http\Controllers\SensorController::class, 'dataNotifikasiCahaya'])->name('dataNotifikasiCahaya');
Route::get('/dataUdaraSensor/notifikasi', [App\Http\Controllers\SensorController::class, 'dataNotifikasiUdara'])->name('dataNotifikasiUdara');

Route::get('/mode/check', [App\Http\Controllers\ModeController::class, 'checkMode'])->name('checkMode');
Route::get('/mode/air/on', [App\Http\Controllers\ModeController::class, 'setAirModeOn'])->name('setModeAirOn');
Route::get('/mode/air/off', [App\Http\Controllers\ModeController::class, 'setAirModeOff'])->name('setModeAirOff');
Route::get('/mode/pupuk/on', [App\Http\Controllers\ModeController::class, 'setPupukModeOn'])->name('setModePupukOn');
Route::get('/mode/pupuk/off', [App\Http\Controllers\ModeController::class, 'setPupukModeOff'])->name('setModePupukOff');

Route::get('/dataStatusKebun/{id}', [App\Http\Controllers\KebunController::class, 'ambilDataStatusKebun'])->name('ambilDataStatusKebun');

Route::get('/dashboard', function () {
    return view('dashboard-template');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dashboard/tabel-data', function() {
    return view('pages/tables');
})->name('tableView');

Route::get('dashboard/data-master', function() {
    return view('pages/data-master');
})->name('historyDataView');

Route::get('dashboard/notifikasi', function() {
    return view('pages/notifications');
})->name('notificationView');

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
