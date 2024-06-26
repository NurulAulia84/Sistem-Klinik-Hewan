@extends('layout.main')

@section('container')
    <div class="container">
<<<<<<< HEAD
        <h3 style="text-align: center;">DATA HEWAN</h3>
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
                <tr>
                    <td><a href="#" onclick="showAnimalDetail('Kucing Lucy')">Kucing Lucy</a></td>
                    <td>Kucing</td>
                    <td>Anggora</td>
                    <td>3 tahun</td>
                </tr>
                <tr>
                    <td><a href="#" onclick="showAnimalDetail('Anjing Max')">Anjing Max</a></td>
                    <td>Anjing</td>
                    <td>Golden Retriever</td>
                    <td>5 tahun</td>
                </tr>
                <!-- Additional animal rows can be dynamically added here -->
            </tbody>
        </table>

        <!-- Button to trigger modal for adding new animal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAnimalModal">
            Tambah Hewan
=======

>>>>>>> a421df14ce5de95fc020c280d3acc8d9c14a9e5e
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
                    <form id="addAnimalForm">
                        <div class="mb-3">
                            <label for="animalName" class="form-label">Nama Hewan</label>
                            <input type="text" class="form-control" id="animalName" name="animalName" required>
                        </div>
                        <div class="mb-3">
                            <label for="species" class="form-label">Spesies</label>
                            <input type="text" class="form-control" id="species" name="species" required>
                        </div>
                        <div class="mb-3">
                            <label for="breed" class="form-label">Ras</label>
                            <input type="text" class="form-control" id="breed" name="breed" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Umur</label>
                            <input type="text" class="form-control" id="age" name="age" required>
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
<<<<<<< HEAD
=======
        var animals = [
            { name: 'Kucing Lucy', species: 'Kucing', breed: 'Anggora', age: '3 tahun', description: 'Kucing yang sangat lucu dan manis.' },
            { name: 'Anjing Max', species: 'Anjing', breed: 'Golden Retriever', age: '5 tahun', description: 'Anjing yang sangat setia dan ramah.' }
        ];

        function groupAnimalsBySpecies(animals) {
            var groupedAnimals = animals.reduce(function(groups, animal) {
                var species = animal.species;
                if (!groups[species]) {
                    groups[species] = [];
                }
                groups[species].push(animal);
                return groups;
            }, {});

            return groupedAnimals;
        }

        function renderAnimalTables() {
            var animalTables = document.getElementById('animalTables');
            var groupedAnimals = groupAnimalsBySpecies(animals);
            var tableHTML = '';

            for (var species in groupedAnimals) {
                tableHTML += `
                    <div class="col-md-6">

                `;

                groupedAnimals[species].forEach(function(animal) {
                    tableHTML += `
                        <tr>

                            <td>${animal.breed}</td>
                            <td>${animal.age}</td>
                        </tr>
                    `;
                });


            }

            animalTables.innerHTML = tableHTML;
        }

        document.addEventListener('DOMContentLoaded', function() {
            renderAnimalTables();
        });

        document.getElementById('addAnimalForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var animalName = document.getElementById('animalName').value;
            var species = document.getElementById('species').value;
            var breed = document.getElementById('breed').value;
            var age = document.getElementById('age').value;
            var description = document.getElementById('description').value;

            animals.push({ name: animalName, species: species, breed: breed, age: age, description: description });

            document.getElementById('addAnimalForm').reset();

            var modal = new bootstrap.Modal(document.getElementById('addAnimalModal'));
            modal.hide();

            renderAnimalTables();
        });

>>>>>>> a421df14ce5de95fc020c280d3acc8d9c14a9e5e
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

        // Fungsi untuk menambahkan hewan baru
        document.getElementById('addAnimalForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Ambil nilai dari form
            var animalName = document.getElementById('animalName').value;
            var species = document.getElementById('species').value;
            var breed = document.getElementById('breed').value;
            var age = document.getElementById('age').value;

            // Tambahkan row baru ke tabel
            var tableBody = document.querySelector('tbody');
            var newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td><a href="#" onclick="showAnimalDetail('${animalName}')">${animalName}</a></td>
                <td>${species}</td>
                <td>${breed}</td>
                <td>${age}</td>
            `;
            tableBody.appendChild(newRow);

            // Reset form
            document.getElementById('addAnimalForm').reset();

            // Tutup modal
            var modal = new bootstrap.Modal(document.getElementById('addAnimalModal'));
            modal.hide();
        });

        // Fungsi sederhana untuk mendapatkan detail data hewan dari backend
        function getAnimalDetail(animalName) {

            }
        }
    </script>
@endsection
