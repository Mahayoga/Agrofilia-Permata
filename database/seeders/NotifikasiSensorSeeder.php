<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NotifikasiSensorModel;

class NotifikasiSensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NotifikasiSensorModel::create([
            'nama_notifikasi' => 'Peringatan Suhu',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Suhu telah mencapai dibawah 20.34°C!',
        ]);
        NotifikasiSensorModel::create([
            'nama_notifikasi' => 'Peringatan Suhu',
            'level_notifikasi' => 'Bahaya',
            'deskripsi' => 'Suhu telah mencapai diatas 31.23°C!',
        ]);

        NotifikasiSensorModel::create([
            'nama_notifikasi' => 'Peringatan Kelembaban Udara',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Kelembaban Udara telah mencapai diatas 15%. Sensor menyentuh angka: 69',
        ]);
        NotifikasiSensorModel::create([
            'nama_notifikasi' => 'Peringatan Kelembaban Udara',
            'level_notifikasi' => 'Bahaya',
            'deskripsi' => 'Kelembaban Udara telah mencapai diatas 15%. Sensor menyentuh angka: 69',
        ]);

        NotifikasiSensorModel::create([
            'nama_notifikasi' => 'Peringatan Cahaya',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Intensitas Cahaya telah mencapai diatas 50%. Sensor menyentuh angka: 90',
        ]);
        NotifikasiSensorModel::create([
            'nama_notifikasi' => 'Peringatan Cahaya',
            'level_notifikasi' => 'Bahaya',
            'deskripsi' => 'Intensitas Cahaya telah mencapai diatas 50%. Sensor menyentuh angka: 90',
        ]);

        NotifikasiSensorModel::create([
            'nama_notifikasi' => 'Peringatan Kelembaban Tanah',
            'level_notifikasi' => 'Peringatan',
            'deskripsi' => 'Kelembaban Tanah pada lokasi sensor \'soil1_data\' telah mencapai dibawah 10%. Sensor menyentuh angka: -64',
        ]);
        NotifikasiSensorModel::create([
            'nama_notifikasi' => 'Peringatan Kelembaban Tanah',
            'level_notifikasi' => 'Bahaya',
            'deskripsi' => 'Kelembaban Tanah pada lokasi sensor \'soil1_data\' telah mencapai dibawah 10%. Sensor menyentuh angka: -64',
        ]);
    }
}
