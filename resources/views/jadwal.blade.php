@extends('layout.main')

@section('container')
<link rel="stylesheet" href="style.css">

<div class="jadwal-container">
  <h2>Jadwal Dokter</h2>
  <div class="table-responsive">
    <table class="table table-striped" style="width: 100%;">
      <thead>
        <tr>
          <th>Nama Dokter</th>
          <th>Tanggal Praktek</th>
          <th>Waktu Praktek</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Dr. Jane Smith</td>
          <td>20-April-2024</td>
          <td>07.00-12.00</td>
        </tr>
        <tr>
          <td>Dr. Jennifer</td>
          <td>10-Desember-2024</td>
          <td>07.00-12.00</td>
        </tr>
        <tr>
          <td>Dr. Lorial Spentus</td>
          <td>12-September-2024</td>
          <td>07.00-12.00</td>
        </tr>
        <tr>
          <td>Dr. Elizabeth</td>
          <td>15-Juni-2024</td>
          <td>07.00-12.00</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="scheduleModal1" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scheduleModalLabel">Tambah Jadwal Dokter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="jadwalForm">
          <div class="mb-3">
            <label for="namaDokter" class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" id="namaDokter" name="namaDokter" placeholder="Masukkan nama dokter" required>
          </div>
          <div class="mb-3">
            <label for="tanggalPraktek" class="form-label">Tanggal Praktek</label>
            <input type="date" class="form-control" id="tanggalPraktek" name="tanggalPraktek" required>
          </div>
          <div class="mb-3">
            <label for="jamPraktek" class="form-label">Jam Praktek</label>
            <input type="time" class="form-control" id="jamPraktek" name="jamPraktek" required>
          </div>
          <button type="submit" class="login-button">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
