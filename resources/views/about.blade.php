@extends('layout.main')

@section('container')
<link rel="stylesheet" href="style.css">

<div class="half-page-bg1">
  <div class="content-container1">
    <div class="card mb-3 w-100 zigzag">
      <div class="row g-0">
        <div class="col-md-4 order-md-1 order-2">
          <img src="dokter3.jpg" class="img-thumbnail rounded-start" alt="lulu">
        </div>
        <div class="col-md-8 order-md-2 order-1">
          <div class="card-body">
            <h5 class="card-title">Dr.Jane Smith</h5>
            <p class="card-text">Dr. Jane Smith adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat 
                    dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
            <a href="{{ ( 'janjiTemu') }}" class="login-button">Buat janji</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 w-100 zigzag">
      <div class="row g-0">
        <div class="col-md-4 order-md-2 order-1">
          <img src="dokter4.jpg" class="img-thumbnail rounded-start" alt="lulu">
        </div>
        <div class="col-md-8 order-md-1 order-2">
          <div class="card-body">
            <h5 class="card-title">Dr.Elizabeth</h5>
            <p class="card-text">Dr. Elizabeth adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat 
                    dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
            <a href="{{ ( 'janjiTemu') }}" class="login-button">Buat janji</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 w-100 zigzag">
      <div class="row g-0">
        <div class="col-md-4 order-md-1 order-2">
          <img src="dokter1.webp" class="img-thumbnail rounded-start" alt="lulu">
        </div>
        <div class="col-md-8 order-md-2 order-1">
          <div class="card-body">
            <h5 class="card-title">Dr.Lorial Spentus</h5>
            <p class="card-text">Dr. lorial spentus adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat 
                    dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
            <a href="{{ ( 'janjiTemu') }}" class="login-button">Buat janji</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 w-100 zigzag">
      <div class="row g-0">
        <div class="col-md-4 order-md-2 order-1">
          <img src="dokter2.jpg" class="img-thumbnail rounded-start" alt="lulu">
        </div>
        <div class="col-md-8 order-md-1 order-2">
          <div class="card-body">
            <h5 class="card-title">Dr.Jennifer</h5>
            <p class="card-text">Dr. jennifer adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat 
                    dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
            <a href="{{ ( 'janjiTemu') }}" class="login-button">Buat janji</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
