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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [SiswaController::class, 'index'])->name('home');
Route::get('/home/tentang', [SiswaController::class, 'tentang']);

Route::get('/home/tambah', [SiswaController::class, 'tambah']);
Route::post('/home/store', [SiswaController::class, 'store']);

Route::get('/home/edit/{id}', [SiswaController::class, 'edit']);
Route::post('/home/update', [SiswaController::class, 'update']);

Route::get('/home/hapus/{id}', [SiswaController::class, 'hapus']);
