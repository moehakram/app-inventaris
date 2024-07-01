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
        Schema::create('riwayat_aset', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aset_id')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('penanggung_jawab');
            $table->string('lokasi');
            $table->string('qty');
            $table->string('kondisi');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_aset');
    }
};
