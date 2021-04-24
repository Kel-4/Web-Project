<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_peminjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_peminjaman');
            $table->string('nama');
            $table->string('judul_buku',100);
            $table->string('tgl_pinjam',100);
            $table->string('tgl_jatuh_tempo');
            $table->string('tgl_kembali')->nullable();
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
        Schema::dropIfExists('data_peminjaman');
    }
}
