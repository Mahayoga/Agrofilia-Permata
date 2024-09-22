<?php

namespace Database\Seeders;

use App\Models\MusimModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MusimModel::create([
            'kondisi_musim' => 'Kemarau'
        ]);
    }
}
