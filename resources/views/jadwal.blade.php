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
                        <p class="card-text">Dr. Jane Smith adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat dan pengalaman klinis yang luas, dia telah menjadi salah satu Ahli Terkemuka dalam perawatan hewan.</p>
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
<!-- Tampilan Modal -->
<div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scheduleModalLabel">Jadwal Dokter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tanggal Praktek</th>
                            <th>Waktu Praktek</th>
                        </tr>
                    </thead>
                    <tbody id="scheduleModalBody">
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const viewScheduleButtons = document.querySelectorAll('.view-schedule-btn');

        viewScheduleButtons.forEach(button => {
            button.addEventListener('click', function () {
                const doctorName = button.getAttribute('data-doctor-name');
                const modalBody = document.getElementById('scheduleModalBody');
                modalBody.innerHTML = ''; // Kosongkan isi modal sebelum menambahkan data baru

                let doctorSchedule = [];

                // Simulasikan pengambilan jadwal dari sumber data (misalnya server)
                if (doctorName === 'Jane Smith') {
                    doctorSchedule = [
                        { date: '2024-04-01', time: '07:00-12:00' },
                        { date: '2024-04-05', time: '07:00-12:00' },
                        { date: '2024-04-10', time: '07:00-12:00' },
                        { date: '2024-04-15', time: '07:00-12:00' },
                        { date: '2024-04-20', time: '07:00-12:00' },
                        { date: '2024-04-25', time: '07:00-12:00' },
                        { date: '2024-04-30', time: '07:00-12:00' },
                    ];
                } else if (doctorName === 'Elizabeth') {
                    doctorSchedule = [
                        { date: '2024-04-03', time: '08:00-13:00' },
                        { date: '2024-04-07', time: '08:00-13:00' },
                        { date: '2024-04-12', time: '08:00-13:00' },
                        { date: '2024-04-17', time: '08:00-13:00' },
                        { date: '2024-04-22', time: '08:00-13:00' },
                        { date: '2024-04-27', time: '08:00-13:00' },
                        { date: '2024-04-30', time: '08:00-13:00' },
                    ];
                } else if (doctorName === 'Lorial Spentus') {
                    doctorSchedule = [
                        { date: '2024-04-02', time: '09:00-14:00' },
                        { date: '2024-04-06', time: '09:00-14:00' },
                        { date: '2024-04-11', time: '09:00-14:00' },
                        { date: '2024-04-16', time: '09:00-14:00' },
                        { date: '2024-04-21', time: '09:00-14:00' },
                        { date: '2024-04-26', time: '09:00-14:00' },
                        { date: '2024-04-29', time: '09:00-14:00' },
                    ];
                } else if (doctorName === 'Jennifer') {
                    doctorSchedule = [
                        { date: '2024-04-04', time: '10:00-15:00' },
                        { date: '2024-04-08', time: '10:00-15:00' },
                        { date: '2024-04-13', time: '10:00-15:00' },
                        { date: '2024-04-18', time: '10:00-15:00' },
                        { date: '2024-04-23', time: '10:00-15:00' },
                        { date: '2024-04-28', time: '10:00-15:00' },
                        { date: '2024-04-30', time: '10:00-15:00' },
                    ];
                }

                // Update modal title
                const modalTitle = document.getElementById('scheduleModalLabel');
                modalTitle.textContent = Jadwal ${doctorName};

                // Populate modal body with schedule data
                doctorSchedule.forEach(schedule => {
                    const tableRow = document.createElement('tr');
                    const tableDate = document.createElement('td');
                    tableDate.textContent = schedule.date;
                    const tableTime = document.createElement('td');
                    tableTime.textContent = schedule.time;
                    tableRow.appendChild(tableDate);
                    tableRow.appendChild(tableTime);
                    modalBody.appendChild(tableRow);
                });
            });
        });
    });
</script>

@endsection