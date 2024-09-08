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
        DB::raw('
            DELIMITER //
            CREATE TRIGGER `notifikasi_sensor_kelembaban_tanah` AFTER INSERT ON `tb_sensor`
            FOR EACH ROW BEGIN
                IF NEW.kelembabantanah > 15 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Kelembaban Tanah", "Peringatan", CONCAT("Kelembaban Tanah pada lokasi sensor \'", NEW.esp_id, "\' telah mencapai diatas 15%. Sensor menyentuh angka: ", NEW.kelembabantanah), NOW(), NOW());
                ELSEIF NEW.kelembabantanah < 10 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Kelembaban Tanah", "Bahaya", CONCAT("Kelembaban Tanah pada lokasi sensor \'", NEW.esp_id, "\' telah mencapai dibawah 10%. Sensor menyentuh angka: ", NEW.kelembabantanah), NOW(), NOW());
                END IF;
            END //
            DELIMITER ;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::raw('DROP TRIGGER `notifikasi_sensor_kelembaban_tanah`');
    }
};
