<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function showRiwayatForm()
    {
        return view('Riwayat', [
            "title" => "Riwayat"
        ]);
    }

    public function Riwayat(Request $request)
    {
        // Tambahkan logika login Anda di sini
    }
}

