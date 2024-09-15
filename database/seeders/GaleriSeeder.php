<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GaleriModel;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GaleriModel::create([
            'judul_galeri' => 'Test Galeri',
            'deskripsi_galeri' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, veniam pariatur. Voluptas dolorum distinctio sequi facilis reprehenderit unde dolor asperiores animi praesentium perferendis iusto modi repudiandae atque ab, similique consequatur!',
            'dokumentasi_kegiatan' => 'dd',
            'file_type' => 'image/jpg'
        ]);
    }
}
