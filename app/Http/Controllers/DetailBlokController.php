<?php

namespace App\Http\Controllers;

use App\Models\BlokModel;
use App\Models\WaterFloatModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DetailBlokController extends Controller
{
    public function index($id) {
        $dataBlok = BlokModel::select()
            ->join('kebun', 'detail_blok.id_kebun', '=', 'kebun.id_kebun')
            ->where('id_detail_blok', $id)
            ->get();

        $dataWaterFloat = WaterFloatModel::select()
            ->get();
        
        return view('pages.admin.detailblok.index', compact('dataBlok', 'dataWaterFloat'));
    }
}
