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
        Schema::create('pengirimansurat', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->string('nama_perusahaan');
            $table->text('alamat');
            $table->string('kota_kab');
            $table->string('ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirimansurat');
    }
};
