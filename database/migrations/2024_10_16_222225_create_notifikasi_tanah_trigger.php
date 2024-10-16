<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE TRIGGER `notifikasi_sensor_tanah` AFTER INSERT ON `log_sensor`
            FOR EACH ROW 
            BEGIN
                IF NEW.keterangan_sensor = "kelembaban_tanah" && NEW.nilai_sensor > 80 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Kelembaban Tanah", "Bahaya", CONCAT("Kelembaban Tanah telah mencapai diatas 80%. Sensor menyentuh angka: ", NEW.nilai_sensor, " pada lokasi kebun ", (SELECT k.nama_kebun FROM sensor s INNER JOIN log_sensor ls ON NEW.id_sensor = s.id_sensor INNER JOIN detail_blok db ON s.id_detail_blok = db.id_detail_blok INNER JOIN kebun k ON db.id_kebun = k.id_kebun LIMIT 1), " dan lokasi blok ", (SELECT db.nama_blok FROM sensor s INNER JOIN log_sensor ls ON NEW.id_sensor = s.id_sensor INNER JOIN detail_blok db ON s.id_detail_blok = db.id_detail_blok INNER JOIN kebun k ON db.id_kebun = k.id_kebun LIMIT 1)), NOW(), NOW());
                ELSEIF NEW.keterangan_sensor = "kelembaban_tanah" && NEW.nilai_sensor < 15 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Kelembaban Tanah", "Peringatan", CONCAT("Kelembaban Tanah telah mencapai dibawah 15%. Sensor menyentuh angka: ", NEW.nilai_sensor, " pada lokasi kebun ", (SELECT k.nama_kebun FROM sensor s INNER JOIN log_sensor ls ON NEW.id_sensor = s.id_sensor INNER JOIN detail_blok db ON s.id_detail_blok = db.id_detail_blok INNER JOIN kebun k ON db.id_kebun = k.id_kebun LIMIT 1), " dan lokasi blok ", (SELECT db.nama_blok FROM sensor s INNER JOIN log_sensor ls ON NEW.id_sensor = s.id_sensor INNER JOIN detail_blok db ON s.id_detail_blok = db.id_detail_blok INNER JOIN kebun k ON db.id_kebun = k.id_kebun LIMIT 1)), NOW(), NOW());
                END IF;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::raw('DROP TRIGGER `notifikasi_sensor_tanah`');
    }
};
