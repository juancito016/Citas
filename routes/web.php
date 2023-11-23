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
Route::get('/home', function () {
    return view('index');
});

Route::get('/acercade', function () {
    return view('about');
});

Route::get('/servicios', function () {
    return view('Service');
});

Route::get('/testimonio', function () {
    return view('testimonial');
});

Route::get('/equipo', function () {
    return view('team');
});
Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/bienvenido', function () {
    return view('bienvenido');
});


//lpgin
Route::get('/login', function () {
    return view('login');
});
//register
Route::get('/register', function () {
    return view('register');
});