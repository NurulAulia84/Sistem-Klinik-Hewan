@extends('layout.main')

@section('container')
  <h3>Daftar Pembayaran Pelanggan</h3>

  <div class="container">
    <div class="row">
      <div class="col-md-12">  <h4>Lunas</h4>
        <div class="table-responsive">
          <table class="table table-striped" style="width: 100%;">
            <thead>
              <tr>
                <th>ID Pasien</th>  <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Biaya</th>
                <th>Tindakan</th>
                <th>Resep Obat</th>
                <th>Total Pembayaran</th>
                <th>Cetak Invoice</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>203</td>  <td>ADE</td>
                <td>KALAPIAN</td>
                <td>Pendaftaran</td>
                <td>
                  <ul>
                    <li>1 Infus Rp. 30.000</li>
                  </ul>
                </td>
                <td>
                  <ul>
                    <li>ACE MAXS Rp. 105.000</li>
                    <li>Dokter Rp. 25.000</li>
                  </ul>
                </td>
                <td>Rp. 150.000</td>
                <td>
                  <a href="#" class="btn btn-success btn-sm">Cetak Invoice</a>
                </td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">  <h4>Belum Lunas</h4>
        <div class="table-responsive">
          <table class="table table-striped" style="width: 100%;">
            <thead>
              <tr>
                <th>ID Pasien</th>  <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Biaya</th>
                <th>Tindakan</th>
                <th>Resep Obat</th>
                <th>Total Pembayaran</th>
                <th>Bayar</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>28952</td>  <td>ZAHIRA HAIRUNISA BIN DEDE LUKMAN</td>
                <td>LEMPUYANG</td>
                <td>Pendaftaran</td>
                <td>
                  <ul>
                    <li>1 Infus Rp. 30.000</li>
                  </ul>
                </td>
                <td>
                  <ul>
                    <li>1 ABOCATH GEA Rp. 252.500</li>
                    <li>Dokter Rp. 20.000</li>
                    <li>ACE MAXS (10 x Rp 10.000) Rp. 100.000</li>
                  </ul>
                </td>
                <td>Rp. 550.000</td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">Bayar</a>
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
