<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DataSensor;
use App\Http\Controllers\Api\SettingsSensor;
use App\Http\Controllers\SensorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/control-settings', [SettingsSensor::class, 'updateControlSettings']);
Route::get('/control-settings', [SettingsSensor::class, 'getControlSettings']);
Route::get('/kontrol-sensor', [SettingsSensor::class, 'getSensorData']);

//Control Switch
Route::post('/updateBuka', [SettingsSensor::class, 'updateBuka']);
Route::post('/updateTutup', [SettingsSensor::class, 'updateTutup']);

//Get Sensor Data
Route::post('/sensor-data', [DataSensor::class, 'getAverageAndHistory']);

Route::post('/simpandata', [SensorController::class, 'store']);