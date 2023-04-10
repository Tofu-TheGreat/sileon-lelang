<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = ['id_lelang', 'id_barang', 'id_user', 'penawaran_harga'];
    protected $table = 'history_lelang';
}
