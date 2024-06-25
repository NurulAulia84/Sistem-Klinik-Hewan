@extends('layout.main')

@section('container')
<link rel="stylesheet" href="style.css">

<div class="jadwal-container">
    <h2>Jadwal Dokter</h2>
    <button class="login-button" data-bs-toggle="modal" data-bs-target="#scheduleModal1" data-doctor-id="1">Tambah Jadwal</button>
    <div class="table-responsive">
        <table class="table table-striped" style="width: 100%;">
            <thead>
                <tr>
                    <th>Nama Dokter</th>
                    <th>Spesialisasi</th>
                    <th>Tanggal Praktek</th>
                    <th>Waktu Praktek</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dr. Jane Smith</td>
                    <td>Dokter Kucing</td>
                    <td>20-April-2024</td>
                    <td>07.00-12.00</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" data-doctor='{"name":"Dr. Jane Smith", "specialization":"Dokter Kucing", "date":"2024-04-20", "time":"07:00"}'>Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(1)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>Dr. Jennifer</td>
                    <td>Dokter Anjing</td>
                    <td>10-Desember-2024</td>
                    <td>07.00-12.00</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" data-doctor='{"name":"Dr. Jane Smith", "specialization":"Dokter Kucing", "date":"2024-04-20", "time":"07:00"}'>Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(1)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>Dr. Lorial Spentus</td>
                    <td>Dokter Kucing</td>
                    <td>12-September-2024</td>
                    <td>07.00-12.00</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" data-doctor='{"name":"Dr. Jane Smith", "specialization":"Dokter Kucing", "date":"2024-04-20", "time":"07:00"}'>Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(1)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>Dr. Elizabeth</td>
                    <td>Dokter Anjing</td>
                    <td>15-Juni-2024</td>
                    <td>07.00-12.00</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" data-doctor='{"name":"Dr. Jane Smith", "specialization":"Dokter Kucing", "date":"2024-04-20", "time":"07:00"}'>Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(1)">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal for Add Doctor Schedule -->
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
                        <label for="tanggalPraktek" class="form-label">Tanggal Praktek</label>
                        <input type="date" class="form-control" id="tanggalPraktek" name="tanggalPraktek" required>
                    </div>
                    <div class="mb-3">
                        <label for="jamPraktek" class="form-label">Jam Praktek</label>
                        <input type="time" class="form-control" id="jamPraktek" name="jamPraktek" required>
                    </div>
                    <button type="submit" class="login-button">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Edit Doctor Schedule -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Jadwal Dokter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="mb-3">
                        <label for="editNamaDokter" class="form-label">Nama Dokter</label>
                        <input type="text" class="form-control" id="editNamaDokter" name="namaDokter" required>
                    </div>
                    <div class="mb-3">
                        <label for="editSpesialisasi" class="form-label">Spesialisasi</label>
                        <input type="text" class="form-control" id="editSpesialisasi" name="spesialisasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTanggalPraktek" class="form-label">Tanggal Praktek</label>
                        <input type="date" class="form-control" id="editTanggalPraktek" name="tanggalPraktek" required>
                    </div>
                    <div class="mb-3">
                        <label for="editJamPraktek" class="form-label">Jam Praktek</label>
                        <input type="time" class="form-control" id="editJamPraktek" name="jamPraktek" required>
                    </div>
                    <button type="submit" class="login-button">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Script to fill edit modal with current data
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var doctor = button.getAttribute('data-doctor');
        var doctorData = JSON.parse(doctor);

        var modalTitle = editModal.querySelector('.modal-title');
        var nameInput = editModal.querySelector('#editNamaDokter');
        var specializationInput = editModal.querySelector('#editSpesialisasi');
        var dateInput = editModal.querySelector('#editTanggalPraktek');
        var timeInput = editModal.querySelector('#editJamPraktek');

        modalTitle.textContent = 'Edit Jadwal Dokter';
        nameInput.value = doctorData.name;
        specializationInput.value = doctorData.specialization;
        dateInput.value = doctorData.date;
        timeInput.value = doctorData.time;
    });

    // Script to handle delete action
    function deleteData(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            // Send delete request using AJAX or fetch API
            fetch(`/delete-doctor-schedule/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Remove the row from the table
                    document.querySelector(`tr[data-id="${id}"]`).remove();
                } else {
                    alert('Gagal menghapus data.');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    }
</script>
@endsection
