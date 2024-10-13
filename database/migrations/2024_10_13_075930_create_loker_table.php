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
        Schema::create('loker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori_profesi')->constrained('kategori_profesi')->onDelete('cascade');
            $table->foreignId('id_perusahaan')->constrained('perusahaan')->onDelete('cascade');
            $table->string('judul');
            $table->string('nama_perusahaan');
            $table->text('deskripsi_loker');
            $table->string('gaji');
            $table->string('kualifikasi');
            $table->date('tanggal_posting');
            $table->date('akhir_pendaftaran');
            $table->enum('status', ['available', 'closed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loker');
    }
};
