<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about',function(){
    $data = [
        'nama' => 'Rizky',
        'umur' => 20,
        'alamat' => 'Jl. Merdeka No. 123, Jakarta'
    ];
    return view('pages.about', $data);
});

Route::view('/contact', 'pages.contact');
Route::view('/product', 'pages.product');

