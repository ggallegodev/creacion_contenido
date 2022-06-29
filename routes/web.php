<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VideoController;

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

Route::get('/', [VideoController::class, 'view']);
Route::get('/overlay', [VideoController::class, 'overlay']);
Route::get('/cded', [VideoController::class, 'cded']);
Route::get('/palpito', [VideoController::class, 'palpito']);
Route::get('/cded2', [VideoController::class, 'cded2']);
Route::get('/cded3', [VideoController::class, 'cded3']);
Route::get('/test', [VideoController::class, 'test']);
Route::get('/palpito2', [VideoController::class, 'palpito2']);
Route::get('/lqclm', [VideoController::class, 'lqclm']);


