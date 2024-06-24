@extends('layout.main')

@section('container')
<link rel="stylesheet" href="style.css">

    <div class="jadwal-container">
        <h2>Jadwal Dokter</h2>
        <table class="table table-bordered">
        <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal1" data-doctor-id="1">Tambah Jadwal</button>
            <thead>
                <tr>
                    <th>Nama Dokter</th>
                    <th>Spesialisasi</th>
                    <th>Tanggal Praktek</th>
                    <th>Jam Praktek</th>
                </tr>
            </thead>
        </table>
    </div>
<!-- Modal for Doctor Schedule -->
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
      <label for="spesialisasi" class="form-label">Spesialisasi</label>
      <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" placeholder="Masukkan spesialisasi dokter" required>
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

  <div class="container mt-4">
@endsection
