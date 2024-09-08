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
            CREATE TRIGGER `notifikasi_sensor_kelembaban_udara` AFTER INSERT ON `tb_sensor`
            FOR EACH ROW BEGIN
                IF NEW.esp_id = "soil1_data" && NEW.kelembaban > 15 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Kelembaban Udara", "Peringatan", CONCAT("Kelembaban Udara telah mencapai diatas 15%. Sensor menyentuh angka: ", NEW.kelembaban), NOW(), NOW());
                ELSEIF NEW.esp_id = "soil1_data" && NEW.kelembaban < 10 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Kelembaban Udara", "Peringatan", CONCAT("Kelembaban Udara telah mencapai dibawah 10%. Sensor menyentuh angka: ", NEW.kelembaban), NOW(), NOW());
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
        DB::raw('DROP TRIGGER `notifikasi_sensor_kelembaban_udara`');
    }
};
