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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ruangan')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->string('nama_barang');
            $table->string('gambar');
            $table->enum('kondisi',['baik','rusak','tidak_layak']);
            $table->foreign('id_ruangan')->on('ruangan')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kategori')->on('kategori')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
