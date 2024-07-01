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
        Schema::create('aset_nonaktif', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aset_id')->unique();
            $table->date('tanggal');
            $table->date('sebab'); // non-aktif; keberadaan aset {dijual, dihibahkan, hilang, atau dibuang}
            $table->date('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset_nonaktif');
    }
};
