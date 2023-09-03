<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World!!!";
});

Route::get('/belajar', function () {
    echo '<h1>Hello Thomas Brian!</h1>';
    echo '<p>Sedang belajar Laravel 10.x</p>';
});

Route::get('/mahasiswa/fasilkom/thomas', function () {
    echo '<p><h2 style="text-align: center"><u>Welcome, THOMAS!!!</u></h2></p>';
});

Route::get('/pegawai/{nama}', function ($nama) {
    return "Tampilkan pegawai $nama"; 
});

Route::get('/stock/{jenis}/{merk}', function ($jenis, $merk) {
    return "Ini adalah sisa dari $jenis dengan $merk";
});

Route::get('/pilot/{maskapai}/{tipe}', function ($c, $d) {
    return "Pada hari ini $c dengan $d";
});

Route::get('/buah/{jenis?}/{satuan?}', function ($jenis = 'mangga', $satuan = 'kilogram') {
    return "Dewi membeli $jenis dengan $satuan.";
});

// Route REGEX
// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan ID = $id";
// })->where('id', '[0-9]+');

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan ID = $id";
})->where('id', '[A-Z]{2}[0-9]+');

// Route Redirect
Route::get('/hubungi-kami', function () {
    return "Ini Halaman Hubungi Kami.";
});

Route::redirect('/contact-us', '/hubungi-kami');

// Route Group
Route::prefix('/admin')->group(function () {
    Route::get('/dosen', function () {
        return "Ini halaman dosen.";
    });
    Route::get('/mahasiswa', function () {
        return "Ini halaman mahasiswa.";
    });
}); 

// Route Fallback
Route::fallback(function () {
    echo "Maaf halaman tidak ditemukan!";
});

