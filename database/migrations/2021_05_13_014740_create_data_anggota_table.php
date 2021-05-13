<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->date('tanggal_terdaftar')->nullable();
            $table->float('kontak',15)->nullable();
            $table->string('alamat',50)->nullable();     
            $table->enum('status_peminjaman',['Tidak ada','Meminjam']);
            $table->string('foto');
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
        Schema::dropIfExists('data_anggota');
    }
}
