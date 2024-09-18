<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SensorData;
use Illuminate\Http\Request;

class DataSensor extends Controller
{
    public function getAverageAndHistory(Request $request)
    {
        $request->validate([
            'req_data_sensor' => 'required|string|in:kelembabantanah,suhu,kelembaban,cahaya',
        ]);

        $sensor = $request->input('req_data_sensor');

        $sensorData = SensorData::all([$sensor, 'updated_at']);

        $average = $sensorData->avg($sensor);

        $sortedSensorData = $sensorData->sortBy('updated_at')->values();

        $formattedSensorData = $sortedSensorData->map(function ($item) use ($sensor) {
            return [
                'nilai_sensor' => $item->$sensor,
                'updated_at' => $item->updated_at,
            ];
        })->all();

        $response = [
            'average' => $average,
            'history' => $formattedSensorData
        ];

        return $this->sendMassage(
            $response,
            200,
            true
        );
    }

    public function sendMassage($text, $kode, $status)
    {
        return response()->json([
            'data' => $text,
            'code' => $kode,
            'status' => $status
        ], $kode);
    }
}