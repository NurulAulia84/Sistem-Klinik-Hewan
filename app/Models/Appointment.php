<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'nama_hewan', 'umur', 'ras', 'spesies', 'keluhan', 'dokter', 'tanggal', 'waktu'
    ];
}
