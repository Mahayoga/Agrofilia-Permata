<?php

namespace App\Http\Controllers;

use App\Models\SensorModel;
use App\Models\IndividualBlockSensor;
use App\Models\KebunModel;
use App\Models\NotifikasiSensorModel;
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

    public function dataSensorSuhuPerHari() {
        $totalJumlahSensor = IndividualBlockSensor::select(DB::raw("AVG(suhu) AS jumlah"))
            ->where("esp_id", "soil1_data")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahSensor = IndividualBlockSensor::select(DB::raw("created_at"))
            ->where("esp_id", "soil1_data")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $jumlahID = [0, 0, 0, 0, 0, 0, 0];
        $hari = [0, 0, 0, 0, 0, 0, 0];
        for($i = 0; $i < count($totalJumlahSensor); $i++) {
            $arrTemp = explode("-", $hariPerTotalJumlahSensor[$i]->created_at);
            $dateArr = explode(" ", $arrTemp[2]);
            
            switch(date("l", mktime(0, 0, 0, $arrTemp[1], $dateArr[0], $arrTemp[0]))) {
                case "Monday":
                    $hari[0] = "Senin";
                    $jumlahID[0] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Tuesday":
                    $hari[1] = "Selasa";
                    $jumlahID[1] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Wednesday":
                    $hari[2] = "Rabu";
                    $jumlahID[2] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Thursday":
                    $hari[3] = "Kamis";
                    $jumlahID[3] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Friday":
                    $hari[4] = "Jumat";
                    $jumlahID[4] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Saturday":
                    $hari[5] = "Sabtu";
                    $jumlahID[5] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Sunday":
                    $hari[6] = "Minggu";
                    $jumlahID[6] = $totalJumlahSensor[$i]->jumlah;
                break;
            }
        }
        return response()->json([
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
            'countID7' => ($jumlahID[6] == 0) ? 0 : $jumlahID[6],
        ]);
    }

    public function dataSensorCahayaPerHari() {
        $totalJumlahSensor = IndividualBlockSensor::select(DB::raw("AVG(cahaya) AS jumlah"))
            ->where("esp_id", "soil2_data")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahSensor = IndividualBlockSensor::select(DB::raw("created_at"))
            ->where("esp_id", "soil2_data")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $jumlahID = [0, 0, 0, 0, 0, 0, 0];
        $hari = [0, 0, 0, 0, 0, 0, 0];
        for($i = 0; $i < count($totalJumlahSensor); $i++) {
            $arrTemp = explode("-", $hariPerTotalJumlahSensor[$i]->created_at);
            $dateArr = explode(" ", $arrTemp[2]);
            
            switch(date("l", mktime(0, 0, 0, $arrTemp[1], $dateArr[0], $arrTemp[0]))) {
                case "Monday":
                    $hari[0] = "Senin";
                    $jumlahID[0] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Tuesday":
                    $hari[1] = "Selasa";
                    $jumlahID[1] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Wednesday":
                    $hari[2] = "Rabu";
                    $jumlahID[2] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Thursday":
                    $hari[3] = "Kamis";
                    $jumlahID[3] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Friday":
                    $hari[4] = "Jumat";
                    $jumlahID[4] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Saturday":
                    $hari[5] = "Sabtu";
                    $jumlahID[5] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Sunday":
                    $hari[6] = "Minggu";
                    $jumlahID[6] = $totalJumlahSensor[$i]->jumlah;
                break;
            }
        }
        return response()->json([
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
        ]);
    }

    public function dataSensorUdaraPerHari() {
        $totalJumlahSensor = IndividualBlockSensor::select(DB::raw("AVG(kelembaban) AS jumlah"))
            ->where("esp_id", "soil1_data")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahSensor = IndividualBlockSensor::select(DB::raw("created_at"))
            ->where("esp_id", "soil1_data")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $jumlahID = [0, 0, 0, 0, 0, 0, 0];
        $hari = [0, 0, 0, 0, 0, 0, 0];
        for($i = 0; $i < count($totalJumlahSensor); $i++) {
            $arrTemp = explode("-", $hariPerTotalJumlahSensor[$i]->created_at);
            $dateArr = explode(" ", $arrTemp[2]);
            
            switch(date("l", mktime(0, 0, 0, $arrTemp[1], $dateArr[0], $arrTemp[0]))) {
                case "Monday":
                    $hari[0] = "Senin";
                    $jumlahID[0] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Tuesday":
                    $hari[1] = "Selasa";
                    $jumlahID[1] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Wednesday":
                    $hari[2] = "Rabu";
                    $jumlahID[2] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Thursday":
                    $hari[3] = "Kamis";
                    $jumlahID[3] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Friday":
                    $hari[4] = "Jumat";
                    $jumlahID[4] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Saturday":
                    $hari[5] = "Sabtu";
                    $jumlahID[5] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Sunday":
                    $hari[6] = "Minggu";
                    $jumlahID[6] = $totalJumlahSensor[$i]->jumlah;
                break;
            }
        }
        return response()->json([
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
        ]);
    }

    public function dataSensorTanahPerHari() {
        $totalJumlahSensor = IndividualBlockSensor::select(DB::raw("AVG(kelembabantanah) AS jumlah"))
            // ->where("esp_id", "soil1_data")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahSensor = IndividualBlockSensor::select(DB::raw("created_at"))
            // ->where("esp_id", "soil1_data")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $jumlahID = [0, 0, 0, 0, 0, 0, 0];
        $hari = [0, 0, 0, 0, 0, 0, 0];
        for($i = 0; $i < count($totalJumlahSensor); $i++) {
            $arrTemp = explode("-", $hariPerTotalJumlahSensor[$i]->created_at);
            $dateArr = explode(" ", $arrTemp[2]);
            
            switch(date("l", mktime(0, 0, 0, $arrTemp[1], $dateArr[0], $arrTemp[0]))) {
                case "Monday":
                    $hari[0] = "Senin";
                    $jumlahID[0] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Tuesday":
                    $hari[1] = "Selasa";
                    $jumlahID[1] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Wednesday":
                    $hari[2] = "Rabu";
                    $jumlahID[2] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Thursday":
                    $hari[3] = "Kamis";
                    $jumlahID[3] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Friday":
                    $hari[4] = "Jumat";
                    $jumlahID[4] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Saturday":
                    $hari[5] = "Sabtu";
                    $jumlahID[5] = $totalJumlahSensor[$i]->jumlah;
                break;
                case "Sunday":
                    $hari[6] = "Minggu";
                    $jumlahID[6] = $totalJumlahSensor[$i]->jumlah;
                break;
            }
        }
        return response()->json([
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
        ]);
    }

    public function dataNotifikasiSuhu() {
        $dataNotifikasi = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah"))
            ->where("nama_notifikasi", "Peringatan Suhu")
            ->where("level_notifikasi", "Bahaya")
            ->get();

        return response()->json([
            "dataNotif" => $dataNotifikasi[0]->jumlah
        ]);
    }

    public function dataNotifikasiCahaya() {
        $dataNotifikasi = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah"))
            ->where("nama_notifikasi", "Peringatan Intensitas Cahaya")
            ->where("level_notifikasi", "Bahaya")
            ->get();

        return response()->json([
            "dataNotif" => $dataNotifikasi[0]->jumlah
        ]);
    }
    public function dataNotifikasiUdara() {
        $dataNotifikasi = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Udara")
            ->where("level_notifikasi", "Bahaya")
            ->get();

        return response()->json([
            "dataNotif" => $dataNotifikasi[0]->jumlah
        ]);
    }

    public function dataNotifikasiTanah() {
        $dataNotifikasi = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Tanah")
            ->where("level_notifikasi", "Bahaya")
            ->get();

        return response()->json([
            "dataNotif" => $dataNotifikasi[0]->jumlah
        ]);
    }

}