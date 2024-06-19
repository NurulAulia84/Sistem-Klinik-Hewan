<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi_user extends Model
{
    use HasFactory;

    protected $table = 'registrasi_users'; // Nama tabel di database

    protected $fillable = [
        'nama',
        'alamat',
        'no_telepon',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
