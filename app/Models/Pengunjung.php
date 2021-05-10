<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    protected $table = 'data_pengunjung';
    protected $fillable = ['id', 'nama', 'jenis_kelamin', 'tanggal_terdaftar', 'kontak', 'alamat', 'status_pinjam'];
}
