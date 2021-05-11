<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBuku extends Model
{
    use HasFactory;
    protected $table = 'data_buku';

    protected $fillable = ['id', 'judul', 'penerbit', 'lokasi', 'gambar', 'status_buku', 'kategori', 'jumlah_buku', 'deskripsi', 'bahasa', 'keterangan', 'tahun', 'subjek'];

    protected $primaryKey = 'id';
}
