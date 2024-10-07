<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaterFloatModel;

class WaterFloatController extends Controller
{
    function checkWater() {
        $dataWaterFloat = WaterFloatModel::select()
            ->get();


        return response()->json([
            'dataWaterFloat' => $dataWaterFloat
        ]);
    }
}
