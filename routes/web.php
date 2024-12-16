<?php

use Illuminate\Support\Facades\Route;
/*
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return  view('about');
});

Route::get('mahasiswa', function () {
    $npm = [123, 124, 125, 126];
    $nama = ['Ipul', 'Saipul', 'Irul', 'Raul'];
    $jumlah = count($npm);
    return view('mahasiswa', compact('npm', 'jumlah', 'nama'));
});

Route::get('profil', function () {
    $nama = 'arthu';
    return view('profil', compact('nama'));
});

Route::get('array', function () {
    for ($i = 1; $i <= 5; $i++) {
        echo 'Hello' . $i . 'x<br>';
    }
});
