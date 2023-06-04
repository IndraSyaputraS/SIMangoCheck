<?php

use App\Http\Controllers\AturanPenyakitController;
use App\Http\Controllers\AturanHamaController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\GejalasController;
use App\Http\Controllers\HamasController;
use App\Http\Controllers\HasilsController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ObatsController;
use App\Http\Controllers\PenyakitsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\isAdmin;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
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
//home
Route::get('/home', [LandingController::class, 'index'])->name('welcome');

//login
Route::get('/login', [LandingController::class, 'masuk'])->name('login.page');
Route::post('/login', [LandingController::class, 'submit']);

//register
Route::get('/signup', [LandingController::class, 'signup'])->name('signup');
Route::post('/signup', [LandingController::class, 'store'])->name('signup.create');    

Route::group(['middleware' => ['isAdmin']], function() {
    //admin
    Route::get('dashboard-admin', [Dashboard::class, 'admin'])->name('admin');

    //admin-user
    Route::get('/user', [UsersController::class, 'index'])->name('user');
    Route::get('/user/create', [UsersController::class, 'create'])->name('user.create');

    //admin-role
    Route::get('/role', [RoleController::class, 'index'])->name('role');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');

    //admin-hasil
    Route::get('/admin-hasil', [HasilsController::class, 'indexAdmin'])->name('admin.hasil');
});


Route::group(['middleware' => ['isPakar']], function() {
    //dashboard pakar
    Route::get('/dashboard-pakar', [Dashboard::class, 'pakar'])->name('dashboard.pakar');

    //Penyakit
    Route::get('/penyakit', [PenyakitsController::class, 'index'])->name('penyakit');
    Route::get('/penyakit/create', [PenyakitsController::class, 'create'])->name('penyakit.create');
    Route::post('/penyakit/create', [PenyakitsController::class, 'store'])->name('penyakit.store');
    Route::get('/penyakit/edit/{id}', [PenyakitsController::class, 'edit'])->name('penyakit.edit');
    Route::post('/penyakit/edit/{id}', [PenyakitsController::class, 'update'])->name('penyakit.update');
    Route::get('/penyakit/delete/{id}', [PenyakitsController::class, 'delete'])->name('penyakit.delete');

    //obat
    Route::get('/obat', [ObatsController::class, 'index'])->name('obat');
    Route::get('/obat/create', [ObatsController::class, 'create'])->name('obat.create');
    Route::post('/obat/create', [ObatsController::class, 'store'])->name('obat.store');
    Route::get('/obat/edit/{id}', [ObatsController::class, 'edit'])->name('obat.edit');
    Route::post('/obat/edit/{id}', [ObatsController::class, 'update'])->name('obat.update');
    Route::get('/obat/delete/{id}', [ObatsController::class, 'delete'])->name('obat.delete');

    //hama
    Route::get('/hama', [HamasController::class, 'index'])->name('hama');
    Route::get('/hama/create', [HamasController::class, 'create'])->name('hama.create');
    Route::post('/hama/create', [HamasController::class, 'store'])->name('hama.store');
    Route::get('/hama/edit/{id}', [HamasController::class, 'edit'])->name('hama.edit');
    Route::post('/hama/edit/{id}', [HamasController::class, 'update'])->name('hama.update');
    Route::get('/hama/delete/{id}', [HamasController::class, 'delete'])->name('hama.delete');

    //gejala
    Route::get('/gejala', [GejalasController::class, 'index'])->name('gejala');
    Route::get('/gejala/create', [GejalasController::class, 'create'])->name('gejala.create');
    Route::post('/gejala/create', [GejalasController::class, 'store'])->name('gejala.store');
    Route::get('/gejala/edit/{id}', [GejalasController::class, 'edit'])->name('gejala.edit');
    Route::post('/gejala/edit/{id}', [GejalasController::class, 'Update'])->name('gejala.update');
    Route::get('/gejala/delete/{id}', [GejalasController::class, 'delete'])->name('gejala.delete');

    //aturan penyakit
    Route::get('/aturan-penyakit', [AturanPenyakitController::class, 'index'])->name('aturan.penyakit');
    Route::get('/aturan-penyakit/edit/{id}', [AturanPenyakitController::class, 'edit'])->name('aturan.penyakit.edit');
    Route::post('/aturan-penyakit/edit/{id}', [AturanPenyakitController::class, 'update'])->name('aturan.penyakit.update');
    Route::get('/aturan-penyakit/delete/{id}', [AturanPenyakitController::class, 'delete'])->name('aturan.penyakit.delete');

    Route::get('/aturan-hama', [AturanHamaController::class, 'index'])->name('aturan.hama');
    Route::get('/aturan-hama/edit/{id}', [AturanHamaController::class, 'edit'])->name('aturan.hama.edit');
    Route::post('/aturan-hama/edit/{id}', [AturanHamaController::class, 'update'])->name('aturan.hama.update');
    Route::get('/aturan-hama/delete/{id}', [AturanHamaController::class, 'delete'])->name('aturan.hama.delete');
});

Route::group(['middleware' => ['isPengguna']], function() {
    //user
    Route::get('/dashboard-user', [Dashboard::class, 'user'])->name('dashboard-user');

    //user-konsultasi
    Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi');
    Route::post('/konsultasi', [KonsultasiController::class, 'create'])->name('konsultasi.penyakit.check');

    //user-hasil
    Route::get('/hasil', [HasilsController::class, 'indexUser'])->name('hasil.user');
});
