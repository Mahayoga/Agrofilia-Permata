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
        Schema::create('notifikasi_detail_blok', function (Blueprint $table) {
            $table->id("id_notifikasi");
            $table->string("nama_notifikasi");
            $table->enum("level_notifikasi", ["Normal", "Peringatan", "Bahaya"]);
            $table->text("deskripsi");
            $table->unsignedInteger("id_detail_blok");
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
        Schema::dropIfExists('notifikasi_detail_blok');
    }
};
