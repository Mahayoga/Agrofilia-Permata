<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModeModel;

class ModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModeModel::create([
            'nama_mode' => 'atur_mode',
            'mode' => 0
        ]);
        ModeModel::create([
            'nama_mode' => 'kontrol_air',
            'mode' => 0
        ]);
        ModeModel::create([
            'nama_mode' => 'kontrol_pupuk',
            'mode' => 0
        ]);
        ModeModel::create([
            'nama_mode' => 'flag',
            'mode' => 0
        ]);
        ModeModel::create([
            'nama_mode' => 'water_float',
            'mode' => 0
        ]);
    }
}
