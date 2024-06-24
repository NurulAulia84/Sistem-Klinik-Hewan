<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelolahAkunController extends Controller
{
    public function showKelolahAkunForm()
    {
        return view('admin.kelolahAkun', [
            "title" => "kelolahAkun"
        ]);
    }

    public function Reservasi(Request $request)
    {
        
    }
}

