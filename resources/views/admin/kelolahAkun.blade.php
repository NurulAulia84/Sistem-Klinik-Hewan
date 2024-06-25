<!-- resources/views/kelolah_akun.blade.php -->

@extends('layout.main')

@section('container')
    <h3>Daftar Pembayaran Pelanggan</h3>

    <h1>Halaman Kelola Akun Pengguna</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah Akun Baru -->
    <button onclick="document.getElementById('addAccountForm').style.display='block'">Tambah Akun Baru</button>

    <!-- Formulir Pendaftaran Akun Baru -->
    <div id="addAccountForm" style="display:none;">
        <form action="{{ route('KelolahAkun') }}" method="POST">
            @csrf
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Simpan</button>
        </form>
    </div>

    <!-- Daftar Akun Pengguna -->
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
 
    </table>
@endsection
