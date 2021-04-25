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
            $table->string('nama',100);
            $table->string('judul_buku',100);
            $table->string('tgl_pinjam',10);
            $table->string('tgl_jatuh_tempo',10);
            $table->string('tgl_kembali',10);
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
