<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImovelController;



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

Route::get('/imoveis/remove/{id}', 'App\Http\Controllers\ImovelController@remover')->name('imoveis.remove');
Route::resource('imoveis', ImovelController::class);
