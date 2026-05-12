<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ('Hello World!');
});

Route::get('/Page', function () {
    return ('Ini adalah halaman pertama saya dengan laravel');
});

Route::get('/hello', function () {
    return ('Nama saya Ismail, Nim saya 207');
});

Route::get('/user/{name?}', function (string $name = 'Ismail') {
    return 'Halo, ' . $name;
});

Route::get('/produk/{id?}', function ($id = '207') {
    return "Anda sedang melihat produk dengan ID: " . $id;
});
