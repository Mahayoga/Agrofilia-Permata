<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlokModel;

class DetailBlokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlokModel::create([
            'nama_blok' => 'Blok Satu',
            'kondisi_blok' => 'Normal',
            'status_blok' => 'Masa Kritis',
            'fase_tanaman' => 'Generatif',
            'id_kebun' => 1
        ]);
    }
}
