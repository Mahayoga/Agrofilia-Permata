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
            CREATE TRIGGER `notifikasi_sensor_cahaya` AFTER INSERT ON `log_sensor`
            FOR EACH ROW 
            BEGIN
                IF (SELECT s.esp_id FROM sensor s INNER JOIN log_sensor ls ON s.id_sensor = NEW.id_sensor WHERE ls.keterangan_sensor = "cahaya" AND s.esp_id = "soil2" ORDER BY ls.created_at DESC LIMIT 1) = "soil2" && NEW.nilai_sensor > 23000 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Intensitas Cahaya", "Bahaya", CONCAT("Intensitas Cahaya telah mencapai diatas 23000. Sensor menyentuh angka: ", NEW.nilai_sensor, " pada lokasi kebun ", (SELECT k.nama_kebun FROM sensor s INNER JOIN log_sensor ls ON NEW.id_sensor = s.id_sensor INNER JOIN detail_blok db ON s.id_detail_blok = db.id_detail_blok INNER JOIN kebun k ON db.id_kebun = k.id_kebun LIMIT 1), " dan lokasi blok ", (SELECT db.nama_blok FROM sensor s INNER JOIN log_sensor ls ON NEW.id_sensor = s.id_sensor INNER JOIN detail_blok db ON s.id_detail_blok = db.id_detail_blok INNER JOIN kebun k ON db.id_kebun = k.id_kebun LIMIT 1)), NOW(), NOW());
                ELSEIF (SELECT s.esp_id FROM sensor s INNER JOIN log_sensor ls ON s.id_sensor = NEW.id_sensor WHERE ls.keterangan_sensor = "cahaya" AND s.esp_id = "soil2" ORDER BY ls.created_at DESC LIMIT 1) = "soil2" && NEW.nilai_sensor < 1000 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Intensitas Cahaya", "Peringatan", CONCAT("Intensitas Cahaya telah mencapai dibawah 1000. Sensor menyentuh angka: ", NEW.nilai_sensor, " pada lokasi kebun ", (SELECT k.nama_kebun FROM sensor s INNER JOIN log_sensor ls ON NEW.id_sensor = s.id_sensor INNER JOIN detail_blok db ON s.id_detail_blok = db.id_detail_blok INNER JOIN kebun k ON db.id_kebun = k.id_kebun LIMIT 1), " dan lokasi blok ", (SELECT db.nama_blok FROM sensor s INNER JOIN log_sensor ls ON NEW.id_sensor = s.id_sensor INNER JOIN detail_blok db ON s.id_detail_blok = db.id_detail_blok INNER JOIN kebun k ON db.id_kebun = k.id_kebun LIMIT 1)), NOW(), NOW());
                END IF;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::raw('DROP TRIGGER `notifikasi_sensor_cahaya`');
    }
};
