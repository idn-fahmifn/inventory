<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ruangan')->unsigned(); //relasi ruangan sebagai penyimpanan
            $table->integer('id_kategori')->unsigned(); //relasi filter kategori
            $table->string('nomor_barang')->unique();
            $table->string('nama_barang');
            $table->string('gambar');
            $table->text('spek');
            $table->integer('stok');
            $table->string('satuan');
            $table->enum('kondisi',['baik','rusak','tidak layak']);
            $table->foreign('id_ruangan')->on('ruangan')->references('id')->onDelete('cascade');
            $table->foreign('id_kategori')->on('kategori')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
