<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeminjaman extends Model
{
    use HasFactory;
    protected $table = 'data_peminjaman';

    protected $fillable = ['id_peminjaman', 'nama', 'judul_buku', 'tgl_pinjam', 'tgl_jatuh_tempo'];

    protected $primaryKey = 'id';
}
