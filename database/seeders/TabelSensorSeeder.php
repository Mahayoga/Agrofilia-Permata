<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SensorModel;

class TabelSensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SensorModel::create([
            'esp_id' => 'soil1',
            'id_detail_blok'=> 1,
        ]);
        SensorModel::create([
            'esp_id' => 'soil2',
            'id_detail_blok'=> 1,
        ]);
        SensorModel::create([
            'esp_id' => 'soil3',
            'id_detail_blok'=> 1,
        ]);
        SensorModel::create([
            'esp_id' => 'soil4',
            'id_detail_blok'=> 1,
        ]);
        SensorModel::create([
            'esp_id' => 'soil5',
            'id_detail_blok'=> 1,
        ]);
        SensorModel::create([
            'esp_id' => 'soil6',
            'id_detail_blok'=> 1,
        ]);
    }
}
