<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\RegistrasiUserController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\hewanController;
use App\Http\Controllers\dokterController;
use App\Http\Controllers\DokterAdminController;
use App\Http\Controllers\hewanAdminController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/registrasi', function () {
    return view('registrasi', [
        "title" => "Registrasi"
    ]);
});

// use App\Http\Middleware\Authenticate;

// Route::get('/', function () {
//     return view('home');
// })->middleware(Authenticate::class);

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/homeAdmin', function () {
    return view('admin.home', [
        "title" => "Home admin"
    ]);
});

Route::get('/Sistem Klinik Hewan', function () {
    return view('beranda', [
        "title" => "Beranda"
    ]);
});

// Route::get('/dokter', function () {
//     return view('dokter', [
//         "title" => "dokter",
//         "name" => "Nurul Aulia",
//         "email" => "nrulauliaaaa@gmail.com",
//         "image" => "kucing.webp"
//     ]);
// });

// Route::get('/blog', function () {
//     return view('posts', [
//         "title" => "Posts"
//     ]);
// });

Route::get('/login', function () {
    return view('login', [
        "title" => "login"
    ]);
});

Route::get('/test-connection', function () {
    $results = DB::select('SELECT DATABASE()');
    return response()->json($results);
});


Route::get('pembayaran', [pembayaranController::class, 'showpembayaranForm'])->name('pembayaran');
Route::post('pembayaran', [pembayaranController::class, 'pembayaran']);

Route::get('dokter', [dokterController::class, 'showdokterForm'])->name('dokter');
Route::post('dokter', [dokterController::class, 'dokter']);

Route::get('Riwayat', [RiwayatController::class, 'showRiwayatForm'])->name('Riwayat');
Route::post('Riwayat', [RiwayatController::class, 'Riwayat']);

Route::get('DokterAdmin', [DokterAdminController::class, 'showTambahJadwalForm'])->name('DokterAdmin');
Route::post('DokterAdmin', [DokterAdminController::class, 'DOkterAdmin']);

Route::get('TambahHewan', [hewanAdminController::class, 'showTambahHewanForm'])->name('TambahHewan');
Route::post('TambahHewan', [hewanAdminController::class, 'TambahHewan']);

// Route untuk menampilkan halaman registrasi
Route::get('/registrasi_user', [RegistrasiUserController::class, 'register'])->name('registrasi.register');

// Route untuk menangani form submission registrasi
Route::post('/registrasi_user/registrasi', [RegistrasiUserController::class, 'store'])->name('registrasi.store');

use App\Http\Controllers\RegisterController;
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('jadwal', [jadwalController::class, 'showjadwalForm'])->name('jadwal');
Route::post('jadwal', [jadwalController::class, 'jadwal']);

Route::get('/blog', [PostController::class, 'index']);

use App\Http\Controllers\pembayaranAdminController;
Route::get('KelolahPembayaran', [pembayaranAdminController::class, 'showPembayaranForm'])->name('KelolahPembayaran');
Route::post('KelolahPembayaran', [pembayaranAdminController::class, 'KelolahPembayaran']);

use App\Http\Controllers\reservasiAdminController;
Route::get('KelolahReservasi', [reservasiAdminController::class, 'showReservasiForm'])->name('KelolahReservasi');
Route::post('KelolahReservasi', [reservasiAdminController::class, 'KelolahReservasi']);

use App\Http\Controllers\KelolahAkunController;
Route::get('KelolahAkun', [KelolahAkunController::class, 'showKelolahAkunForm'])->name('KelolahAkun');
Route::post('KelolahAkun', [KelolahAkunController::class, 'KelolahAkun']);

use App\Http\Controllers\KonfirmasiJanjiController;
Route::get('KonfirmasiJanji', [KonfirmasiJanjiController::class, 'showKonfirmasiJanjiForm'])->name('KonfirmasiJanji');
Route::post('KonfirmasiJanji', [KonfirmasiJanjiController::class, 'KonfirmasiJanji']);

use App\Http\Controllers\LayananController;
Route::get('/layananKesehatan', [LayananController::class, 'index'])->name('layananKesehatan');
Route::post('/pilih-layanan', [LayananController::class, 'pilihLayanan'])->name('pilih-layanan');

use App\Http\Controllers\jadwalAdminController;
Route::get('KelolahJadwal', [jadwalAdminController::class, 'showjadwalAdminForm'])->name('KelolahJadwal');
Route::post('KelolahJadwal', [jadwalAdminController::class, 'KelolahJadwal']);

use App\Http\Controllers\AppointmentController;
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');

Route::get('/hewans', [HewanController::class, 'index'])->name('hewan');
Route::post('/hewans', [HewanController::class, 'store'])->name('hewans.store');

// halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);

