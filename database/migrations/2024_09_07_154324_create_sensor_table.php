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
        Schema::create('sensor', function (Blueprint $table) {
            $table->id("id_sensor");
            $table->string("esp_id");
            // $table->string("keterangan_sensor");
            $table->unsignedInteger("id_detail_blok");

            // $table->decimal("suhu", 10, 2)->nullable();
            // $table->integer("kelembaban")->nullable();
            // $table->integer("cahaya")->nullable();
            // $table->float("kelembabantanah")->nullable();
            $table->timestamps();

            // Foreign Key
            $table->foreign("id_detail_blok")->references("id_detail_blok")->on("detail_blok")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_sensor');
    }
};
