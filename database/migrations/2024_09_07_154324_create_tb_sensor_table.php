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
        Schema::create('tb_sensor', function (Blueprint $table) {
            $table->id();
            $table->string("esp_id");
            $table->decimal("suhu", 10, 2)->nullable();
            $table->integer("kelembaban")->nullable();
            $table->integer("cahaya")->nullable();
            $table->float("kelembabantanah")->nullable();
            $table->timestamps();
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
