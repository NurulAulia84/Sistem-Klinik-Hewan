<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pembayaranAdminController extends Controller
{
    public function showPembayaranForm()
    {
        return view('admin.Pembayaran', [
            "title" => "Pembayaran"
        ]);
    }

    public function Pembayaran(Request $request)
    {
        
    }
}

