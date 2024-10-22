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
        Schema::create('kesiapan_nikah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tingkat_pendidikan');
            $table->string('jumlah_penghasilan');
            $table->string('jumlah_tabungan');
            $table->string('usia');
            $table->string('tempat_tinggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesiapan_nikah');
    }
};
