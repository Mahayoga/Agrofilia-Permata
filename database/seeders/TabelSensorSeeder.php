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
            'esp_id' => 'soil1_data',
            'suhu' => '38.49',
            'kelembaban' => '36',
            'cahaya' => null,
            'kelembabantanah' => 178
        ]);
        SensorModel::create([
            'esp_id' => 'soil2_data',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => '24562',
            'kelembabantanah' => 185
        ]);
        SensorModel::create([
            'esp_id' => 'soil3',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => -11
        ]);
        SensorModel::create([
            'esp_id' => 'soil4',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => -57
        ]);
        SensorModel::create([
            'esp_id' => 'soil5',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => 164
        ]);
        SensorModel::create([
            'esp_id' => 'soil3',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => 173
        ]);

        SensorModel::create([
            'esp_id' => 'soil1_data',
            'suhu' => '38.49',
            'kelembaban' => '36',
            'cahaya' => null,
            'kelembabantanah' => 178
        ]);
        SensorModel::create([
            'esp_id' => 'soil2_data',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => '24562',
            'kelembabantanah' => 185
        ]);
        SensorModel::create([
            'esp_id' => 'soil3',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => -11
        ]);
        SensorModel::create([
            'esp_id' => 'soil4',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => -57
        ]);
        SensorModel::create([
            'esp_id' => 'soil5',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => 164
        ]);
        SensorModel::create([
            'esp_id' => 'soil3',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => 173
        ]);

        SensorModel::create([
            'esp_id' => 'soil1_data',
            'suhu' => '38.49',
            'kelembaban' => '36',
            'cahaya' => null,
            'kelembabantanah' => 178
        ]);
        SensorModel::create([
            'esp_id' => 'soil2_data',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => '24562',
            'kelembabantanah' => 185
        ]);
        SensorModel::create([
            'esp_id' => 'soil3',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => -11
        ]);
        SensorModel::create([
            'esp_id' => 'soil4',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => -57
        ]);
        SensorModel::create([
            'esp_id' => 'soil5',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => 164
        ]);
        SensorModel::create([
            'esp_id' => 'soil3',
            'suhu' => null,
            'kelembaban' => null,
            'cahaya' => null,
            'kelembabantanah' => 173
        ]);
    }
}
