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
            CREATE TRIGGER `notifikasi_water_float` AFTER UPDATE ON `water_float`
            FOR EACH ROW
            BEGIN
                IF NEW.water = 1 THEN
                    INSERT INTO notifikasi_water_float VALUES (null, "Peringatan Ketersediaan Air", "Normal", "Tandon/Header terisi dengan air", NOW(), NOW());
                ELSEIF NEW.water = 0 THEN
                    INSERT INTO notifikasi_water_float VALUES (null, "Peringatan Ketersediaan Air", "Bahaya", "Tandon/Header tidak terisi dengan air", NOW(), NOW());
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
        Schema::dropIfExists('notifikasi_water_float_trigger');
    }
};
