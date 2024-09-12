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
            CREATE TRIGGER `notifikasi_mode` BEFORE UPDATE ON `mode`
            FOR EACH ROW 
            BEGIN
                IF NEW.id = 2 AND NEW.mode = 0 THEN
                    INSERT INTO notifikasi_mode VALUES (NULL, "Peringatan Mode", "Peringatan", "Penyiraman Air Telah Mati!", NOW());
                ELSEIF NEW.id = 2 AND NEW.mode = 1 THEN
                    INSERT INTO notifikasi_mode VALUES (NULL, "Peringatan Mode", "Peringatan", "Penyiraman Air Telah Hidup!", NOW());
                END IF;

                IF NEW.id = 3 AND NEW.mode = 0 THEN
                    INSERT INTO notifikasi_mode VALUES (NULL, "Peringatan Mode", "Peringatan", "Penyiraman Pupuk Telah Mati!", NOW());
                ELSEIF NEW.id = 3 AND NEW.mode = 1 THEN
                    INSERT INTO notifikasi_mode VALUES (NULL, "Peringatan Mode", "Peringatan", "Penyiraman Pupuk Telah Hidup!", NOW());
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
        DB::raw('DROP TRIGGER `notifikasi_mode`');
    }
};