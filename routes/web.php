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
    return view('auth.login-template');
});

Route::get('/readDataRataRata', [App\Http\Controllers\SensorController::class, 'dataRataRata'])->name('readDataRataRata');
Route::get('/listKebun', [App\Http\Controllers\KebunController::class, 'kebunOptions'])->name('listKebun');
Route::get('/listBlok/{id_kebun}', [App\Http\Controllers\KebunController::class, 'blokOptions'])->name('listBlok');
Route::get('/ambilDataSetiapSensor', [App\Http\Controllers\SensorController::class, 'ambilDataDetailSemuaSensor'])->name('ambilDataDetailSemuaSensor');

Route::get('/dataSuhuSensor/hari', [App\Http\Controllers\SensorController::class, 'dataSensorSuhuPerHari'])->name('dataSensorSuhuPerHari');
Route::get('/dataCahayaSensor/hari', [App\Http\Controllers\SensorController::class, 'dataSensorCahayaPerHari'])->name('dataSensorCahayaPerHari');
Route::get('/dataUdaraSensor/hari', [App\Http\Controllers\SensorController::class, 'dataSensorUdaraPerHari'])->name('dataSensorUdaraPerHari');
Route::get('/dataTanahSensor/hari', [App\Http\Controllers\SensorController::class, 'dataSensorTanahPerHari'])->name('dataSensorTanahPerHari');
Route::get('/dataAir/hari', [App\Http\Controllers\ModeController::class, 'dataSensorAirPerHari'])->name('dataSensorAirPerHari');
Route::get('/dataPupuk/hari', [App\Http\Controllers\ModeController::class, 'dataSensorPupukPerHari'])->name('dataSensorPupukPerHari');

Route::get('/dataSuhuSensor/notifikasi', [App\Http\Controllers\SensorController::class, 'dataNotifikasiSuhu'])->name('dataNotifikasiSuhu');
Route::get('/dataCahayaSensor/notifikasi', [App\Http\Controllers\SensorController::class, 'dataNotifikasiCahaya'])->name('dataNotifikasiCahaya');
Route::get('/dataUdaraSensor/notifikasi', [App\Http\Controllers\SensorController::class, 'dataNotifikasiUdara'])->name('dataNotifikasiUdara');
Route::get('/dataTanahSensor/notifikasi', [App\Http\Controllers\SensorController::class, 'dataNotifikasiTanah'])->name('dataNotifikasiTanah');
Route::get('/dataModeAir/notifikasi', [App\Http\Controllers\ModeController::class, 'ambilDataNotifikasiAir'])->name('ambilDataNotifikasiAir');
Route::get('/dataModePupuk/notifikasi', [App\Http\Controllers\ModeController::class, 'ambilDataNotifikasiPupuk'])->name('ambilDataNotifikasiPupuk');
Route::get('/dataSemuaSensor/notifikasi', [App\Http\Controllers\SensorController::class, 'ambilDataNotifikasiSensor'])->name('ambilDataNotifikasiSensor');

Route::get('/dataPupukSensor/lastUpdateTime', [App\Http\Controllers\ModeController::class, 'pupukLastUpdateTime'])->name('pupukLastUpdateTime');
Route::get('/dataairSensor/lastUpdateTime', [App\Http\Controllers\ModeController::class, 'airLastUpdateTime'])->name('airLastUpdateTime');
Route::get('/dataSuhuSensor/lastUpdateTime', [App\Http\Controllers\SensorController::class, 'suhuLastUpdateTime'])->name('suhuLastUpdateTime');
Route::get('/dataCahayaSensor/lastUpdateTime', [App\Http\Controllers\SensorController::class, 'cahayaLastUpdateTime'])->name('cahayaLastUpdateTime');
Route::get('/dataUdaraSensor/lastUpdateTime', [App\Http\Controllers\SensorController::class, 'udaraLastUpdateTime'])->name('udaraLastUpdateTime');
Route::get('/dataTanahSensor/lastUpdateTime', [App\Http\Controllers\SensorController::class, 'tanahLastUpdateTime'])->name('tanahLastUpdateTime');

Route::get('/ambildatakebun/status/berbahaya', [App\Http\Controllers\KebunController::class, 'ambilDataKebunBerbahaya'])->name("ambilDataKebunBerbahaya");
Route::get('/ambildatakebun/totalblok', [App\Http\Controllers\KebunController::class, 'ambilDataTotalBlok'])->name("ambilDataTotalBlok");

Route::get('/mode/check', [App\Http\Controllers\ModeController::class, 'checkMode'])->name('checkMode');
Route::get('/mode/air/on', [App\Http\Controllers\ModeController::class, 'setAirModeOn'])->name('setModeAirOn');
Route::get('/mode/air/off', [App\Http\Controllers\ModeController::class, 'setAirModeOff'])->name('setModeAirOff');
Route::get('/mode/pupuk/on', [App\Http\Controllers\ModeController::class, 'setPupukModeOn'])->name('setModePupukOn');
Route::get('/mode/pupuk/off', [App\Http\Controllers\ModeController::class, 'setPupukModeOff'])->name('setModePupukOff');

Route::get('/dataStatusKebun/{id}', [App\Http\Controllers\KebunController::class, 'ambilDataStatusKebun'])->name('ambilDataStatusKebun');

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dashboard/tabel-data', function() {
    return view('pages.admin.tabeldata.index');
})->name('tableView');

Route::get('dashboard/data-master', function() {
    return view('pages.admin.riwayatdata.index');
})->name('historyDataView');

Route::get('dashboard/notifikasi', [App\Http\Controllers\NotifikasiController::class, 'ambilDataNotifikasi'])->name('notificationView');

Route::get('dashboard/tabel-data/tabel-blok/{id}', function($id) {
    return view('pages.admin.tabelblok.index', ['id' => $id]);
})->name('blocksTableView');

Route::get('dashboard/tabel-data/tabel-blok/info-blok/{id_blok}', function($id) {
    return view('pages.admin.detailblok.index', ['id' => $id]);
})->name('specificBlockView');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
