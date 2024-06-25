@extends('layout.main')

@section('container')
<h3 style="text-align: center;">Riwayat Reservasi Pelanggan</h3>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Selesai</h4>
            <div class="table-responsive">
                <table class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>ID Reservasi</th>
                            <th>Nama Hewan</th>
                            <th>Umur</th>
                            <th>Ras</th>
                            <th>Spesies</th>
                            <th>Keluhan</th>
                            <th>Dokter</th>
                            <th>Tanggal Reservasi</th>
                            <th>Waktu</th>
                            <th>Cetak Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Kitty</td>
                            <td>7 Bulan</td>
                            <td> -</td>
                            <td>Kucing</td>
                            <td>Batuk Pilek</td>
                            <td>Dr. Jane Smith</td>
                            <td>06-06-2024</td>
                            <td>11.00</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Cetak Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4>Belum Selesai</h4>
            <div class="table-responsive">
                <table class="table table-striped" style="width: 100%;">
                <thead>
                        <tr>
                            <th>ID Reservasi</th>
                            <th>Nama Hewan</th>
                            <th>Umur</th>
                            <th>Ras</th>
                            <th>Spesies</th>
                            <th>Keluhan</th>
                            <th>Dokter</th>
                            <th>Tanggal Reservasi</th>
                            <th>Waktu</th>
                            <th>Selesai</th>
                            <th>Batal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>05</td>
                            <td>Blacky</td>
                            <td>13 Bulan</td>
                            <td> -</td>
                            <td>Anjing</td>
                            <td>Muntah-Muntah</td>
                            <td>Dr. Jennifer</td>
                            <td>06-06-2024</td>
                            <td>11.00</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Selesaikan</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger btn-sm">Batalkan</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
