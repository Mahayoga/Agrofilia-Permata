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
        Schema::create('detail_blok', function (Blueprint $table) {
            $table->unsignedInteger("id_detail_blok")->autoIncrement();
            $table->string("nama_blok");
            $table->enum("kondisi_blok", ["Normal", "Peringatan", "Bahaya"]);
            $table->enum("status_blok", ["Normal", "Masa Kritis"]);
            $table->enum("fase_tanaman", ["Generatif", "Vegetatif"]);
            $table->integer("id_kebun");
            $table->timestamps();

            // Foreign Key
            $table->foreign("id_detail_blok")->references("id_kebun")->on("kebun")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_blok');
    }
};
