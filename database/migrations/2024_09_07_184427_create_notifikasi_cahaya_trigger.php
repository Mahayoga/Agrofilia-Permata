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
            CREATE TRIGGER `notifikasi_sensor_cahaya` AFTER INSERT ON `tb_sensor`
            FOR EACH ROW 
            BEGIN
                IF NEW.esp_id = "soil2_data" && NEW.cahaya > 80 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Intensitas Cahaya", "Bahaya", CONCAT("Intensitas Cahaya telah mencapai diatas 50%. Sensor menyentuh angka: ", NEW.cahaya), NOW(), NOW());
                ELSEIF NEW.esp_id = "soil2_data" && NEW.cahaya < 30 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Intensitas Cahaya", "Peringatan", CONCAT("Intensitas Cahaya telah mencapai dibawah 30%. Sensor menyentuh angka: ", NEW.cahaya), NOW(), NOW());
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
        DB::raw('DROP TRIGGER `notifikasi_sensor_cahaya`');
    }
};
