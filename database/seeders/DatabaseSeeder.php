<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(KebunSeeder::class);
        $this->call(DetailBlokSeeder::class);
        $this->call(ModeSeeder::class);
        $this->call(NotifikasiModeSeeder::class);
        $this->call(NotifikasiSensorSeeder::class);
        $this->call(TabelSensorSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GaleriSeeder::class);
    }
}
