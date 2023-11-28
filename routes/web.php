<?php

use App\Models\SuratKeluar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratKeluarController;
use App\Models\PengirimanSurat;
use App\Http\Controllers\PengirimanSuratController;

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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/suratkeluar', [SuratKeluarController::class, 'index']);
Route::get('/suratkeluar/create', [SuratKeluarController::class, 'create']);
Route::post('/suratkeluar/store', [SuratKeluarController::class, 'store']);
Route::get('/suratkeluar/{id}/edit', [SuratKeluarController::class, 'edit']);
Route::put('/suratkeluar/{id}', [SuratKeluarController::class, 'update']);
Route::delete('/suratkeluar/{id}', [SuratKeluarController::class, 'destroy']);

Route::get('/pengirimansurat', [PengirimanSuratController::class, 'index']);
Route::get('/pengirimansurat/create', [PengirimanSuratController::class, 'create']);
Route::post('/pengirimansurat/store', [PengirimanSuratController::class, 'store']);
Route::get('/pengirimansurat/{id}/edit', [PengirimanSuratController::class, 'edit']);
Route::put('/pengirimansurat/{id}', [PengirimanSuratController::class, 'update']);
Route::delete('/pengirimansurat/{id}', [PengirimanSuratController::class, 'destroy']);
