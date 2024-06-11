<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Nurul Aulia",
        "email" => "nrulauliaaaa@gmail.com",
        "image" => "kucing.webp"
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "login"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "register"
    ]);
});


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

use App\Http\Controllers\RegisterController;

Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

use App\Http\Controllers\janjiTemuController;

Route::get('janjiTemu', [janjiTemuController::class, 'showjanjiTemuForm'])->name('janjiTemu');
Route::post('janjiTemu', [janjiTemuController::class, 'janjiTemu']);


Route::get('/blog', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);