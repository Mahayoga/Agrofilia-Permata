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
            CREATE TRIGGER `notifikasi_sensor` AFTER INSERT ON `tb_sensor`
            FOR EACH ROW 
            BEGIN
                IF NEW.esp_id = "soil1_data" && NEW.suhu > 28 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Suhu", "Bahaya", CONCAT("Suhu telah mencapai diatas ", NEW.suhu, "°C!"), NOW(), NOW());
                ELSEIF NEW.esp_id = "soil1_data" && NEW.suhu < 20 THEN
                    INSERT INTO notifikasi_sensor VALUES (NULL, "Peringatan Suhu", "Peringatan", CONCAT("Suhu telah mencapai dibawah ", NEW.suhu, "°C!"), NOW(), NOW());
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
        DB::raw('DROP TRIGGER `notifikasi_sensor`');
    }
};
