<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dokterController extends Controller
{
    public function showdokterForm()
    {
        return view('dokter', [
            "title" => "dokter"
        ]);
    }

    public function pembayaran(Request $request)
    {
        
    }
}

