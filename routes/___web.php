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

Route::get('/salam', function () {
    return "Selamat malam.";
});

// Route::get('/user/{id}', function ($id) {
//     return "User ".$id; 
// });

Route::get('/user/{id?}', function ($id = 'Andi') {
    return $id;
});

# REGEX
Route::get('/pegawai/{ktp}/{kota}', function (string $ktp, string $kota) {
    return "No KTP ".$ktp." beralamat di ".$kota;
})->where(['ktp' => '[0-9]+', 'kota' => '[a-z]+']);

# REGEX HELPER
Route::get('/daftar/{id}/{name}', function ($id, $name) {
    echo $id." dan ".$name;
})->whereNumber('id')->whereAlpha('name');

Route::get('login/{username}', function ($username) {
    echo "Hanya angka ".$username;
})->whereNumber('username');

// Route::get('login/{username}', function ($username) {
//     echo "Hanya huruf ".$username;
// })->whereAlpha('username');

// Route::get('login/{username}', function ($username) {
//     echo "Bisa campuran ".$username;
// })->whereAlphaNumeric('username');