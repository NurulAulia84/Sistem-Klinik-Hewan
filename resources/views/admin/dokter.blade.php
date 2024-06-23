@extends('layout.main')

@section('container')
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-ksmXA0SDEAB6yA1F85/1+1Yv/aHD1eF0HDoil/zCOZDlF4XigZFWCMOZxUjGlId7" crossorigin="anonymous">

<!-- Form Pencarian di luar kontainer card --> 
    <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal1" data-doctor-id="1">Tambah Jadwal</button>
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
            <a href="{{ ('janjiTemu') }}" class="login-button">Buat janji</a>
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
            <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal" data-doctor-id="1">Jadwal</button>
            <a href="{{ ('janjiTemu') }}" class="login-button">Buat janji</a>
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
            <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal" data-doctor-id="1">Jadwal</button>
            <a href="{{ ('janjiTemu') }}" class="login-button">Buat janji</a>
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
            <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal" data-doctor-id="1">Jadwal</button>
            <a href="{{ ('janjiTemu') }}" class="login-button">Buat janji</a>
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

// Modal for Doctor Schedule
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
      <label for="hariPraktek" class="form-label">Hari Praktek</label>
      <select class="form-select" id="hariPraktek" name="hariPraktek" required>
        <option value="" selected disabled>Pilih hari praktek</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="jamPraktek" class="form-label">Jam Praktek</label>
      <input type="time" class="form-control" id="jamPraktek" name="jamPraktek" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>

      </div>
    </div>
  </div>

  <div class="container mt-4">
@endsection