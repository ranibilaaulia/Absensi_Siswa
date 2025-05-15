<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gurucontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\jurusancontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\LokalController;
use App\Http\Controllers\walikelascontroller;
use App\Http\Controllers\ortucontroller;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('utama.login_admin');
})->name('login-view');

Route::get('/dashboard', function () {
    return view('utama.dashboard');
})->name('dashboard');
Route::get('/dashboardAdmin', [dashboardcontroller::class, 'index'])->name('dashboard-admin');

Route::resource('siswa', siswacontroller::class);
Route::get('/siswa', [siswacontroller::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [siswacontroller::class, 'create'])->name('siswa.create');
Route::get('/siswa/{id}/edit', [siswacontroller::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [siswacontroller::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [siswacontroller::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/{id}', [siswacontroller::class, 'show'])->name('siswa.show');
Route::post('/siswa/store', [siswacontroller::class, 'store'])->name('siswa.store');
Route::resource('guru', gurucontroller::class);
Route::get('/guru/create', [gurucontroller::class, 'create'])->name('guru.create');
Route::get('/guru/{id}/edit', [gurucontroller::class, 'edit'])->name('guru.edit');
Route::put('/guru/{id}', [gurucontroller::class, 'update'])->name('guru.update');
Route::delete('/guru/{id}', [gurucontroller::class, 'destroy'])->name('guru.destroy');
Route::get('/guru/{id}', [gurucontroller::class, 'show'])->name('guru.show');
Route::post('/guru/store', [gurucontroller::class, 'store'])->name('guru.store');   
Route::resource('jurusan', jurusancontroller::class);
Route::get('/jurusan/create', [jurusancontroller::class, 'create'])->name('jurusan.create');
Route::get('/jurusan/{id}/edit', [jurusancontroller::class, 'edit'])->name('jurusan.edit');
Route::put('/jurusan/{id}', [jurusancontroller::class, 'update'])->name('jurusan.update');
Route::delete('/jurusan/{id}', [jurusancontroller::class, 'destroy'])->name('jurusan.destroy');
Route::get('/jurusan/{id}', [jurusancontroller::class, 'show'])->name('jurusan.show');
Route::post('/jurusan/store', [jurusancontroller::class, 'store'])->name('jurusan.store');
Route::resource('lokal', LokalController::class);
Route::get('/lokal/create', [lokalController::class, 'create'])->name('lokal.create');
Route::get('/lokal/{id}/edit', [lokalController::class, 'edit'])->name('lokal.edit');
Route::put('/lokal/{id}', [lokalController::class, 'update'])->name('lokal.update');
Route::delete('/lokal/{id}', [lokalController::class, 'destroy'])->name('lokal.destroy');
Route::get('/lokal/{id}', [lokalController::class, 'show'])->name('lokal.show');
Route::post('/lokal/store', [lokalController::class, 'store'])->name('lokal.store');
Route::resource('ortu', ortucontroller::class);
Route::resource('walikelas', walikelascontroller::class);
Route::get('/walikelas/create', [walikelascontroller::class, 'create'])->name('walikelas.create');
Route::get('/walikelas/{id}/edit', [walikelascontroller::class, 'edit'])->name('walikelas.edit');
Route::put('/walikelas/{id}', [walikelascontroller::class, 'update'])->name('walikelas.update');
Route::delete('/walikelas/{id}', [walikelascontroller::class, 'destroy'])->name('walikelas.destroy');
Route::get('/walikelas/{id}', [walikelascontroller::class, 'show'])->name('walikelas.show');
Route::post('/walikelas/store', [walikelascontroller::class, 'store'])->name('walikelas.store');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');



Route::post('/auth', [LoginController::class, 'authentication'])->name('login');
// Route::get('/login',[LoginController::class,'view'])->name('login-view');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
