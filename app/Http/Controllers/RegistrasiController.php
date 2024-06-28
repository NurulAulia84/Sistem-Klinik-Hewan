<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrasiUser;

class RegistrasiController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:registrasi_users',
            'password' => 'required|string|min:8',
        ]);

        // Simpan data ke dalam tabel 'registrasi_users'
        $user = new RegistrasiUser();
        $user->nama = $request->nama;
        $user->alamat = $request->alamat;
        $user->no_telepon = $request->no_telepon;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Enkripsi password menggunakan bcrypt
        $user->save();

        // Redirect ke halaman login setelah pendaftaran berhasil
        return redirect()->route('login');
    }
}
