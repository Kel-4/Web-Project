<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggota extends Model
{
    use HasFactory;
    protected $table = 'data_anggota';
    protected $fillable = ['id', 'nama', 'jenis_kelamin', 'tanggal_terdaftar', 'kontak', 'alamat', 'status_peminjaman','foto'];
    protected $primaryKey = 'id';
}
