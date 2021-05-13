<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pegawai', 100)->nullable();
            $table->string('nama', 100)->nullable();
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Wanita'])->nullable();
            $table->string('kontak', 100)->nullable();
            $table->string('alamat', 100)->nullable();
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
        Schema::dropIfExists('data_pegawai');
    }
}
