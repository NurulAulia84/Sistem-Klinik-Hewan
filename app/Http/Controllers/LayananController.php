<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('layananKesehatan', [
            "title" => "layananKesehatan"
        ]);
    }

    public function pilihLayanan(Request $request)
    {
        $layanan = $request->input('layanan');
        // Logika untuk menangani pilihan layanan
        return redirect()->route('layananKesehatan')->with('success', 'Layanan telah dipilih.');
    }
}
