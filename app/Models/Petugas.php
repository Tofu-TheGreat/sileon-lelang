<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Foundation\Auth\Petugas as Authenticatable;

class Petugas extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['nama_petugas', 'username', 'password', 'id_level'];
    protected $table = 'tb_petugas';
    protected $hidden = ['password', 'rememberToken'];

    protected $casts = [
        'id_level' => 'integer',
    ];
}
