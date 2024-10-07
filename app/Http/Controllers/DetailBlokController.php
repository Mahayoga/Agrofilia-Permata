<?php

namespace App\Http\Controllers;

use App\Models\BlokModel;
use App\Models\SensorModel;
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

        $dataSensorSuhu = SensorModel::select()
            ->where('esp_id', 'soil1_data')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();
        $dataLabelsSuhu = [];
        for($i = 0; $i < count($dataSensorSuhu); $i++) {
            $dataLabelsSuhu[$i] = explode(':', explode(' ', $dataSensorSuhu[$i]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSensorSuhu[$i]->created_at)[1])[1];
        }
        
        $dataLabelsUdara = [];
        for($i = 0; $i < count($dataSensorSuhu); $i++) {
            $dataLabelsUdara[$i] = explode(':', explode(' ', $dataSensorSuhu[$i]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSensorSuhu[$i]->created_at)[1])[1];
        }

        $dataSensorCahaya = SensorModel::select()
            ->where('esp_id', 'soil2_data')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();
        $dataLabelsCahaya = [];
        for($i = 0; $i < count($dataSensorCahaya); $i++) {
            $dataLabelsCahaya[$i] = explode(':', explode(' ', $dataSensorCahaya[$i]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSensorCahaya[$i]->created_at)[1])[1];
        }

        $dataAllSensor = SensorModel::select()
            ->where('esp_id', 'soil1_data')
            ->orderBy('created_at', 'desc')
            ->limit(60)
            ->get();
        $dataSensorTanah = SensorModel::select()
            ->orderBy('created_at', 'desc')
            ->limit(60)
            ->get();
        // dd($dataAllSensor);
        $dataLabelsTanah = [];
        $dataAVGTanah = [];
        for($i = 0; $i < count($dataAllSensor); $i++) {
            $avgTanah = 0;
            for($j = 0; $j < 6; $j++) {
                $avgTanah += (int)$dataSensorTanah[$j * $i]->kelembabantanah;
            }
            $dataAVGTanah[$i] = (int)$avgTanah / count($dataAllSensor);
            $dataLabelsTanah[$i] = explode(':', explode(' ', $dataAllSensor[$i]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataAllSensor[$i]->created_at)[1])[1];
        }

        // dd($dataAVGTanah, $dataLabelsTanah);

        $dataWaterFloat = WaterFloatModel::select()
            ->get();
        
        return view('pages.admin.detailblok.index', compact(
            'dataBlok',
            'dataSensorSuhu',
            'dataLabelsSuhu',
            'dataLabelsUdara', 
            'dataSensorCahaya', 
            'dataLabelsCahaya', 
            'dataLabelsTanah', 
            'dataAVGTanah', 
            'dataWaterFloat'
        ));
    }
}
