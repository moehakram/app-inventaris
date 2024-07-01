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
        Schema::create('detail_aset', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aset_id')->nullable(false)->unique();
            $table->string('merk')->nullable(false)->default();
            $table->string('tipe')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('tahun_produksi')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_aset');
    }
};
