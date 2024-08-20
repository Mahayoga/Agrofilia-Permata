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
}