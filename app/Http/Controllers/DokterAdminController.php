<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokterAdminController extends Controller
{
    public function showTambahJadwalForm()
    {
        return view('admin.dokter', [
            "title" => "TambahJadwal"
        ]);
    }

    public function DokterAdmin(Request $request)
    {
        
    }
}

