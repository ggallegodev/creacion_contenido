<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VideoController;
use App\Http\Controllers\PartsController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\FileController;
 

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
Route::get('/cded_sub', [VideoController::class, 'cded_sub']);
Route::get('/lqclm_sub', [VideoController::class, 'lqclm_sub']);
Route::get('/trailers', [VideoController::class, 'trailers']);

Route::get('SeasonsByTvshow/{id}',[SeasonsController::class, 'byTvshow']);

Route::get('EpisodesBySeason/{id}',[EpisodesController::class, 'bySeason']);

Route::post('parts',[PartsController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/upload_file', [FileController::class, 'index']);


Route::controller(FileController::class)->group(function(){
    Route::get('file-upload', 'index');
    Route::post('file-upload', 'store')->name('file.upload');
});
