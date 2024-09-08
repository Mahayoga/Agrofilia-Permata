<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NotifikasiModeModel;

class NotifikasiModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NotifikasiModeModel::create([
            'nama_notifikasi' => 'Peringatan Mode',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Penyiraman Air Telah Hidup!',
            'waktu' => now()
        ]);
        NotifikasiModeModel::create([
            'nama_notifikasi' => 'Peringatan Mode',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Penyiraman Air Telah Mati!',
            'waktu' => now()
        ]);
        NotifikasiModeModel::create([
            'nama_notifikasi' => 'Peringatan Mode',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Penyiraman Air Telah Hidup!',
            'waktu' => now()
        ]);
        NotifikasiModeModel::create([
            'nama_notifikasi' => 'Peringatan Mode',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Penyiraman Air Telah Mati!',
            'waktu' => now()
        ]);

        NotifikasiModeModel::create([
            'nama_notifikasi' => 'Peringatan Mode',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Penyiraman Pupuk Telah Hidup!',
            'waktu' => now()
        ]);
        NotifikasiModeModel::create([
            'nama_notifikasi' => 'Peringatan Mode',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Penyiraman Pupuk Telah Mati!',
            'waktu' => now()
        ]);
        NotifikasiModeModel::create([
            'nama_notifikasi' => 'Peringatan Mode',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Penyiraman Pupuk Telah Hidup!',
            'waktu' => now()
        ]);
        NotifikasiModeModel::create([
            'nama_notifikasi' => 'Peringatan Mode',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Penyiraman Pupuk Telah Mati!',
            'waktu' => now()
        ]);
    }
}
