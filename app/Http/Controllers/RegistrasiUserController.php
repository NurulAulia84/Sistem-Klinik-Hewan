<?php
// REGISTRASI USER CONTROLLER
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi_user;

class RegistrasiUserController extends Controller
{
    // Menampilkan form registrasi
    public function register()
    {
        return view('register'); // Sesuaikan nama view
    }

    // Menangani form submission registrasi
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:registrasi_users', // Pastikan email unik di tabel registrasi_users
            'password' => 'required|string|min:8', // Bisa juga tambahkan konfirmasi password
        ]);

        // Insert data ke database
        $user = new Registrasi_user();
        $user->nama = $request->input('nama');
        $user->alamat = $request->input('alamat');
        $user->no_telepon = $request->input('no_telepon');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Pastikan password di-hash
        $user->save();

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
