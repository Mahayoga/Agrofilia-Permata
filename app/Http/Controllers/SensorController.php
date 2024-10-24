<?php

namespace App\Http\Controllers;

use App\Models\SensorModel;
use App\Models\IndividualBlockSensor;
use App\Models\KebunModel;
use App\Models\BlokModel;
use App\Models\LogSensorModel;
use App\Models\NotifikasiSensorModel;
use App\Models\MSensor;
// use Twilio\Rest\Client;
// use App\Models\MSensordua;
// use App\Models\MSensortiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class SensorController extends Controller {

    function getVarDatabase($params) {
        $databaseVar = array(
            'suhu' => 'Suhu',
            'cahaya' => 'Cahaya',
            'kelembaban_udara' => 'Kelembaban Udara',
            'kelembaban_tanah' => 'Kelembaban Tanah',
            'soil1' => 'soil1_data',
            'soil2' => 'soil2_data',
            'soil3' => 'soil3',
            'soil4' => 'soil4',
            'soil5' => 'soil5',
            'soil6' => 'soil6',
        );
        return $databaseVar[$params];
    }

    public function dataDashboard() {
        $nilaiSensor = SensorModel::orderBy('updated_at', 'desc')->latest()->first();

        return response()->json([
            'suhu' => $nilaiSensor->suhu,
            'kelembaban' => $nilaiSensor->kelembaban,
            'updated_at' => $nilaiSensor->updated_at
        ]);
    }

    public function dataRataRata($id) {
        $dataSensorBlok = SensorModel::select()
            ->where('id_detail_blok', $id)
            ->get();

        $nilaiSensor = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('suhu'))
            ->where('id_sensor', $dataSensorBlok[0]->id_sensor)
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
        
        $nilaiSensorUdara = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('kelembaban_udara'))
            ->where('id_sensor', $dataSensorBlok[0]->id_sensor)
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();
        
        $nilaiSensorCahaya = LogSensorModel::where('keterangan_sensor', $this->getVarDatabase('cahaya'))
            ->where('id_sensor', $dataSensorBlok[1]->id_sensor)
            ->orderBy('created_at', 'desc')->latest()->first();

        $nilaiSensorTanah = LogSensorModel::select()
            ->whereRaw("(keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "' AND id_sensor = " . $dataSensorBlok[0]->id_sensor . ") OR (id_sensor = " . $dataSensorBlok[1]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "') OR (id_sensor = " . $dataSensorBlok[2]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "') OR (id_sensor = " . $dataSensorBlok[3]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "') OR (id_sensor = " . $dataSensorBlok[4]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "') OR (id_sensor = " . $dataSensorBlok[5]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "')")
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        $avgTanah = 0;
        for($i = 0; $i < count($nilaiSensorTanah); $i++) {
            $avgTanah += (int)$nilaiSensorTanah[$i]->nilai_sensor;
        }
        $avgTanah /= count($nilaiSensorTanah);

        $suhu_updated = $nilaiSensor[0]->updated_at->toString();
        $kelembaban_updated = $nilaiSensorUdara[0]->updated_at->toString();
        $cahaya_updated = $nilaiSensorCahaya->updated_at->toString();
        $tanah_updated = $nilaiSensorTanah[0]->updated_at->toString();
        // dd();

        return response()->json([
            'suhu' => $nilaiSensor[0]->nilai_sensor,
            'kelembaban' => $nilaiSensorUdara[0]->nilai_sensor,
            'cahaya' => $nilaiSensorCahaya->nilai_sensor,
            'kelembabanTanah' => $avgTanah,
            'suhu_updated' => explode(':', explode(' ', $suhu_updated)[4])[0] . ':' . explode(':', explode(' ', $suhu_updated)[4])[1],
            'kelembaban_updated' => explode(':', explode(' ', $kelembaban_updated)[4])[0] . ':' . explode(':', explode(' ', $kelembaban_updated)[4])[1],
            'cahaya_updated' => explode(':', explode(' ', $cahaya_updated)[4])[0] . ':' . explode(':', explode(' ', $cahaya_updated)[4])[1],
            'tanah_updated' => explode(':', explode(' ', $tanah_updated)[4])[0] . ':' . explode(':', explode(' ', $tanah_updated)[4])[1],
        ]);
    }

    public function dataSensorSuhuPerHari() {
        $totalJumlahSensor = LogSensorModel::select(DB::raw("AVG(nilai_sensor) AS jumlah"))
            ->where("keterangan_sensor", $this->getVarDatabase('suhu'))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahSensor = LogSensorModel::select(DB::raw("created_at"))
            ->where("keterangan_sensor", $this->getVarDatabase('suhu'))
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
        $totalJumlahSensor = LogSensorModel::select(DB::raw("AVG(nilai_sensor) AS jumlah"))
            ->where("keterangan_sensor", $this->getVarDatabase('cahaya'))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahSensor = LogSensorModel::select(DB::raw("created_at"))
            ->where("keterangan_sensor", $this->getVarDatabase('cahaya'))
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
        $totalJumlahSensor = LogSensorModel::select(DB::raw("AVG(nilai_sensor) AS jumlah"))
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_udara'))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahSensor = LogSensorModel::select(DB::raw("created_at"))
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_udara'))
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
        $totalJumlahSensor = LogSensorModel::select(DB::raw("AVG(nilai_sensor) AS jumlah"))
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_tanah'))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahSensor = LogSensorModel::select(DB::raw("created_at"))
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_tanah'))
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
            ->where("nama_notifikasi", "Peringatan kelembaban_udara")
            ->where("level_notifikasi", "Bahaya")
            ->get();

        return response()->json([
            "dataNotif" => $dataNotifikasi[0]->jumlah
        ]);
    }

    public function dataNotifikasiTanah() {
        $dataNotifikasi = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah"))
            ->where("nama_notifikasi", "Peringatan kelembaban_tanah")
            ->where("level_notifikasi", "Bahaya")
            ->get();

        return response()->json([
            "dataNotif" => $dataNotifikasi[0]->jumlah
        ]);
    }

    public function suhuLastUpdateTime() {
        $timeResult = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('suhu'))
            ->orderBy("id_log_sensor", "desc")
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
        $timeResult = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('cahaya'))
            ->orderBy("id_log_sensor", "desc")
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
        $timeResult = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_udara'))
            ->orderBy("id_log_sensor", "desc")
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
        $timeResult = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_tanah'))
            ->orderBy("id_log_sensor", "desc")
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

    public function ambilDataDetailSemuaSensor($id) {
        $dataSensorBlok = SensorModel::select()
            ->where('id_detail_blok', $id)
            ->get();
        $kel1 = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[0]->id_sensor)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->get();
        // dd($kel1);
        $kel2 = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[1]->id_sensor)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->get();
        $kel3 = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[2]->id_sensor)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->get();
        $kel4 = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[3]->id_sensor)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->get();
        $kel5 = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[4]->id_sensor)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->get();
        $kel6 = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[5]->id_sensor)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->get();

        $suhu = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('suhu'))
            ->where('id_sensor', $dataSensorBlok[0]->id_sensor)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->get();

        $udara = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('kelembaban_udara'))
            ->where('id_sensor', $dataSensorBlok[0]->id_sensor)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->get();
        
        $cahaya = LogSensorModel::select()
            ->where("keterangan_sensor", $this->getVarDatabase('cahaya'))
            ->where('id_sensor', $dataSensorBlok[1]->id_sensor)
            ->orderBy("created_at", "desc")
            ->limit(1)
            ->get();

        return response()->json([
            "kelTanah1" => $kel1,
            "kelTanah2" => $kel2,
            "kelTanah3" => $kel3,
            "kelTanah4" => $kel4,
            "kelTanah5" => $kel5,
            "kelTanah6" => $kel6,

            "suhu" => $suhu,
            "udara" => $udara,
            "cahaya" => $cahaya
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

    public function store(Request $request) {
        switch($request->esp_id) {
            case $this->getVarDatabase('soil1'):
                $dataSensor = SensorModel::select()
                    ->where('id_detail_blok', $request->id_detail_blok)
                    ->where('esp_id', $this->getVarDatabase('soil1'))
                    ->get();
                LogSensorModel::create([
                    'id_sensor' => $dataSensor[0]->id_sensor,
                    'keterangan_sensor' => $request->keterangan_sensor,
                    'nilai_sensor' => $request->nilai_sensor,
                ]);
                break;
            case $this->getVarDatabase('soil2'):
                $dataSensor = SensorModel::select()
                    ->where('id_detail_blok', $request->id_detail_blok)
                    ->where('esp_id', $this->getVarDatabase('soil2'))
                    ->get();
                LogSensorModel::create([
                    'id_sensor' => $dataSensor[0]->id_sensor,
                    'keterangan_sensor' => $request->keterangan_sensor,
                    'nilai_sensor' => $request->nilai_sensor,
                ]);
                break;
            case $this->getVarDatabase('soil3'):
                $dataSensor = SensorModel::select()
                    ->where('id_detail_blok', $request->id_detail_blok)
                    ->where('esp_id', $this->getVarDatabase('soil3'))
                    ->get();
                LogSensorModel::create([
                    'id_sensor' => $dataSensor[0]->id_sensor,
                    'keterangan_sensor' => $request->keterangan_sensor,
                    'nilai_sensor' => $request->nilai_sensor,
                ]);
                break;
            case $this->getVarDatabase('soil4'):
                $dataSensor = SensorModel::select()
                    ->where('id_detail_blok', $request->id_detail_blok)
                    ->where('esp_id', $this->getVarDatabase('soil4'))
                    ->get();
                LogSensorModel::create([
                    'id_sensor' => $dataSensor[0]->id_sensor,
                    'keterangan_sensor' => $request->keterangan_sensor,
                    'nilai_sensor' => $request->nilai_sensor,
                ]);
                break;
            case $this->getVarDatabase('soil5'):
                $dataSensor = SensorModel::select()
                    ->where('id_detail_blok', $request->id_detail_blok)
                    ->where('esp_id', $this->getVarDatabase('soil5'))
                    ->get();
                LogSensorModel::create([
                    'id_sensor' => $dataSensor[0]->id_sensor,
                    'keterangan_sensor' => $request->keterangan_sensor,
                    'nilai_sensor' => $request->nilai_sensor,
                ]);
                break;
            case $this->getVarDatabase('soil6'):
                $dataSensor = SensorModel::select()
                    ->where('id_detail_blok', $request->id_detail_blok)
                    ->where('esp_id', $this->getVarDatabase('soil6'))
                    ->get();
                LogSensorModel::create([
                    'id_sensor' => $dataSensor[0]->id_sensor,
                    'keterangan_sensor' => $request->keterangan_sensor,
                    'nilai_sensor' => $request->nilai_sensor,
                ]);
                break;
        }
        return response()->json([
            'status' => 'Data berhasil disimpan'
        ]);
    }
}