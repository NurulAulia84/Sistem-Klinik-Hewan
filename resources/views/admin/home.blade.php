@extends('layout.app')

@section('container')
<link rel="stylesheet" href="style.css">

<div class="welcome-container">
    <h1>Selamat Datang!</h1>
    <p>Sistem klinik hewan online ini adalah untuk mengatasi
    beberapa kendala dalam proses mendapatkan layanan di klinik hewan saat ini.</p>
</div>

<div class="half-page-bg">
  <div class="content-container">
  </div>
</div>
<img src="kucinglucu.jpg" alt="Background Image" class="background-img">

<div class="card text-center" style="margin-top: 100px;">
<div class="box-container">
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ekstra link</h5>
        <a href="#">my account</a>
        <a href="#">my order</a>
        <a href="#">my favorite</a>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Info kontak</h5>
        <a href="#">my account</a>
        <a href="#">my order</a>
        <a href="#">my favorite</a>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div>
@endsection