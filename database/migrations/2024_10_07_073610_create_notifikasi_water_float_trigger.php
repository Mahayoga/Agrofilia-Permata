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
            CREATE TRIGGER `notifikasi_water_float` AFTER UPDATE ON `mode`
            FOR EACH ROW
            BEGIN
                IF NEW.nama_mode = "water_float" && NEW.mode = 1 THEN
                    INSERT INTO notifikasi_water_float VALUES (null, "Peringatan Ketersediaan Air", "Normal", "Tandon/Header terisi dengan air", NOW(), NOW());
                ELSEIF NEW.nama_mode = "water_float" && NEW.mode = 0 THEN
                    INSERT INTO notifikasi_water_float VALUES (null, "Peringatan Ketersediaan Air", "Bahaya", "Tandon/Header tidak terisi dengan air", NOW(), NOW());
                END IF;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::raw('DROP TRIGGER `notifikasi_water_float`');
    }
};
