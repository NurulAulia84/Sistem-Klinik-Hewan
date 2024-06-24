<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reservasiAdminController extends Controller
{
    public function showReservasiForm()
    {
        return view('admin.riwayat', [
            "title" => "riwayat"
        ]);
    }

    public function Reservasi(Request $request)
    {
        
    }
}

