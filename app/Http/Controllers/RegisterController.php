<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validasi data input dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Simpan data ke dalam database
        $user = new User();
        $user->name = $request->nama;
        $user->alamat = $request->alamat;
        $user->phone = $request->no_telepon;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect ke halaman login atau halaman lainnya
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
