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
        Schema::create('arsip_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat',50)->nullable();
            $table->date('tanggal_surat')->nullable();
            $table->string('tujuan',100)->nullable();
            $table->text('perihal')->nullable();
            $table->text('file_surat')->nullable();
            $table->text('qr_code')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsip_keluar');
    }
};
