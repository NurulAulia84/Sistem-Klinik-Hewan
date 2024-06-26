@extends('layout.main')

@section('container')
<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h5 style="text-align: center;">{{ $title }}</h5>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Id Janji</th>
                    <th>Nama Hewan</th>
                    <th>Umur</th>
                    <th>Ras</th>
                    <th>Spesies</th>
                    <th>Keluhan</th>
                    <th>Dokter</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
            @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->nama_hewan }}</td>
                <td>{{ $appointment->umur }}</td>
                <td>{{ $appointment->ras }}</td>
                <td>{{ $appointment->spesies }}</td>
                <td>{{ $appointment->keluhan }}</td>
                <td>{{ $appointment->dokter }}</td>
                <td>{{ $appointment->tanggal }}</td>
                <td>{{ $appointment->waktu }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
