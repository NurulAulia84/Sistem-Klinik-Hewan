@extends('layout.main')

@section('container')
    <div class="container">
        <h2 class="my-4">Data Hewan</h2>

        <!--- Button to trigger modal for adding new animal --->
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addAnimalModal">
            <i class="bi bi-plus-circle"></i> Tambah Hewan
        </button>

        <div class="row" id="animalTables">
            <!--- Konten tabel hewan akan dimuat di sini -->
        </div>
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
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
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
                        <h3 class="my-3">${species}</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Hewan</th>
                                        <th>Ras</th>
                                        <th>Umur</th>
                                    </tr>
                                </thead>
                                <tbody>
                `;

                groupedAnimals[species].forEach(function(animal) {
                    tableHTML += `
                        <tr>
                            <td><a href="#" class="text-primary" onclick="showAnimalDetail('${animal.name}')">${animal.name}</a></td>
                            <td>${animal.breed}</td>
                            <td>${animal.age}</td>
                        </tr>
                    `;
                });

                tableHTML += `
                                </tbody>
                            </table>
                        </div>
                    </div>
                `;
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

        function showAnimalDetail(animalName) {
            document.getElementById('animalNameDetail').textContent = animalName;
            var animalDetail = getAnimalDetail(animalName);
            document.getElementById('animalDetail').innerHTML = animalDetail;
            var modal = new bootstrap.Modal(document.getElementById('animalDetailModal'));
            modal.show();
        }

        function getAnimalDetail(animalName) {
            var animal = animals.find(a => a.name === animalName);
            if (animal) {
                return `<p><strong>Spesies:</strong> ${animal.species}<br><strong>Ras:</strong> ${animal.breed}<br><strong>Umur:</strong> ${animal.age}<br><strong>Deskripsi:</strong><br>${animal.description}</p>`;
            }
            return '<p>Informasi detail tidak tersedia saat ini.</p>';
        }
    </script>
@endsection


