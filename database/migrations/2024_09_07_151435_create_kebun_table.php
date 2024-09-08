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
        Schema::create('kebun', function (Blueprint $table) {
            $table->unsignedInteger("id_kebun")->autoIncrement();
            $table->string("nama_kebun");
            $table->string("nama_daerah");
            $table->string("lokasi_kebun");
            $table->enum("status_kebun", ["Normal", "Peringatan", "Bahaya"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebun');
    }
};
