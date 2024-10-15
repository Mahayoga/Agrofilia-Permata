<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LogSensorModel;

class LogSensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LogSensorModel::create([
            'id_sensor' => '1',
            'keterangan_sensor' => 'Suhu',
            'nilai_sensor' => '40',
        ]);
        LogSensorModel::create([
            'id_sensor' => '1',
            'keterangan_sensor' => 'Kelembaban Udara',
            'nilai_sensor' => '20',
        ]);
        LogSensorModel::create([
            'id_sensor' => '1',
            'keterangan_sensor' => 'Kelembaban Tanah',
            'nilai_sensor' => '13',
        ]);
        LogSensorModel::create([
            'id_sensor' => '2',
            'keterangan_sensor' => 'Cahaya',
            'nilai_sensor' => '18980',
        ]);
        LogSensorModel::create([
            'id_sensor' => '2',
            'keterangan_sensor' => 'Kelembaban Tanah',
            'nilai_sensor' => '10',
        ]);
        LogSensorModel::create([
            'id_sensor' => '3',
            'keterangan_sensor' => 'Kelembaban Tanah',
            'nilai_sensor' => '16',
        ]);
        LogSensorModel::create([
            'id_sensor' => '4',
            'keterangan_sensor' => 'Kelembaban Tanah',
            'nilai_sensor' => '17',
        ]);
        LogSensorModel::create([
            'id_sensor' => '5',
            'keterangan_sensor' => 'Kelembaban Tanah',
            'nilai_sensor' => '19',
        ]);
        LogSensorModel::create([
            'id_sensor' => '6',
            'keterangan_sensor' => 'Kelembaban Tanah',
            'nilai_sensor' => '21',
        ]);
    }
}
