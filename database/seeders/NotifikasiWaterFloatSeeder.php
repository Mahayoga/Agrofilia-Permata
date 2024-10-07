<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NotifikasiWaterFloatModel;

class NotifikasiWaterFloatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NotifikasiWaterFloatModel::create([
            'nama_notifikasi' => 'Peringatan Ketersediaan Air',
            'level_notifikasi' => 'Normal',
            'deskripsi' => 'Tandon/Header terisi dengan air'
        ]);

        NotifikasiWaterFloatModel::create([
            'nama_notifikasi' => 'Peringatan Ketersediaan Air',
            'level_notifikasi' => 'Bahaya',
            'deskripsi' => 'Tandon/Header tidak terisi dengan air'
        ]);
    }
}
