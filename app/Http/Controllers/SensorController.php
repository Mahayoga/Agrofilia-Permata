<?php

namespace App\Http\Controllers;

use App\Models\SensorModel;
// use Twilio\Rest\Client;
// use App\Models\MSensordua;
// use App\Models\MSensortiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class SensorController extends Controller {

    public function dataDashboard() {
        $nilaiSensor = SensorModel::orderBy('updated_at', 'desc')->latest()->first();

        return response()->json([
            'suhu' => $nilaiSensor->suhu,
            'kelembaban' => $nilaiSensor->kelembaban,
            'updated_at' => $nilaiSensor->updated_at
        ]);
    }

    public function dataRataRata() {
        $nilaiSensor = SensorModel::orderBy('updated_at', 'desc')->latest()->first();

        return response()->json([
            'suhu' => $nilaiSensor->suhu,
            'kelembaban' => $nilaiSensor->kelembaban,
            'cahaya' => $nilaiSensor->cahaya,
            'kelembabanTanah' => $nilaiSensor->kelembabantanah,
            'updated_at' => $nilaiSensor->updated_at
        ]);
    }

}