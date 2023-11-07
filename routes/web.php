<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// use App\Http\Controllers\;

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

//Ke Website (Laravel)
Route::get('/laravel', function () {
    return view('welcome');
});

//Ke Page Utama Website (home)
Route::get('/', function () {
    return view('home');
});

//Ke Page Utama Website (Dashboard)
Route::get('/dashboard', function () {
    return view('dashboard');
});

//Ke Page Utama Website (model mahasiswa, MahasiswaController) dengan mahasiswa/ (index,view,storage,edit,update,destroy)
Route::resource('mahasiswa', MahasiswaController::class);



