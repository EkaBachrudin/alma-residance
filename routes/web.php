<?php

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

Route::get('/', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/detail', [UserController::class, 'detailUnit']);
Route::get('/detail42', [UserController::class, 'detailUnit42']);

require __DIR__.'/auth.php';
