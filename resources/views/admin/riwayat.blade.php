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
                            <th>Nama Pemilik</th>
                            <th>Nama Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Tanggal Reservasi</th>
                            <th>Waktu</th>
                            <th>Dokter</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>203</td>
                            <td>ADE</td>
                            <td>kitty</td>
                            <td>Kucing</td>
                            <td>01-06-2024</td>
                            <td>09.00-10.30</td>
                            <td>Dr. Jennifer</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Hapus</a>
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
                            <th>Waktu</th>
                            <th>Dokter</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>28952</td>
                            <td>ZAHIRA HAIRUNISA BIN DEDE LUKMAN</td>
                            <td>Boy</td>
                            <td>Anjing</td>
                            <td>02-06-2024</td>
                            <td>10.00-11.30</td>
                            <td>Dr. Jane</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
