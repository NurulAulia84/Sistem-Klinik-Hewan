@extends('layout.main')

@section('container')

<div class="half-page-bg1">
    <div class="content-container1">

        <div class="card mb-3 w-100 doctor-card" data-doctor-name="Jane Smith">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="dokter3.jpg" class="img-thumbnail rounded-start" alt="Jane Smith">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Jane Smith</h5>
                        <p class="card-text">Dr. Jane Smith adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
                        <button class="login-button view-schedule-btn" data-bs-toggle="modal" data-bs-target="#scheduleModal" data-doctor-name="Jane Smith">Jadwal</button>
                        <a href="{{ url('janji-temu/jane-smith') }}" class="login-button">Buat janji</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 w-100 doctor-card" data-doctor-name="Elizabeth">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="dokter4.jpg" class="img-thumbnail rounded-start" alt="Elizabeth">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Elizabeth</h5>
                        <p class="card-text">Dr. Elizabeth adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
                        <button class="login-button view-schedule-btn" data-bs-toggle="modal" data-bs-target="#scheduleModal" data-doctor-name="Elizabeth">Jadwal</button>
                        <a href="{{ url('janji-temu/elizabeth') }}" class="login-button">Buat janji</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <div class="card mb-3 w-100 doctor-card" data-doctor-name="Lorial Spentus">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="dokter1.webp" class="img-thumbnail rounded-start" alt="Lorial Spentus">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Lorial Spentus</h5>
                        <p class="card-text">Dr. Lorial Spentus adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
                        <button class="login-button view-schedule-btn" data-bs-toggle="modal" data-bs-target="#scheduleModal" data-doctor-name="Lorial Spentus">Jadwal</button>
                        <a href="{{ url('janji-temu/lorial-spentus') }}" class="login-button">Buat janji</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 w-100 doctor-card" data-doctor-name="Jennifer">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="dokter2.jpg" class="img-thumbnail rounded-start" alt="Jennifer">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Jennifer</h5>
                        <p class="card-text">Dr. Jennifer adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.</p>
                        <button class="login-button view-schedule-btn" data-bs-toggle="modal" data-bs-target="#scheduleModal" data-doctor-name="Jennifer">Jadwal</button>
                        <a href="{{ url('janji-temu/jennifer') }}" class="login-button">Buat janji</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
