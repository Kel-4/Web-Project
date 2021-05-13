<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengembalian extends Model
{
    use HasFactory;
    protected $table = 'data_peminjaman';

    protected $fillable = ['id', 'tgl_kembali', 'judul_buku'];

    protected $primaryKey = 'id';
}
