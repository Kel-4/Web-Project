<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    protected $table = 'data_pengunjung';
    protected $fillable = ['id_pengunjung', 'nama', 'tanggal_terdaftar', 'kontak', 'alamat'];
}
