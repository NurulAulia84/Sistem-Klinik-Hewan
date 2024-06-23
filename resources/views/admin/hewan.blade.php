@extends('layout.main')

@section('container')
<link rel="stylesheet" href="style.css">

    <div class="jadwal-container">
        <h2>Data Hewan</h2>
        <table class="table table-bordered">
        <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal1" data-doctor-id="1">Tambah Hewan</button>
            <thead>
                <tr>
                    <th>Nama hewan</th>
                    <th>Spesies</th>
                    <th>Ras</th>
                    <th>Umur</th>
                </tr>
            </thead>
        </table>
    </div>
<!-- Modal for Doctor Schedule -->
  <div class="modal fade" id="scheduleModal1" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="scheduleModalLabel">Tambah Hewan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form id="jadwalForm">
    <div class="mb-3">
      <label for="namaHewan" class="form-label">Nama hewan</label>
      <input type="text" class="form-control" id="namaHewan" name="namaHewan" required>
    </div>
    <div class="mb-3">
      <label for="spesies" class="form-label">Spesies</label>
      <input type="text" class="form-control" id="spesies" name="spesies"  required>
    </div>
    <div class="mb-3">
      <label for="ras" class="form-label">Ras</label>
      <input type="text" class="form-control" id="ras" name="ras" required>
    </div>
    <div class="mb-3">
      <label for="umur" class="form-label">Umur</label>
      <input type="number" class="form-control" id="umur" name="umur" required>
    </div>
    <button type="submit" class="login-button">Simpan</button>
  </form>
</div>

      </div>
    </div>
  </div>

  <div class="container mt-4">
@endsection
