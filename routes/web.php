<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('hidePass');
Route::get('/queue', [HomeController::class, 'homeQueue'])->name('homeQueue');
Route::get('/event/{id}', [HomeController::class, 'evenListeneerShip'])->name('evenListeneerShip');

// Route::get('/abc', [HomeController::class, 'redirectFunction'])->name('redirect-route');

// Route::get('/', function () {
//     return view('welcome');
// });
