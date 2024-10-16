<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "home",
        "active" => "home"
    ]);
});

Route::get('/login', function () {
    return view('login.index',[
        "title" => "login",
        "active" => "login"
    ]);
});

Route::get('/register', function () {
    return view('login.register',[
        "title" => "login",
        "active" => "login"
    ]);
});
