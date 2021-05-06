<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_buku', 5);
            $table->string('judul',100);
            $table->string('penerbit',100);
            $table->string('lokasi');
            $table->string('gambar')->nullable();
            $table->boolean('status_buku')->default(0);
            $table->string('kategori');
            $table->integer('jumlah_buku');
            $table->text('deskripsi')->nullable();
            $table->string('bahasa');
            $table->string('keterangan');
            $table->string('tahun');
            $table->string('subjek');
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
        Schema::dropIfExists('data_buku');
    }
}
