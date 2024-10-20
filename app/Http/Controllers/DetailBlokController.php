<?php

namespace App\Http\Controllers;

use App\Models\BlokModel;
use App\Models\SensorModel;
use App\Models\LogSensorModel;
use App\Models\ModeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DetailBlokController extends Controller
{
    function getVarDatabase($params) {
        $databaseVar = array(
            'suhu' => 'Suhu',
            'cahaya' => 'Cahaya',
            'kelembaban_udara' => 'Kelembaban Udara',
            'kelembaban_tanah' => 'Kelembaban Tanah',
            'soil1' => 'soil1_data',
            'soil2' => 'soil2_data',
            'soil3' => 'soil3',
            'soil4' => 'soil4',
            'soil5' => 'soil5',
            'soil6' => 'soil6',
        );
        return $databaseVar[$params];
    }

    public function index($id) {
        $dataBlok = BlokModel::select()
            ->join('kebun', 'detail_blok.id_kebun', '=', 'kebun.id_kebun')
            ->where('id_detail_blok', $id)
            ->get();
        
        $dataSensorBlok = SensorModel::select()
            ->where('id_detail_blok', $id)
            ->get();

        $dataSensorSuhu = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('suhu'))
            ->where('id_sensor', $dataSensorBlok[0]->id_sensor)
            ->orderBy('id_log_sensor', 'desc')
            ->limit(10)
            ->get();
        $dataLabelsSuhu = [];
        $dataReverseSuhu = [];
        for($i = 0; $i < count($dataSensorSuhu); $i++) {
            $dataLabelsSuhu[$i] = explode(':', explode(' ', $dataSensorSuhu[$i]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSensorSuhu[$i]->created_at)[1])[1];
            $dataReverseSuhu[$i] = $dataSensorSuhu[$i]->nilai_sensor;
        }
        $dataReverseSuhu = array_reverse($dataReverseSuhu);
        $dataLabelsSuhu = array_reverse($dataLabelsSuhu);

        $dataSensorUdara = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('kelembaban_udara'))
            ->where('id_sensor', $dataSensorBlok[0]->id_sensor)
            ->orderBy('id_log_sensor', 'desc')
            ->limit(10)
            ->get();
        
        $dataLabelsUdara = [];
        $dataReverseUdara = [];
        for($i = 0; $i < count($dataSensorUdara); $i++) {
            $dataLabelsUdara[$i] = explode(':', explode(' ', $dataSensorUdara[$i]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSensorUdara[$i]->created_at)[1])[1];
            $dataReverseUdara[$i] = $dataSensorUdara[$i]->nilai_sensor;
        }
        $dataLabelsUdara = array_reverse($dataLabelsUdara);
        $dataReverseUdara = array_reverse($dataReverseUdara);

        // dd($dataLabelsUdara, $dataReverseUdara);

        $dataSensorCahaya = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('cahaya'))
            ->where('id_sensor', $dataSensorBlok[1]->id_sensor)
            ->orderBy('id_log_sensor', 'desc')
            ->limit(10)
            ->get();
        $dataLabelsCahaya = [];
        $dataReverseCahaya = [];
        for($i = 0; $i < count($dataSensorCahaya); $i++) {
            $dataLabelsCahaya[$i] = explode(':', explode(' ', $dataSensorCahaya[$i]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSensorCahaya[$i]->created_at)[1])[1];
            $dataReverseCahaya[$i] = $dataSensorCahaya[$i]->nilai_sensor;
        }
        $dataLabelsCahaya = array_reverse($dataLabelsCahaya);
        $dataReverseCahaya = array_reverse($dataReverseCahaya);

        // dd($dataLabelsCahaya, $dataReverseCahaya);

        $dataAllSensor = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('suhu'))
            ->where('id_sensor', $dataSensorBlok[0]->id_sensor)
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();
        $dataSensorTanah = LogSensorModel::select()
            ->whereRaw("(keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "' AND id_sensor = " . $dataSensorBlok[0]->id_sensor . ") OR (id_sensor = " . $dataSensorBlok[1]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "') OR (id_sensor = " . $dataSensorBlok[2]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "') OR (id_sensor = " . $dataSensorBlok[3]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "') OR (id_sensor = " . $dataSensorBlok[4]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "') OR (id_sensor = " . $dataSensorBlok[5]->id_sensor . " AND keterangan_sensor = '" . $this->getVarDatabase('kelembaban_tanah') . "')")
            ->orderBy('created_at', 'desc')
            ->limit(60)
            ->get();
        $dataLabelsTanah = [];
        $dataAVGTanah = [];
        for($i = 0; $i < count($dataAllSensor); $i++) {
            $avgTanah = 0;
            for($j = 0; $j < 6; $j++) {
                $avgTanah += (int)$dataSensorTanah[$j * ($i + 1)]->nilai_sensor;
            }
            $dataAVGTanah[$i] = (int)$avgTanah / 6;
            $dataLabelsTanah[$i] = explode(':', explode(' ', $dataAllSensor[$i]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataAllSensor[$i]->created_at)[1])[1];
        }
        $dataLabelsTanah = array_reverse($dataLabelsTanah);
        $dataAVGTanah = array_reverse($dataAVGTanah);

        $dataSoil1 = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[0]->id_sensor)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $dataLabelsSoil1 = [];
        $dataReverseSoil1 = [];
        for($i = 0; $i < count($dataSoil1); $i++) {
            $dataLabelsSoil1[$i] = explode(':', explode(' ', $dataSoil1[0]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSoil1[0]->created_at)[1])[1];
            $dataReverseSoil1[$i] = $dataSoil1[$i]->nilai_sensor;
        }
        $dataLabelsSoil1 = array_reverse($dataLabelsSoil1);
        $dataReverseSoil1 = array_reverse($dataReverseSoil1);

        $dataSoil2 = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[1]->id_sensor)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $dataLabelsSoil2 = [];
        $dataReverseSoil2 = [];
        for($i = 0; $i < count($dataSoil2); $i++) {
            $dataLabelsSoil2[$i] = explode(':', explode(' ', $dataSoil2[0]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSoil2[0]->created_at)[1])[1];
            $dataReverseSoil2[$i] = $dataSoil2[$i]->nilai_sensor;
        }
        $dataLabelsSoil2 = array_reverse($dataLabelsSoil2);
        $dataReverseSoil2 = array_reverse($dataReverseSoil2);

        $dataSoil3 = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[2]->id_sensor)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $dataLabelsSoil3 = [];
        $dataReverseSoil3 = [];
        for($i = 0; $i < count($dataSoil3); $i++) {
            $dataLabelsSoil3[$i] = explode(':', explode(' ', $dataSoil3[0]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSoil3[0]->created_at)[1])[1];
            $dataReverseSoil3[$i] = $dataSoil3[$i]->nilai_sensor;
        }
        $dataLabelsSoil3 = array_reverse($dataLabelsSoil3);
        $dataReverseSoil3 = array_reverse($dataReverseSoil3);

        $dataSoil4 = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[3]->id_sensor)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $dataLabelsSoil4 = [];
        $dataReverseSoil4 = [];
        for($i = 0; $i < count($dataSoil4); $i++) {
            $dataLabelsSoil4[$i] = explode(':', explode(' ', $dataSoil4[0]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSoil4[0]->created_at)[1])[1];
            $dataReverseSoil4[$i] = $dataSoil4[$i]->nilai_sensor;
        }
        $dataLabelsSoil4 = array_reverse($dataLabelsSoil4);
        $dataReverseSoil4 = array_reverse($dataReverseSoil4);

        $dataSoil5 = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[4]->id_sensor)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $dataLabelsSoil5 = [];
        $dataReverseSoil5 = [];
        for($i = 0; $i < count($dataSoil5); $i++) {
            $dataLabelsSoil5[$i] = explode(':', explode(' ', $dataSoil5[0]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSoil5[0]->created_at)[1])[1];
            $dataReverseSoil5[$i] = $dataSoil5[$i]->nilai_sensor;
        }
        $dataLabelsSoil5 = array_reverse($dataLabelsSoil5);
        $dataReverseSoil5 = array_reverse($dataReverseSoil5);

        $dataSoil6 = LogSensorModel::select()
            ->where('keterangan_sensor', $this->getVarDatabase('kelembaban_tanah'))
            ->where('id_sensor', $dataSensorBlok[5]->id_sensor)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $dataLabelsSoil6 = [];
        $dataReverseSoil6 = [];
        for($i = 0; $i < count($dataSoil6); $i++) {
            $dataLabelsSoil6[$i] = explode(':', explode(' ', $dataSoil6[0]->created_at)[1])[0] . ':' . explode(':', explode(' ', $dataSoil6[0]->created_at)[1])[1];
            $dataReverseSoil6[$i] = $dataSoil6[$i]->nilai_sensor;
        }
        $dataLabelsSoil6 = array_reverse($dataLabelsSoil5);
        $dataReverseSoil6 = array_reverse($dataReverseSoil6);

        $dataWaterFloat = ModeModel::select()
            ->where('id', '11')
            ->get();

        // dd(compact(
        //     'dataBlok',
        //     'dataReverseSuhu',
        //     'dataReverseUdara',
        //     'dataReverseCahaya',
        //     'dataLabelsSuhu',
        //     'dataLabelsUdara', 
        //     'dataSensorCahaya', 
        //     'dataLabelsCahaya', 
        //     'dataLabelsTanah', 
        //     'dataAVGTanah', 
        //     'dataReverseSoil1',
        //     'dataReverseSoil2',
        //     'dataReverseSoil3',
        //     'dataReverseSoil4',
        //     'dataReverseSoil5',
        //     'dataReverseSoil6',
        //     'dataLabelsSoil1',
        //     'dataLabelsSoil2',
        //     'dataLabelsSoil3',
        //     'dataLabelsSoil4',
        //     'dataLabelsSoil5',
        //     'dataLabelsSoil6',
        //     'dataWaterFloat',
        //     'id'
        // ));

        return view('pages.admin.detailblok.index', compact(
            'dataBlok',
            'dataReverseSuhu',
            'dataReverseUdara',
            'dataReverseCahaya',
            'dataLabelsSuhu',
            'dataLabelsUdara', 
            'dataSensorCahaya', 
            'dataLabelsCahaya', 
            'dataLabelsTanah', 
            'dataAVGTanah', 
            'dataReverseSoil1',
            'dataReverseSoil2',
            'dataReverseSoil3',
            'dataReverseSoil4',
            'dataReverseSoil5',
            'dataReverseSoil6',
            'dataLabelsSoil1',
            'dataLabelsSoil2',
            'dataLabelsSoil3',
            'dataLabelsSoil4',
            'dataLabelsSoil5',
            'dataLabelsSoil6',
            'dataWaterFloat',
            'id'
        ));
    }
}
