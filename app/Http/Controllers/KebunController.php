<?php

namespace App\Http\Controllers;

use App\Models\KebunModel;
use App\Models\BlokModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class KebunController extends Controller {

    public function kebunOptions() {
        $daftarKebun = KebunModel::select()->get();
        return response()->json([
            "daftar_kebun" => $daftarKebun
        ]);
    }

    public function blokOptions($id_kebun) {
        $daftarBlok = BlokModel::select()->get();
        return response()->json([
            "daftar_blok" => $daftarBlok,
            "dataLength" => count($daftarBlok)
        ]);
    }

    public function ambilDataStatusKebun($id) {
        $dataStatus = BlokModel::select()
            ->where("id_detail_blok", $id)
            ->get();

        $resultUmur = 0;
        $jenisUmur = "";
        $yearsNow = (int)date("Y");
        $yearsInData = (int)explode("-", $dataStatus[0]->created_at)[0];
        $resultUmur = $yearsNow - $yearsInData;
        $jenisUmur = "Tahun";
        if(($yearsNow - $yearsInData) == 0) {
            $monthNow = (int)date("m");
            $monthInData = (int)explode("-", $dataStatus[0]->created_at)[1];
            $resultUmur = $monthNow - $monthInData;
            $jenisUmur = "Bulan";
            if(($monthNow - $monthInData) == 0) {
                $dayNow = (int)date("d");
                $dayInData = (int)explode(" ", explode("-", $dataStatus[0]->created_at)[2])[0];
                $resultUmur = $dayNow - $dayInData;
                $jenisUmur = "Hari";
            }
        }

        return response()->json([
            "jenisUmur" => $jenisUmur,
            "umurBlok" => $resultUmur,
            "tahunBlok" => $yearsInData,
            "statusBlok" => $dataStatus[0]->status_blok,
            "faseBlok" => $dataStatus[0]->fase_tanaman
        ]);
    }
}