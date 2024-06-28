<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiUser extends Model
{
    use HasFactory;

    protected $table = 'registrasi_users';

    protected $fillable = [
        'nama', 'alamat', 'no_telepon', 'email', 'password',
    ];
}
