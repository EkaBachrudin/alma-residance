<?php

use App\Http\Controllers\adm\AdminController;
use App\Http\Controllers\ConsumenController;
use App\Http\Controllers\usr\UserController;
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

//User Area
Route::get('/', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/detail', [UserController::class, 'detailUnit']);
Route::get('/detail42', [UserController::class, 'detailUnit42']);
Route::post('/store', [ConsumenController::class, 'store']);

//Admin Area
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/konsumen', [AdminController::class, 'konsumen']);
    Route::get('/getDataKonsumen', [AdminController::class, 'getDataKonsumen']);
});

require __DIR__.'/auth.php';
