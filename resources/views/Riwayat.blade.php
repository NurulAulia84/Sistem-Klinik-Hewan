@extends('layout.main')

@section('container')
<h3>Riwayat Reservasi Pelanggan</h3>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Selesai</h4>
            <div class="table-responsive">
                <table class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>ID Reservasi</th>
                            <th>Nama Pemilik</th>
                            <th>Nama Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Tanggal Reservasi</th>
                            <th>Keluhan</th>
                            <th>Tindakan</th>
                            <th>Total Biaya</th>
                            <th>Cetak Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>203</td>
                            <td>ADE</td>
                            <td>kitty</td>
                            <td>Kucing</td>
                            <td>01-06-2024</td>
                            <td>Muntah-muntah</td>
                            <td>
                                <ul>
                                    <li>1 Infus Rp. 30.000</li>
                                </ul>
                            </td>
                            <td>Rp. 30.000</td>
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
                            <th>Nama Pemilik</th>
                            <th>Nama Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Tanggal Reservasi</th>
                            <th>Keluhan</th>
                            <th>Tindakan</th>
                            <th>Total Biaya</th>
                            <th>Selesaikan</th>
                            <th>Hapus</th>
                            <th>Validasi Dokter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>28952</td>
                            <td>ZAHIRA HAIRUNISA BIN DEDE LUKMAN</td>
                            <td>Boy</td>
                            <td>Anjing</td>
                            <td>02-06-2024</td>
                            <td>Batuk</td>
                            <td>
                                <ul>
                                    <li>1 Infus Rp. 30.000</li>
                                </ul>
                            </td>
                            <td>Rp. 30.000</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Selesaikan</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Validasi</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
