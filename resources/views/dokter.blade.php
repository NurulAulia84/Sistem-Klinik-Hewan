@extends('layout.main')

@section('container')
<link rel="stylesheet" href="style.css">

<!-- Form Pencarian di luar kontainer card -->
<div class="search-container">
  <form method="GET" action="{{ url('/search') }}">
    <input type="text" name="query" placeholder="Cari Dokter..." class="search-input">
    <button type="submit" class="search-button">Cari</button>
  </form>
</div>

<div class="half-page-bg1">
  <div class="content-container1">
  <div class="card mb-3 w-100 doctor-card" data-doctor-name="Jennifer">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="dokter3.jpg" class="img-thumbnail rounded-start" alt="lulu">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Dr. Jane Smith</h5>
            <p class="card-text">Dr. Jane Smith adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat 
                    dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
                    <a href="{{ ('jadwal') }}" class="login-button">Jadwal</a>
                    <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal1" data-doctor-id="1">Janji Temu</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 w-100 doctor-card" data-doctor-name="Elizabeth">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="dokter4.jpg" class="img-thumbnail rounded-start" alt="lulu">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Dr. Elizabeth</h5>
            <p class="card-text">Dr. Elizabeth adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat 
                    dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
            <a href="{{ ('jadwal') }}" class="login-button">Jadwal</a>
            <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal1" data-doctor-id="1">Janji Temu</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="half-page-bg1">
  <div class="content-container1">
  <div class="card mb-3 w-100 doctor-card" data-doctor-name="Lorial">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="dokter1.webp" class="img-thumbnail rounded-start" alt="lulu">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Dr. Lorial Spentus</h5>
            <p class="card-text">Dr. Lorial Spentus adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat 
                    dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
            <a href="{{ ('jadwal') }}" class="login-button">Jadwal</a>
            <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal1" data-doctor-id="1">Janji Temu</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card mb-3 w-100 doctor-card" data-doctor-name="Jennifer">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="dokter2.jpg" class="img-thumbnail rounded-start" alt="lulu">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Dr. Jennifer</h5>
            <p class="card-text">Dr. Jennifer adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat 
                    dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
            <a href="{{ ('jadwal') }}" class="login-button">Jadwal</a>
            <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal1" data-doctor-id="1">Janji Temu</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Fungsi untuk mengarahkan ke card dokter yang sesuai
    document.getElementById('searchForm').addEventListener('submit', function (event) {
      event.preventDefault();
      var query = document.getElementById('searchInput').value.toLowerCase();
      var doctorCards = document.querySelectorAll('.doctor-card');
      var found = false;

      doctorCards.forEach(function (card) {
        var doctorName = card.getAttribute('data-doctor-name').toLowerCase();
        if (doctorName.includes(query)) {
          card.scrollIntoView({ behavior: 'smooth' });
          card.style.border = "2px solid #000"; 
          found = true;
        } else {
          card.style.border = "none"; 
      });

      if (!found) {
        alert("Dokter tidak ditemukan. Coba cari dengan kata kunci lain.");
      }
    });
  });
</script>

<!-- Modal janji temu -->
<div class="modal fade" id="scheduleModal1" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scheduleModalLabel">Buat Janji</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('appointments.store') }}">
    @csrf
    <div class="mb-3">
        <label for="nama_hewan" class="form-label">Nama Hewan</label>
        <input type="text" class="form-control" id="nama_hewan" name="nama_hewan" required>
    </div>
    <div class="mb-3">
        <label for="umur" class="form-label">Umur</label>
        <input type="text" class="form-control" id="umur" name="umur" required>
    </div>
    <div class="mb-3">
        <label for="ras" class="form-label">Ras</label>
        <input type="text" class="form-control" id="ras" name="ras" required>
    </div>
    <div class="mb-3">
        <label for="spesies" class="form-label">Spesies</label>
        <input type="text" class="form-control" id="spesies" name="spesies" required>
    </div>
    <div class="mb-3">
        <label for="keluhan" class="form-label">Keluhan</label>
        <input type="text" class="form-control" id="keluhan" name="keluhan" required>
    </div>
    <div class="mb-3">
        <label for="dokter" class="form-label">Dokter</label>
        <select class="form-select" id="dokter" name="dokter" required>
            <option value="">Pilih Dokter</option>
            <option value="Dr. Jane Smith">Dr. Jane Smith</option>
            <option value="Dr. Jennifer">Dr. Jennifer</option>
            <option value="Dr. Elizabeth">Dr. Elizabeth</option>
            <option value="Dr. Lorial Spentus">Dr. Lorial Spentus</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>
    <div class="mb-3">
        <label for="waktu" class="form-label">Waktu</label>
        <input type="time" class="form-control" id="waktu" name="waktu" required>
    </div>
    <button type="submit" class="login-button">Buat Janji Temu</button>
</form>
            </div>
        </div>
    </div>
</div>

@endsection