<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ControlSettings;
use Illuminate\Http\Request;

class SettingsSensor extends Controller
{
    public function updateControlSettings(Request $request)
    {
        $controlMode = $request->input('control_mode');

        // Fetch the control_mode by ID 1
        $controlModeSetting = ControlSettings::find(1);

        // Default values for water_control and fertilizer_control
        $waterControl = $request->input('water_control', false);
        $fertilizerControl = $request->input('fertilizer_control', false);

        // Update control_mode if it is changing
        if ($controlModeSetting && $controlModeSetting->mode !== $controlMode) {
            $controlModeSetting->update([
                'mode' => $controlMode,
                'updated_at' => now()
            ]);

            // Reset water and fertilizer controls when mode changes
            $waterControl = false;
            $fertilizerControl = false;

            // Update water_control by ID 2
            ControlSettings::find(2)->update([
                'mode' => $waterControl,
                'updated_at' => now()
            ]);

            // Update fertilizer_control by ID 3
            ControlSettings::find(3)->update([
                'mode' => $fertilizerControl,
                'updated_at' => now()
            ]);
        }

        return response()->json([
            'control_mode' => $controlModeSetting,
            'water_control' => ControlSettings::find(2),
            'fertilizer_control' => ControlSettings::find(3)
        ]);
    }

    public function getControlSettings()
    {
        $controlSettings = [
            'control_mode' => ControlSettings::find(1),
            'water_control' => ControlSettings::find(2),
            'fertilizer_control' => ControlSettings::find(3)
        ];

        return response()->json($controlSettings);
    }

    public function updateBuka(Request $request)
    {
        if ($request->has('control_sensor')) {
            $control_sensor = $request->input('control_sensor');

            if ($control_sensor == 'water') {
                // Update water_control by ID 2
                ControlSettings::find(2)->update(['mode' => 1, 'updated_at' => now()]);

                return response()->json(['success' => 'Status air berhasil diubah']);
            } else if ($control_sensor == 'fertilizer') {
                // Update fertilizer_control by ID 3
                ControlSettings::find(3)->update(['mode' => 1, 'updated_at' => now()]);

                return response()->json(['success' => 'Status pupuk berhasil diubah']);
            }
        } else {
            return response()->json(['error' => 'Parameter control_sensor tidak diberikan']);
        }
    }

    public function updateTutup(Request $request)
    {
        if ($request->has('control_sensor')) {
            $control_sensor = $request->input('control_sensor');

            if ($control_sensor == 'water') {
                // Update water_control by ID 2
                ControlSettings::find(2)->update(['mode' => 0, 'updated_at' => now()]);

                return response()->json(['success' => 'Status air berhasil diubah']);
            } else if ($control_sensor == 'fertilizer') {
                // Update fertilizer_control by ID 3
                ControlSettings::find(3)->update(['mode' => 0, 'updated_at' => now()]);

                return response()->json(['success' => 'Status pupuk berhasil diubah']);
            }
        } else {
            return response()->json(['error' => 'Parameter control_sensor tidak diberikan']);
        }
    }


    public function getSensorData()
    {
        $sensorData = ControlSettings::all();
        return $this->sendMassage($sensorData, 200, true);
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