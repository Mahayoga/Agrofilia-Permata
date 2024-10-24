<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeModel;

class WaterFloatController extends Controller
{
    function checkWater() {
        $dataWaterFloat = ModeModel::select()
            ->where('id', '11')
            ->get();


        return response()->json([
            'dataWaterFloat' => $dataWaterFloat
        ]);
    }
}
