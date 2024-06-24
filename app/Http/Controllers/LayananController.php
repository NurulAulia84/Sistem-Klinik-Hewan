<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function showLayananForm()
    {
        return view('layananKesehatan', [
            "title" => "layananKesehatan"
        ]);
    }

    public function Layanan(Request $request)
    {
        
    }
}

