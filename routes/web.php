<?php

use App\Http\Controllers\VoitureController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voiture/show',[VoitureController::class,'show'])->name('VoitureIndex');
Route::get('/Voiture/ajout',[VoitureController::class,'index'])->name('VoitureAjout');
Route::post('/voiture/store',[VoitureController::class,'store'])->name('VoitureStore');
Route::get('/thanks',[VoitureController::class,'thanks'])->name('Thanks');
