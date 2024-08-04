<?php

use App\Http\Controllers\CentroidController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('provinsi', ProvinsiController::class);
Route::get('/', [ProvinsiController::class, 'index'])->name('provinsis');
Route::get('/centroids', [CentroidController::class, 'index'])->name('provinsi.centroids');
