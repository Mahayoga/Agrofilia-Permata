<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KebunModel;

class KebunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KebunModel::create([
            'nama_kebun' => 'Kebun Vanili Rembangan',
            'nama_daerah' => 'Baratan',
            'lokasi_kebun' => 'Kec. Jember, Jawa Timur',
            'status_kebun' => 'Normal'
        ]);
    }
}
