<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;

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

Route::get('/', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'createView']);
Route::post('/pegawai/create', [PegawaiController::class, 'addPegawai']);
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'editView']);
Route::post('/pegawai/{id}/edit', [PegawaiController::class, 'update']);
Route::get('/pegawai/{id}', [PegawaiController::class, 'delete']);

Route::get('/provinsi', [ProvinsiController::class, 'index']);
Route::get('/provinsi/create', [ProvinsiController::class, 'createView']);
Route::post('/provinsi/create', [ProvinsiController::class, 'addProvinsi']);
Route::get('/provinsi/{kode}/edit', [ProvinsiController::class, 'editView']);
Route::post('/provinsi/{kode}/edit', [ProvinsiController::class, 'update']);
Route::get('/provinsi/{kode}', [ProvinsiController::class, 'delete']);

Route::get('/kecamatan', [KecamatanController::class, 'index']);
Route::get('/kecamatan/create', [KecamatanController::class, 'createView']);
Route::post('/kecamatan/create', [KecamatanController::class, 'addKecamatan']);
Route::get('/kecamatan/{kode}/edit', [KecamatanController::class, 'editView']);
Route::post('/kecamatan/{kode}/edit', [KecamatanController::class, 'update']);
Route::get('/kecamatan/{kode}', [KecamatanController::class, 'delete']);

Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/kelurahan/create', [KelurahanController::class, 'createView']);
Route::post('/kelurahan/create', [KelurahanController::class, 'addKelurahan']);
Route::get('/kelurahan/{kode}/edit', [KelurahanController::class, 'editView']);
Route::post('/kelurahan/{kode}/edit', [KelurahanController::class, 'update']);
Route::get('/kelurahan/{kode}', [KelurahanController::class, 'delete']);
