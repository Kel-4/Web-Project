<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeminjaman extends Model
{
    use HasFactory;
    protected $table = 'data_peminjaman';
    
    protected $fillable = ['id', 'tgl_pinjam', 'tgl_jatuh_tempo', 'nama', 'judul', 'tgl_kembali'];

    protected $primaryKey = 'id';

    public function DataBuku() 
    {
        return $this->belongsTo('App\Models\DataBuku', 'id_buku');
    }

    public function Pengunjung() 
    {
        return $this->belongsTo('App\Models\Pengunjung', 'id_pengunjung');
    }
}
