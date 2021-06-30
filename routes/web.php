<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/json', [SiswaController::class, 'datajson'])->name('siswa.data');
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::patch('/siswa', [SiswaController::class, 'update'])->name('siswa.update');
