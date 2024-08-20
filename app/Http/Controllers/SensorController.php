<?php

namespace App\Http\Controllers;

use App\Models\SensorModel;
use App\Models\IndividualBlockSensor;
use App\Models\KebunModel;
// use Twilio\Rest\Client;
// use App\Models\MSensordua;
// use App\Models\MSensortiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


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

    public function kebunOptions() {
        $daftarKebun = KebunModel::select()->get();
        return response()->json([
            "daftar_kebun" => $daftarKebun
        ]);
    }

    public function testQuery() {
        /* 
            SELECT *, COUNT(id) FROM tb_sensor WHERE esp_id = 'soil1_data' 
            GROUP BY (SELECT SUBSTRING(created_at, 1, 10));

            // Prints October 3, 1975 was on a Friday
            echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";
            2024-08-17 23:12:08
        */ 
        $totalJumlahSensor = IndividualBlockSensor::select(DB::raw("COUNT(id) AS jumlah"))
            ->where("esp_id", "soil1_data")
            ->groupBy(DB::raw("(SELECT SUBSTRING(created_at, 1, 10))"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahSensor = IndividualBlockSensor::select(DB::raw("created_at"))
            ->where("esp_id", "soil1_data")
            ->groupBy(DB::raw("created_at"))
            ->limit("7")
            ->get();

        $jumlahID = [0, 0, 0, 0, 0, 0, 0];
        $hari = [0, 0, 0, 0, 0, 0, 0];
        for($i = 0; $i < count($totalJumlahSensor); $i++) {
            $jumlahID[$i] = $totalJumlahSensor[$i]->jumlah;

            $arrTemp = explode("-", $hariPerTotalJumlahSensor[$i]->created_at);
            $dateArr = explode(" ", $arrTemp[2]);
            $hari[$i] = date("l", mktime(0, 0, 0, $arrTemp[1], $dateArr[0], $arrTemp[0]));
        }
        return (response()->json([
            'hariID1' => ($hari[0] == 0) ? 0 : $hari[0],
            'hariID2' => ($hari[1] == 0) ? 0 : $hari[1],
            'hariID3' => ($hari[2] == 0) ? 0 : $hari[2],
            'hariID4' => ($hari[3] == 0) ? 0 : $hari[3],
            'hariID5' => ($hari[4] == 0) ? 0 : $hari[4],
            'hariID6' => ($hari[5] == 0) ? 0 : $hari[5],
            'hariID7' => ($hari[6] == 0) ? 0 : $hari[6],

            'countID1' => ($jumlahID[0] == 0) ? 0 : $jumlahID[0],
            'countID2' => ($jumlahID[1] == 0) ? 0 : $jumlahID[1],
            'countID3' => ($jumlahID[2] == 0) ? 0 : $jumlahID[2],
            'countID4' => ($jumlahID[3] == 0) ? 0 : $jumlahID[3],
            'countID5' => ($jumlahID[4] == 0) ? 0 : $jumlahID[4],
            'countID6' => ($jumlahID[5] == 0) ? 0 : $jumlahID[5],
            'countID7' => ($jumlahID[6] == 0) ? 0 : $jumlahID[6]
        ]));
    }

}