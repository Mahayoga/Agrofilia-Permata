<?php

namespace App\Http\Controllers;

use App\Models\SensorModel;
use App\Models\IndividualBlockSensor;
use App\Models\KebunModel;
use App\Models\NotifikasiSensorModel;
use App\Models\MSensor;
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
        $nilaiSensor = SensorModel::select()
            ->where('esp_id', 'soil1_data')
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
        
        $nilaiSensorCahaya = SensorModel::where('esp_id', 'soil2_data')
            ->orderBy('created_at', 'desc')->latest()->first();

        $nilaiSensorTanah = SensorModel::select()
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        $avgTanah = 0;
        for($i = 0; $i < count($nilaiSensorTanah); $i++) {
            $avgTanah += (int)$nilaiSensorTanah[$i]->kelembabantanah;
        }
        $avgTanah /= count($nilaiSensorTanah);

        return response()->json([
            'suhu' => $nilaiSensor[0]->suhu,
            'kelembaban' => $nilaiSensor[0]->kelembaban,
            'cahaya' => $nilaiSensorCahaya->cahaya,
            'kelembabanTanah' => $avgTanah,
            'updated_at' => $nilaiSensor[0]->updated_at
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

    public function suhuLastUpdateTime() {
        $timeResult = SensorModel::select()
            ->where("esp_id", "soil1_data")
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();

        // 2024-08-21 16:52:55
        $dateInData = explode(" ", $timeResult[0]->created_at)[0];
        $timeInData = explode(" ", $timeResult[0]->created_at)[1];
        if($dateInData == date("Y-m-d")) {
            if(explode(":", $timeInData)[0] . ":" . explode(":", $timeInData)[1] == date("H:i")) {
                return response()->json(["timeResult" => "<1 menit"]);
            } else if(explode(":", $timeInData)[0] == date("H")) {
                $calcMin = (int)date("i") - (int)explode(":", $timeInData)[1];
                return response()->json(["timeResult" => $calcMin . " menit"]);
            } else {
                $calcHour = (int)date("H") - (int)explode(":", $timeInData)[0];
                return response()->json(["timeResult" => $calcHour . " jam"]);
            }
        } else if(explode("-", $dateInData)[1] == date("m")) {
            $calcDay = (int)date("d") - (int)explode("-", $dateInData)[2];
            return response()->json(["timeResult" => $calcDay . " hari"]);
        } else if(explode("-", $dateInData)[0] == date("Y")) {
            $calcMon = (int)date("m") - (int)explode("-", $dateInData)[1];
            return response()->json(["timeResult" => $calcMon . " bulan"]);
        } else {
            $calcMon = (int)date("H") - (int)explode("-", $dateInData)[0];
            return response()->json(["timeResult" => $calcMon . " tahun"]);
        }
    }

    public function cahayaLastUpdateTime() {
        $timeResult = SensorModel::select()
            ->where("esp_id", "soil2_data")
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();

        // 2024-08-21 16:52:55
        $dateInData = explode(" ", $timeResult[0]->created_at)[0];
        $timeInData = explode(" ", $timeResult[0]->created_at)[1];
        if($dateInData == date("Y-m-d")) {
            if(explode(":", $timeInData)[0] . ":" . explode(":", $timeInData)[1] == date("H:i")) {
                return response()->json(["timeResult" => "<1 menit"]);
            } else if(explode(":", $timeInData)[0] == date("H")) {
                $calcMin = (int)date("i") - (int)explode(":", $timeInData)[1];
                return response()->json(["timeResult" => $calcMin . " menit"]);
            } else {
                $calcHour = (int)date("H") - (int)explode(":", $timeInData)[0];
                return response()->json(["timeResult" => $calcHour . " jam"]);
            }
        } else if(explode("-", $dateInData)[1] == date("m")) {
            $calcDay = (int)date("d") - (int)explode("-", $dateInData)[2];
            return response()->json(["timeResult" => $calcDay . " hari"]);
        } else if(explode("-", $dateInData)[0] == date("Y")) {
            $calcMon = (int)date("m") - (int)explode("-", $dateInData)[1];
            return response()->json(["timeResult" => $calcMon . " bulan"]);
        } else {
            $calcMon = (int)date("H") - (int)explode("-", $dateInData)[0];
            return response()->json(["timeResult" => $calcMon . " tahun"]);
        }
    }

    public function udaraLastUpdateTime() {
        $timeResult = SensorModel::select()
            ->where("esp_id", "soil1_data")
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();

        // 2024-08-21 16:52:55
        $dateInData = explode(" ", $timeResult[0]->created_at)[0];
        $timeInData = explode(" ", $timeResult[0]->created_at)[1];
        if($dateInData == date("Y-m-d")) {
            if(explode(":", $timeInData)[0] . ":" . explode(":", $timeInData)[1] == date("H:i")) {
                return response()->json(["timeResult" => "<1 menit"]);
            } else if(explode(":", $timeInData)[0] == date("H")) {
                $calcMin = (int)date("i") - (int)explode(":", $timeInData)[1];
                return response()->json(["timeResult" => $calcMin . " menit"]);
            } else {
                $calcHour = (int)date("H") - (int)explode(":", $timeInData)[0];
                return response()->json(["timeResult" => $calcHour . " jam"]);
            }
        } else if(explode("-", $dateInData)[1] == date("m")) {
            $calcDay = (int)date("d") - (int)explode("-", $dateInData)[2];
            return response()->json(["timeResult" => $calcDay . " hari"]);
        } else if(explode("-", $dateInData)[0] == date("Y")) {
            $calcMon = (int)date("m") - (int)explode("-", $dateInData)[1];
            return response()->json(["timeResult" => $calcMon . " bulan"]);
        } else {
            $calcMon = (int)date("H") - (int)explode("-", $dateInData)[0];
            return response()->json(["timeResult" => $calcMon . " tahun"]);
        }
    }

    public function tanahLastUpdateTime() {
        $timeResult = SensorModel::select()
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();

        // 2024-08-21 16:52:55
        $dateInData = explode(" ", $timeResult[0]->created_at)[0];
        $timeInData = explode(" ", $timeResult[0]->created_at)[1];
        if($dateInData == date("Y-m-d")) {
            if(explode(":", $timeInData)[0] . ":" . explode(":", $timeInData)[1] == date("H:i")) {
                return response()->json(["timeResult" => "<1 menit"]);
            } else if(explode(":", $timeInData)[0] == date("H")) {
                $calcMin = (int)date("i") - (int)explode(":", $timeInData)[1];
                return response()->json(["timeResult" => $calcMin . " menit"]);
            } else {
                $calcHour = (int)date("H") - (int)explode(":", $timeInData)[0];
                return response()->json(["timeResult" => $calcHour . " jam"]);
            }
        } else if(explode("-", $dateInData)[1] == date("m")) {
            $calcDay = (int)date("d") - (int)explode("-", $dateInData)[2];
            return response()->json(["timeResult" => $calcDay . " hari"]);
        } else if(explode("-", $dateInData)[0] == date("Y")) {
            $calcMon = (int)date("m") - (int)explode("-", $dateInData)[1];
            return response()->json(["timeResult" => $calcMon . " bulan"]);
        } else {
            $calcMon = (int)date("H") - (int)explode("-", $dateInData)[0];
            return response()->json(["timeResult" => $calcMon . " tahun"]);
        }
    }

    public function ambilDataDetailSemuaSensor() {
        $kel1 = SensorModel::select()
            ->where("esp_id", "soil1_data")
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();
        $kel2 = SensorModel::select()
            ->where("esp_id", "soil2_data")
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();
        $kel3 = SensorModel::select()
            ->where("esp_id", "soil3")
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();
        $kel4 = SensorModel::select()
            ->where("esp_id", "soil4")
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();
        $kel5 = SensorModel::select()
            ->where("esp_id", "soil5")
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();
        $kel6 = SensorModel::select()
            ->where("esp_id", "soil6")
            ->orderBy("id", "desc")
            ->limit(1)
            ->get();

        return response()->json([
            "kelTanah1" => $kel1,
            "kelTanah2" => $kel2,
            "kelTanah3" => $kel3,
            "kelTanah4" => $kel4,
            "kelTanah5" => $kel5,
            "kelTanah6" => $kel6,

            "suhu" => $kel1,
            "udara" => $kel1,
            "cahaya" => $kel2
        ]);
    }

    public function ambilDataNotifikasiSensor() {
        $hasil = NotifikasiSensorModel::select()
            ->where("level_notifikasi", "Bahaya")
            ->orderBy("id_notifikasi", "desc")
            ->limit(5)
            ->get();

        return response()->json([
            "notifSensor" => $hasil
        ]);
    }
}