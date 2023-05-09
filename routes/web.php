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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/layout', function(){
    return view('layout.layout');
})->name('layout');

Route::get('/signup', function(){
    return view('signup');
})->name('signup');

//Route Penyakit
Route::get('/penyakit', [PenyakitsController::class, 'index'])->name('penyakit');
Route::get('/penyakit/create', [PenyakitsController::class, 'create'])->name('penyakit.create');
Route::get('/create', function(){
    return view('pages.pakar-layout.penyakits.create');
})->name('create.penyakit');

Route::get('/obat', function(){
    return view('pages.pakar-layout.obat.obat');
})->name('obat');

Route::get('/Hama', function(){
    return view('pages.pakar-layout.hamas.hama');
})->name('hama');

Route::get('/gejala', function(){
    return view('pages.pakar-layout.gejalas.gejala');
})->name('gejala');

Route::get('/aturan', function(){
    return view('pages.pakar-layout.aturans.aturan');
})->name('aturan');

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