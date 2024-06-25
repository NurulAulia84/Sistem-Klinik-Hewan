<!-- resources/views/kelolah_akun.blade.php -->

@extends('layout.main')

@section('container')
    <h3>Halaman Kelola Akun Pengguna</h3>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah Akun Baru -->
    <button onclick="toggleAddAccountForm()" class="btn btn-primary mb-3">Tambah Akun Baru</button>

    <!-- Formulir Pendaftaran Akun Baru -->
    <div id="addAccountForm" style="display:none;">
        <form action="{{ route('KelolahAkun') }}" method="POST" onsubmit="handleFormSubmit(event)">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

    <!-- Daftar Akun Pengguna -->
    <div id="daftarAkun" class="row" style="display:none;">
        <div class="col-md-12">
            <h4>Daftar Akun Pengguna</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akun pengguna akan dimuat di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function toggleAddAccountForm() {
            var form = document.getElementById('addAccountForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
            document.getElementById('daftarAkun').style.display = 'none'; // Sembunyikan daftar akun setelah menampilkan form
        }

        function handleFormSubmit(event) {
            event.preventDefault();
            var form = event.target;
            var formData = new FormData(form);

            // Simulasikan pengiriman data dengan Ajax (gunakan XMLHttpRequest atau fetch)
            // Di sini Anda akan mengirim data dan kemudian memuat ulang daftar akun
            // Contoh sederhana:
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Tampilkan pesan sukses
                    alert(data.message);

                    // Sembunyikan form tambah akun
                    form.style.display = 'none';

                    // Tampilkan daftar akun (atau arahkan ke halaman daftar akun)
                    document.getElementById('daftarAkun').style.display = 'block';
                } else {
                    // Tampilkan pesan error jika ada
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Tampilkan pesan error umum jika terjadi kesalahan
                alert('Terjadi kesalahan saat mengirim data.');
            });
        }
    </script>
@endsection
