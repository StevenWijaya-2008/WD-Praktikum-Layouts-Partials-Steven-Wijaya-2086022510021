<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    $nama = 'Steven Wijaya';
    $age = 18;
    $status = 'Mahasiswa';
    return view('about', [
        'nama' => $nama,
        'age' => $age,
        'status' => $status
    ]);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});
