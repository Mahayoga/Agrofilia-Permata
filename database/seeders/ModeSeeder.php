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
            'mode' => 0
        ]);
        ModeModel::create([
            'mode' => 0
        ]);
        ModeModel::create([
            'mode' => 0
        ]);
    }
}
