<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
      <img src="LogoKlinik.png" alt="Klinik Hewan Logo" style="height: 150px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Posts') ? 'active' : '' }}" href="/blog">Hewan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Posts') ? 'active' : '' }}" href="/blog">Riwayat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Posts') ? 'active' : '' }}" href="/blog">Pembayaran</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#userProfileModal">
              <i class="fas fa-user"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="userProfileModal" tabindex="-1" aria-labelledby="userProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userProfileModalLabel">Profil Anda</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-3">
            <img src="https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png?rev=2540745" class="img-fluid rounded-circle" alt="Foto Profil" width="150" height="150">
          </div>
          <p>Nama Pengguna: <span id="username"></span></p>
          <p>Profil Pengguna: <span id="userProfile"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Keluar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    @yield('container')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
  <script>
    // Fungsi untuk menampilkan informasi pengguna
    function showUserProfile() {
      // Simpan informasi pengguna di sini, misalnya:
      var username = "Nama Pengguna";
      var userProfile = "Profil Pengguna";
 
      // Setel teks modal sesuai dengan informasi pengguna
      document.getElementById("username").textContent = username;
      document.getElementById("userProfile").textContent = userProfile;
    }
  </script>

</body>
</html>
