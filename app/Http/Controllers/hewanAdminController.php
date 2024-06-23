<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class hewanAdminController extends Controller
{
    public function showTambahHewanForm()
    {
        return view('admin.hewan', [
            "title" => "TambahHewan"
        ]);
    }

    public function hewanAdmin(Request $request)
    {
        // Tambahkan logika login Anda di sini
    }
}

