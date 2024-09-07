<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotifikasiSensorModel;
use App\Models\NotifikasiModeModel;

class NotifikasiController extends Controller {
    public function ambilDataNotifikasi() {
        $hasilSensor = NotifikasiSensorModel::select()
            ->orderBy("id_notifikasi", "desc")
            ->limit(50)
            ->get();
        $hasilMode = NotifikasiModeModel::select()
            ->orderBy("id_notifikasi", "desc")
            ->limit(50)
            ->get();

        return view("pages.admin.notifikasi.index", compact("hasilSensor", "hasilMode"));
    }
}
