<?php

use App\Http\Controllers\CachesController;
use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('hidePass');
// Route::get('/queue', [HomeController::class, 'homeQueue'])->name('homeQueue');
// Route::get('/event/{id}', [HomeController::class, 'evenListeneerShip'])->name('evenListeneerShip');
// Route::get('/cache/{id}', [HomeController::class, 'cacheRedis'])->name('cacheRedis');
// Route::get('/cache', [CachesController::class, 'index'])->name('cacheRedisIndex');

// Route::get('/database-relationship/one-one', [DatabaseController::class, 'relationOneOne'])->name('relationDbOneOne');
// Route::get('/database-relationship/one-many', [DatabaseController::class, 'relationOneMany'])->name('relationDbOneMany');

// $prefixAdmin = 'admin';
// // Route::group(['middleware' => ['auth', 'permission.admin'], 'prefix' => $prefixAdmin], function () {
// // Route::group(['middleware' => ['auth'], 'prefix' => $prefixAdmin], function () {
// Route::group(['prefix' => $prefixAdmin], function () {


//     // Routes for admin
//     // echo '<h3>Die is Called - 23</h3>';die;
//     include_once __DIR__ . '/admin.php';
// });



// Route::get('/abc', [HomeController::class, 'redirectFunction'])->name('redirect-route');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
