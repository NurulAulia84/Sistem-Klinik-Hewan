<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{

    public function index()
    {
        // Ambil semua janji temu dari database
        $title = 'RIWAYAT JANJI TEMU';
        $appointments = Appointment::all();

        // Tampilkan view dengan daftar janji temu
        return view('appointments.index', compact('appointments', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'umur' => 'required|string|max:255',
            'ras' => 'required|string|max:255',
            'spesies' => 'required|string|max:255',
            'keluhan' => 'required|string|max:255',
            'dokter' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
        ]);

        Appointment::create([
            'nama_hewan' => $request->nama_hewan,
            'umur' => $request->umur,
            'ras' => $request->ras,
            'spesies' => $request->spesies,
            'keluhan' => $request->keluhan,
            'dokter' => $request->dokter,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Janji temu berhasil dibuat!');
    }
}
