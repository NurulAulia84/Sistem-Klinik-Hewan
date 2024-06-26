@extends('layout.main')

@section('container')
<h4 style="text-align: center;">DAFTAR LAYANAN KESEHATAN HEWAN</h4>

<form action="/pilih-layanan" method="POST">
 @csrf
 <table class="table table-striped">
  <thead>
   <tr>
    <th>Pilih</th>
    <th>ID Layanan</th>
    <th>Nama Layanan</th>
    <th>Deskripsi</th>
    <th>Harga</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td><input type="checkbox" name="layanan[]" value="1"></td>
    <td>1</td>
    <td>Vaksinasi Rabies</td>
    <td>Pemberian vaksin untuk mencegah rabies pada hewan peliharaan.</td>
    <td>Rp 180.000</td>
   </tr>
   <tr>
    <td><input type="checkbox" name="layanan[]" value="2"></td>
    <td>2</td>
    <td>Sterilisasi Kucing</td>
    <td>Prosedur untuk mensterilkan kucing agar tidak berkembang biak.</td>
    <td>Rp 500.000</td>
   </tr>
   <tr>
    <td><input type="checkbox" name="layanan[]" value="3"></td>
    <td>3</td>
    <td>Grooming Anjing</td>
    <td>Layanan perawatan anjing termasuk mandi, potong kuku, dan sisir bulu.</td>
    <td>Rp 250.000</td>
   </tr>
   <tr>
    <td><input type="checkbox" name="layanan[]" value="4"></td>
    <td>4</td>
    <td>Pengobatan Infeksi Telinga</td>
    <td>Penanganan infeksi telinga pada hewan peliharaan dengan obat dan pembersihan telinga.</td>
    <td>Rp 255.000</td>
   </tr>
   <tr>
    <td><input type="checkbox" name="layanan[]" value="5"></td>
    <td>5</td>
    <td>Check-up Rutin</td>
    <td>Pemeriksaan kesehatan rutin untuk memastikan hewan peliharaan dalam kondisi sehat.</td>
    <td>Rp 100.000</td>
   </tr>
  </tbody>
 </table>
 <button type="submit" class="btn btn-primary">Pilih Layanan</button>
</form>
@endsection
