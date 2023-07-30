<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IbuController;
use App\Http\Controllers\IbuHamilController;
use App\Http\Controllers\IbuNifasController;
use App\Http\Controllers\KesIbuHamilController;
use App\Http\Controllers\KesIbuNifasController;
use App\Http\Controllers\KesPasienController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PersonalController;
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

Route::get('/', [AdminController::class, 'index'])->name('login');
Route::post('/admin/login', [AdminController::class, 'authenticate']);
Route::post('/admin/logout', [AdminController::class, 'logout']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::prefix('pasien')->middleware('auth')->group(function () {
    Route::get('/', [PasienController::class, 'index'])->name('pasien');
    Route::post('pasien/create', [PasienController::class, 'store'])->name('pasien.create');
    Route::get('edit/{pasien}', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::put('/{pasien}', [PasienController::class, 'update'])->name('pasien.update');
    Route::get('pasien/search', [PasienController::class, 'search'])->name('pasien.search');
    Route::delete('/pasien/pasien/{id}', [PasienController::class, 'destroy']);
    Route::get('/exportpasien', [PasienController::class, 'pasienExport'])->name('pasien.export');
});

Route::prefix('personals')->middleware('auth')->group(function () {
    Route::get('add/{pasien}', [PersonalController::class, 'index'])->name('personals');
    Route::post('create', [PersonalController::class, 'store'])->name('personals.create');
    Route::get('/personal/{id}', [PersonalController::class, 'show'])->name('personals.show');
});

Route::prefix('ibunifas')->middleware('auth')->group(function () {
    Route::get('add/{ibu}', [IbuNifasController::class, 'index'])->name('ibunifas');
    Route::post('create', [IbuNifasController::class, 'store'])->name('ibunifas.createa');
    Route::get('/ibunifas/{id}', [IbuNifasController::class, 'show'])->name('ibunifas.show');
});

Route::prefix('ibuhamil')->middleware('auth')->group(function () {
    Route::get('add/{ibu}', [IbuHamilController::class, 'index'])->name('ibuhamil');
    Route::post('create', [IbuHamilController::class, 'store'])->name('ibuhamil.create');
    Route::get('/ibuhamil/{id}', [IbuHamilController::class, 'show'])->name('ibuhamil.show');
});

Route::prefix('anaks')->middleware('auth')->group(function () {
    Route::get('/', [AnakController::class, 'index'])->name('anak');
    Route::post('anak/create', [AnakController::class, 'store'])->name('anak.create');
    Route::get('cetakskl/{anak}', [AnakController::class, 'cetakskl'])->name('anak.cetakskl');
});

Route::prefix('ibu')->middleware('auth')->group(function () {
    Route::get('/', [IbuController::class, 'index'])->name('ibu');
    Route::post('ibu/create', [IbuController::class, 'store'])->name('ibu.create');
    Route::get('edit/{ibu}', [IbuController::class, 'edit'])->name('ibu.edit');
    Route::get('/ibus/{ibu_id}/view', [IbuController::class, 'getDataKesIbuHamil']);
    Route::put('/{ibu}', [IbuController::class, 'update'])->name('ibu.update');
    Route::get('ibu/search', [IbuController::class, 'search'])->name('ibu.search');
    Route::get('/exportibu', [IbuController::class, 'ibuExport'])->name('ibu.export');
});

Route::prefix('kes_ibu_hamil')->middleware('auth')->group(function () {
    Route::get('/', [KesIbuHamilController::class, 'index'])->name('kes-ibu-hamil');
    Route::get('/exportkesehatanibuhamil', [KesIbuHamilController::class, 'KesibuhamilExport'])->name('kesibuhamil.export');
});

Route::prefix('kes_ibu_nifas')->middleware('auth')->group(function () {
    Route::get('/', [KesIbuNifasController::class, 'index'])->name('kes-ibu-nifas');
    Route::get('/exportkesehatanibunifas', [KesIbuNifasController::class, 'KesibunifasExport'])->name('kesibunifas.export');
});

Route::prefix('kes_pasien')->middleware('auth')->group(function () {
    Route::get('/', [KesPasienController::class, 'index'])->name('kes-pasien');
    Route::get('/exportkesehatanpasien', [KesPasienController::class, 'KespasienExport'])->name('kespasien.export');
});

