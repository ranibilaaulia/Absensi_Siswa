<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function ()
 {
    return view('index',[
        "menu"=>"dashboard"
    ]);
});

Route::get('/login', function () {
    return view('login_admin');
});


