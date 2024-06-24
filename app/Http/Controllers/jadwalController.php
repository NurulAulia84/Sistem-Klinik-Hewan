<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    public function showjadwalForm()
    {
        return view('jadwal', [
            "title" => "jadwal"
        ]);
    }

    public function jadwal(Request $request)
    {
        
    }
}

