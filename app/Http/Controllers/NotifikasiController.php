<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotifikasiSensorModel;

class NotifikasiController extends Controller {
    public function ambilDataNotifikasi() {
        $hasil = NotifikasiSensorModel::select()
            ->orderBy("id_notifikasi", "desc")
            ->limit(100)
            ->get();

        return view("pages.notifications", compact("hasil"));
    }
}
