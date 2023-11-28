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
        Schema::create('suratkeluar', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_surat');
            $table->string('no_surat');
            $table->string('perihal');
            $table->text('tujuan_penerima');
            $table->string('no_sertifikat_bln_keps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratkeluar');
    }
};
