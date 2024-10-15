<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('log_sensor', function (Blueprint $table) {
            $table->id("id_log_sensor");
            $table->unsignedBigInteger("id_sensor");
            $table->string("keterangan_sensor");
            $table->decimal("nilai_sensor", 10, 2);
            $table->timestamps();

            // Foreign Key
            $table->foreign("id_sensor")->references("id_sensor")->on("sensor");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_sensor');
    }
};
