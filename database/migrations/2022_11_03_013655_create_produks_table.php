<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->string('kd_produk')->unique();
            $table->string('id_category');
            $table->string('nama_produk')->unique();
            $table->string('merk')->nullable();
            $table->string('harga_beli');
            $table->string('harga_jual');
            $table->integer('stok');
            $table->string('image');
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
        Schema::dropIfExists('produks');
    }
}
