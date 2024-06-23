<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pembayaranController extends Controller
{
    public function showpembayaranForm()
    {
        return view('pembayaran', [
            "title" => "pembayaran"
        ]);
    }

    public function pembayaran(Request $request)
    {
        // Tambahkan logika login Anda di sini
    }
}

