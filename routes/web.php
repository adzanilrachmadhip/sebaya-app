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

// auth route here 

Route::get('/login', function () {
    return view('auth.login',[
        "title" => "Login"
    ]);
});

Route::get('/daftar', function () {
    return view('auth.daftar',[
        "title" => "Daftar"
    ]);
});


Route::get('/lupa', function () {
    return view('auth.lupa',[
        "title" => "Reset Password"
    ]);
});

Route::get('/resetsukses', function () {
    return view('auth.resetsukses',[
        "title" => "Reset Password"
    ]);
});



Route::get('/', function () {
    return view('beranda',[
        "title" => "Home"
    ]);
});

Route::get('/petaaio', function () {
    return view('petaaio',[
        "title" => "Peta All In One"
    ]);
});

Route::get('/petapositif', function () {
    return view('petapositif',[
        "title" => "Peta Positif "
    ]);
});

Route::get('/petanegatif', function () {
    return view('petanegatif',[
        "title" => "Peta Negatif"
    ]);
});

// Roles: Admin Routes

Route::get('/dashboard', function () {
    return view('admin.dashboard',[
        "title" => "Sebaya-App | Admin Dashboard"
    ]);
});

Route::get('/inputwisata', function () {
    return view('admin.inputwisata',[
        "title" => "Sebaya-App | Admin Input Wisata"
    ]);
});

Route::get('/tabelwisata', function () {
    return view('admin.tabelwisata',[
        "title" => "Sebaya-App | Admin Input Wisata"
    ]);
});


// Roles: Visitors
Route::get('/review', function(){
    return view('review', [
        "title" => "Review Tempat Wisata"
    ]);
});