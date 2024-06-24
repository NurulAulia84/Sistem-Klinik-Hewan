<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jadwalAdminController extends Controller
{
    public function showjadwalAdminForm()
    {
        return view('admin.jadwalAdmin', [
            "title" => "jadwalAdmin"
        ]);
    }

    public function jadwalAdmin(Request $request)
    {
        
    }
}

