<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    public function index()
    {
        $title = "DAFTAR HEWAN";
        $hewans = Hewan::all();
        return view('hewan', compact('hewans', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'spesies' => 'required',
            'ras' => 'required',
            'umur' => 'required',
        ]);

        Hewan::create($request->all());

        return redirect()->route('hewan')->with('success', 'Hewan berhasil ditambahkan.');
    }
}
