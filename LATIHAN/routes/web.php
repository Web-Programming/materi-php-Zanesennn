<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('beranda',
    [
        'name'=> 'Nico',
        'email' => 'nico.wijaya2005@gmail.com',
        'alamat'=> 'Palembang'
    ]);
});

Route::get('/berita/{id}/{judul?}', function ($id,$judul= null) {
    return view('berita',['id'=> $id,'judul' => $judul]);
});

Route::get('/prodi/index', [ProdiController::class,'index']);