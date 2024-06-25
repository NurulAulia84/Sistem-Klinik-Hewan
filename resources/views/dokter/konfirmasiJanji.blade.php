@extends('layout.main')

@section('container')
<link rel="stylesheet" href="style.css">

<div class="container mt-4">
    <h1>Konfirmasi Janji Temu</h1>


    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama Hewan</th>
                <th>Umur Hewan</th>
                <th>Ras</th>
                <th>Spesies</th>
                <th>Keluhan</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Dokter</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ session('nama_hewan') }}</td>
                <td>{{ session('umur_hewan') }}</td>
                <td>{{ session('ras') }}</td>
                <td>{{ session('spesies') }}</td>
                <td>{{ session('keluhan') }}</td>
                <td>{{ session('tanggal') }}</td>
                <td>{{ session('waktu') }}</td>
                <td>{{ session('dokter') }}</td>
            </tr>
        </tbody>
    </table>

    <form method="POST" action="{{ route('KonfirmasiJanji') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Konfirmasi Janji</button>
    </form>
</div>
@endsection
