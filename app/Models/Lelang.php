<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;
    protected $fillable = ['id_barang', 'tgl_lelang', 'harga_akhir', 'id_petugas', 'status'];
    protected $table = 'tb_lelang';
}
