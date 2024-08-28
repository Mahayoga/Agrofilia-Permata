<?php

namespace App\Http\Controllers;

use App\Models\ModeModel;
use App\Models\NotifikasiModeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class ModeController extends Controller {

    public function checkMode() {
        $nilaiMode = ModeModel::select()->get();
        return response()->json([
            'modeAuto' => $nilaiMode[0]->mode,
            'modeAir' => $nilaiMode[1]->mode,
            'modePupuk' => $nilaiMode[2]->mode
        ]);
    }

    public function dataSensorAirPerHari() {
        $totalJumlahPupukPerHari = NotifikasiModeModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, waktu"))
            ->where("deskripsi", "Penyiraman Air Telah Hidup!")
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahPupukPerHari = NotifikasiModeModel::select(DB::raw("waktu"))
            ->where("deskripsi", "Penyiraman Air Telah Hidup!")
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();

        $jumlahID = [0, 0, 0, 0, 0, 0, 0];
        $hari = [0, 0, 0, 0, 0, 0, 0];
        for($i = 0; $i < count($totalJumlahPupukPerHari); $i++) {
            $arrTemp = explode("-", $hariPerTotalJumlahPupukPerHari[$i]->waktu);
            $dateArr = explode(" ", $arrTemp[2]);

            switch(date("l", mktime(0, 0, 0, $arrTemp[1], $dateArr[0], $arrTemp[0]))) {
                case "Monday":
                    $hari[0] = "Senin";
                    $jumlahID[0] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Tuesday":
                    $hari[1] = "Selasa";
                    $jumlahID[1] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Wednesday":
                    $hari[2] = "Rabu";
                    $jumlahID[2] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Thursday":
                    $hari[3] = "Kamis";
                    $jumlahID[3] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Friday":
                    $hari[4] = "Jumat";
                    $jumlahID[4] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Saturday":
                    $hari[5] = "Sabtu";
                    $jumlahID[5] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Sunday":
                    $hari[6] = "Minggu";
                    $jumlahID[6] = $totalJumlahPupukPerHari[$i]->jumlah;
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

            'totalValue' => array_sum($jumlahID)
        ]);
    }

    public function dataSensorPupukPerHari() {
        $totalJumlahPupukPerHari = NotifikasiModeModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, waktu"))
            ->where("deskripsi", "Penyiraman Pupuk Telah Hidup!")
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahPupukPerHari = NotifikasiModeModel::select(DB::raw("waktu"))
            ->where("deskripsi", "Penyiraman Pupuk Telah Hidup!")
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();

        $jumlahID = [0, 0, 0, 0, 0, 0, 0];
        $hari = [0, 0, 0, 0, 0, 0, 0];
        for($i = 0; $i < count($totalJumlahPupukPerHari); $i++) {
            $arrTemp = explode("-", $hariPerTotalJumlahPupukPerHari[$i]->waktu);
            $dateArr = explode(" ", $arrTemp[2]);
            
            switch(date("l", mktime(0, 0, 0, $arrTemp[1], $dateArr[0], $arrTemp[0]))) {
                case "Monday":
                    $hari[0] = "Senin";
                    $jumlahID[0] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Tuesday":
                    $hari[1] = "Selasa";
                    $jumlahID[1] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Wednesday":
                    $hari[2] = "Rabu";
                    $jumlahID[2] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Thursday":
                    $hari[3] = "Kamis";
                    $jumlahID[3] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Friday":
                    $hari[4] = "Jumat";
                    $jumlahID[4] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Saturday":
                    $hari[5] = "Sabtu";
                    $jumlahID[5] = $totalJumlahPupukPerHari[$i]->jumlah;
                break;
                case "Sunday":
                    $hari[6] = "Minggu";
                    $jumlahID[6] = $totalJumlahPupukPerHari[$i]->jumlah;
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

            'totalValue' => array_sum($jumlahID)
        ]);
    }

    public function setAirModeOn() {
        $nilaiAuto = ModeModel::where("id", 2)->update(["mode" => 1]);
    }

    public function setAirModeOff() {
        $nilaiAuto = ModeModel::where("id", 2)->update(["mode" => 0]);
    }

    public function setPupukModeOn() {
        $nilaiAuto = ModeModel::where("id", 3)->update(["mode" => 1]);
    }

    public function setPupukModeOff() {
        $nilaiAuto = ModeModel::where("id", 3)->update(["mode" => 0]);
    }

    public function pupukLastUpdateTime() {
        $timeResult = NotifikasiModeModel::select()
            ->where("deskripsi", "Penyiraman Pupuk Telah Mati!")
            ->orWhere("deskripsi", "Penyiraman Pupuk Telah Hidup!")
            ->orderBy("id_notifikasi", "desc")
            ->limit(1)
            ->get();

        // 2024-08-21 16:52:55
        $dateInData = explode(" ", $timeResult[0]->waktu)[0];
        $timeInData = explode(" ", $timeResult[0]->waktu)[1];
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

    public function airLastUpdateTime() {
        $timeResult = NotifikasiModeModel::select()
            ->where("deskripsi", "Penyiraman Air Telah Mati!")
            ->orWhere("deskripsi", "Penyiraman Air Telah Hidup!")
            ->orderBy("id_notifikasi", "desc")
            ->limit(1)
            ->get();

        // 2024-08-21 16:52:55
        $dateInData = explode(" ", $timeResult[0]->waktu)[0];
        $timeInData = explode(" ", $timeResult[0]->waktu)[1];
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
}