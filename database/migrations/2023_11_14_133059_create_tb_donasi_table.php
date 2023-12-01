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
        Schema::create('tb_donasi', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['Diterima', 'Ditolak'])->default('Diterima');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->integer('jumlah');
            $table->string('foto');
            $table->string('keterangan');
            $table->foreignId('id_donatur')->constrained('tb_donatur');
            $table->foreignId('id_penerima')->constrained('tb_penerima');
            $table->foreignId('id_makanan')->constrained('tb_jenis_makanan')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_donasi');
    }
};
