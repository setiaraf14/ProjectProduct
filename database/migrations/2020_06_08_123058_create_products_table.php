<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->string('nama_produk', 25);
            $table->char('jenis_produk', 2);
            $table->date('keluar_produk');
            $table->date('masuk_produk');
            $table->string('nama_pengelola', 25);
            $table->char('nik_pengelola', 4);
            $table->text('alamat_pengelola')->nullable();
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
        Schema::dropIfExists('products');
    }
}
