<?php

use App\Http\Controllers\PenyakitsController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/signup', function(){
    return view('signup');
})->name('signup');

//Route Penyakit
Route::get('/penyakit', [PenyakitsController::class, 'index'])->name('penyakit');
Route::get('/penyakit/create', [PenyakitsController::class, 'create'])->name('penyakit.create');
Route::post('/penyakit/store', [PenyakitsController::class, 'store'])->name('penyakit.store');
Route::patch('/penyakit/update/{id}', [PenyakitsController::class, 'update'])->name('penyakit.update');
// Route::get('/penyakit/create', [PenyakitsController::class, 'create'])->name('penyakit.create');
// Route::get('/create', function(){
//     return view('pages.pakar-layout.penyakits.create');
// })->name('create.penyakit');

//obat
Route::get('/obat', function(){
    return view('pages.pakar-layout.obat.obat');
})->name('obat');

//hama
Route::get('/Hama', function(){
    return view('pages.pakar-layout.hamas.hama');
})->name('hama');
Route::get('/dashboard-pakar/hama/create', function(){
    return view('pages.pakar-layout.hamas.create');
})->name('hama.create');

//gejala
Route::get('/gejala', function(){
    return view('pages.pakar-layout.gejalas.gejala');
})->name('gejala');
Route::get('/dashboard/gejala/create', function(){
    return view('pages.pakar-layout.gejalas.create');
})->name('gejala.create');

//aturan
Route::get('/aturan', function(){
    return view('pages.pakar-layout.aturans.aturan');
})->name('aturan');
Route::get('/dashboard-pakar/aturan/create', function(){
    return view('pages.pakar-layout.aturans.create');
})->name('aturan.create');

//admin
Route::get('/admin', function(){
    return view('pages.admin-layout.dashboard');
})->name('admin');

Route::get('/user', function(){
    return view('pages.admin-layout.users.users');
})->name('user');

Route::get('/role', function(){
    return view('pages.admin-layout.roles.roles');
})->name('role');

Route::get('/dashboard-pakar', function(){
    return view('pages.pakar-layout.dashboard');
})->name('dashboard-pakar');

Route::get('/dashboard-user', function(){
    return view('pages.user-layout.dashboard');
})->name('dashboard-user');

Route::get('/dashboard-user/konsultasi', function(){
    return view('pages.user-layout.konsultasi.konsultasi');
})->name('konsultasi');

Route::get('/dashboard-user/hasil', function(){
    return view('pages.user-layout.hasil');
})->name('hasil.user');

Route::get('/dashboard-admin/hasil', function(){
    return view('pages.admin-layout.hasil');
})->name('hasil.admin');