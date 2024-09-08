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
        Schema::create('notifikasi_sensor', function (Blueprint $table) {
            $table->id("id_notifikasi");
            $table->string("nama_notifikasi");
            $table->enum("level_notifikasi", ["Normal", "Peringatan", "Bahaya"]);
            $table->text("deskripsi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi_sensor');
    }
};
