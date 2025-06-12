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
        Schema::create('perubahan_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawai_id')->constrained('pegawai','id')->cascadeOnDelete();
            $table->string('jenis_perubahan',100)->nullable();
            $table->text('data_lama')->nullable();
            $table->text('data_baru')->nullable();
            $table->enum('status',['Disetujui','Ditolak','Menunggu'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perubahan_data');
    }
};
