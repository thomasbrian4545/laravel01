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

Route::get('/mahasiswa', function () {
    $arrMahasiswa = 
    [
        "mahasiswa01" => "Dewi Sartika", 
        "mahasiswa02" => "Agus Supardi"
    ];
    return view('universitas.mahasiswa', $arrMahasiswa);
});

Route::get('/pegawai', function () {
    $arrPegawai = ["Mangga", "Melon", "Jeruk", "Apel"];
    return view('universitas.pegawai', ['pegawai' => $arrPegawai]);
});

Route::get('/hewan', function () {
    $arrHewan = ["singa", "kambing", "jerapah", "gajah"];
    return view('universitas.hewan')->with('hewan', $arrHewan);
});

Route::get('/pilot/{nama}/{umur}/{kotaAsal}', function ($nama, $umur, $kotaAsal) {
    return view('universitas.pilot')
    ->with('nama', $nama)
    ->with('umur', $umur)
    ->with('kotaAsal', $kotaAsal);
});