<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class janjiTemuController extends Controller
{
    public function showjanjiTemuForm()
    {
        return view('janjiTemu');
    }

    public function janjiTemu(Request $request)
    {
        // Tambahkan logika login Anda di sini
    }
}

