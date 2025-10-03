<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
// Route::get('/mahasiswa', function () {
//     return 'Halo Mahasiswa';
// });

// Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);
// Route::get('/about', function () {
//     return view('halaman-about');
// });


// Route::get('/menu/{param1}', [menuController::class, 'show']);
// Route::get('/menu', function () {
//     return view('halaman-menu');
// });
// Route::get('/makanan', function () {
//     return view('halaman-makanan');
// });
// Route::get('/minuman', function () {
//     return view('halaman-minuman');
// });
// Route::get('/menu/error', function () {
//     return view('error');
// });

route::get('/home',[HomeController::class,'index']);
route::post('/home', [HomeController::class, 'signup']);
route::get('/pegawai',[PegawaiController::class,'index']);

