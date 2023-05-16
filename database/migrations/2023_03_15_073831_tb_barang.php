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
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->id('id_barang', 11);
            $table->string('nama_barang', 255);
            $table->date('tgl');
            $table->unsignedBigInteger('harga_awal');
            $table->enum('kategori', ['0', '1', '2', '3', '4', '5']);
            $table->string('deskripsi_barang', 255);
            $table->string('gambar', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_barang');
    }
};
