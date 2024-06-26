@extends('layout.main')

@section('container')
    <div class="container">
        <h5 style="text-align: center;">{{ $title }}</h5>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Hewan</th>
                    <th>Spesies</th>
                    <th>Ras</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hewans as $hewan)
                    <tr>
                        <td><a href="#" onclick="showAnimalDetail('{{ $hewan->nama }}')">{{ $hewan->nama }}</a></td>
                        <td>{{ $hewan->spesies }}</td>
                        <td>{{ $hewan->ras }}</td>
                        <td>{{ $hewan->umur }} tahun</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Button to trigger modal for adding new animal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAnimalModal">
            Tambah Hewan
        </button>
    </div>

    <!-- Modal for adding new animal -->
    <div class="modal fade" id="addAnimalModal" tabindex="-1" aria-labelledby="addAnimalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAnimalModalLabel">Tambah Hewan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addAnimalForm" method="POST" action="{{ route('hewans.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="animalName" class="form-label">Nama Hewan</label>
                            <input type="text" class="form-control" id="animalName" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="species" class="form-label">Spesies</label>
                            <input type="text" class="form-control" id="species" name="spesies" required>
                        </div>
                        <div class="mb-3">
                            <label for="breed" class="form-label">Ras</label>
                            <input type="text" class="form-control" id="breed" name="ras" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Umur</label>
                            <input type="text" class="form-control" id="age" name="umur" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for displaying animal details -->
    <div class="modal fade" id="animalDetailModal" tabindex="-1" aria-labelledby="animalDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="animalDetailModalLabel">Detail Hewan: <span id="animalNameDetail"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="animalDetail">
                        <!-- Detail data hewan akan dimuat di sini -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showAnimalDetail(animalName) {
            // Simpan nama hewan yang dipilih ke dalam modal
            document.getElementById('animalNameDetail').textContent = animalName;

            // Disini bisa melakukan pengambilan detail data hewan dari backend atau pengisian manual
            // Contoh sederhana untuk menampilkan detail
            var animalDetail = getAnimalDetail(animalName); // Fungsi untuk mengambil detail data hewan dari backend

            // Update konten modal dengan detail data hewan yang dipilih
            document.getElementById('animalDetail').innerHTML = animalDetail;

            // Tampilkan modal
            var modal = new bootstrap.Modal(document.getElementById('animalDetailModal'));
            modal.show();
        }

        // Fungsi sederhana untuk mendapatkan detail data hewan dari backend
        function getAnimalDetail(animalName) {
            // Implementasi pengambilan data dari backend bisa dilakukan di sini
            // Misalnya dengan menggunakan Ajax untuk mengambil data JSON
            // Contoh sederhana:
            switch (animalName) {
                case 'Kucing Lucy':
                    return '<p>Spesies: Kucing<br>Ras: Anggora<br>Umur: 3 tahun<br>Deskripsi: Lucy adalah kucing yang sangat manis dan ramah.</p>';
                case 'Anjing Max':
                    return '<p>Spesies: Anjing<br>Ras: Golden Retriever<br>Umur: 5 tahun<br>Deskripsi: Max adalah anjing yang aktif dan senang bermain bola.</p>';
                default:
                    return '<p>Informasi detail tidak tersedia saat ini.</p>';
            }
        }
    </script>
@endsection
