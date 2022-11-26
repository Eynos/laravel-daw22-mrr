<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PilotoController::class, 'index'])->name('piloto.index');
Route::delete('/eliminar/{id}', [PilotoController::class, 'eliminar'])->name('piloto.eliminar');
Route::get('/create', [PilotoController::class, 'create'])->name('piloto.crear');
Route::post('/store', [PilotoController::class, 'store'])->name("piloto.store");