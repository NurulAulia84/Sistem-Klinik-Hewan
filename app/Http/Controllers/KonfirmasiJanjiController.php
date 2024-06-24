<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonfirmasiJanjiController extends Controller
{
    public function showKonfirmasiJanjiForm()
    {
        return view('dokter.konfirmasiJanji', [
            "title" => "konfirmasiJanji"
        ]);
    }

    public function konfirmasiJanji(Request $request)
    {
        
    }
}

