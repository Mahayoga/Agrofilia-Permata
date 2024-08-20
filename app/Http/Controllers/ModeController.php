<?php

namespace App\Http\Controllers;

use App\Models\ModeModel;
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

    public function setAutoModeOn() {
        $nilaiAuto = ModeModel::where("id", 1)->update(["mode" => 1]);
    }

    public function setAutoModeOff() {
        $nilaiAuto = ModeModel::where("id", 1)->update(["mode" => 0]);
    }
}