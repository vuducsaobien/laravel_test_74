<?php

use App\Http\Controllers\CachesController;
use App\Http\Controllers\DatabaseController;
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
Route::get('/cache/{id}', [HomeController::class, 'cacheRedis'])->name('cacheRedis');
Route::get('/cache', [CachesController::class, 'index'])->name('cacheRedisIndex');

Route::get('/database-relationship/one-one', [DatabaseController::class, 'relationOneOne'])->name('relationDbOneOne');
Route::get('/database-relationship/one-many', [DatabaseController::class, 'relationOneMany'])->name('relationDbOneMany');



// Route::get('/abc', [HomeController::class, 'redirectFunction'])->name('redirect-route');

// Route::get('/', function () {
//     return view('welcome');
// });
