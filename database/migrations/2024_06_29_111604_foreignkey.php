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
        Schema::table('inventaris', function (Blueprint $table) {
            $table->foreign('lokasi_id')->on('lokasi')->references('id')->onDelete('cascade');
        });
        
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->foreign('inventaris_id')->on('inventaris')->references('id')->onDelete('cascade');
            $table->foreign('pegawai_id')->on('pegawai')->references('id')->onDelete('cascade');
        });
        
        Schema::table('pengembalian', function (Blueprint $table) {
            $table->foreign('peminjaman_id')->references('id')->on('peminjaman')->onDelete('cascade');
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
