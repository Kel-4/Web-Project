<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengembalian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',100);
            $table->date('tgl_pinjam',10);
            $table->date('tgl_kembali')->nullable();
            $table->string('denda')->nullable();
            $table->string('status_pengembalian')->nullable();
            $table->unsignedInteger('id_buku');
            $table->unsignedInteger('id_anggota')->references('id')->on('data_anggota')->onDelete('cascade');
            $table->unsignedInteger('id_pegawai')->references('id')->on('data_pegawai')->onDelete('cascade');
            $table->foreign('id_buku')->references('id')->on('data_buku')->onDelete('cascade');
            $table->foreign('id_anggota')->references('id')->on('data_anggota')->onDelete('cascade');
            $table->foreign('id_pegawai')->references('id')->on('data_pegawai')->onDelete('cascade');
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
        Schema::dropIfExists('data_pengembalian');
    }
}
