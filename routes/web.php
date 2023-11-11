<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[SiteController::class, "login"])->name('login');
Route::get('/painel',[SiteController::class, "painel"])->name('painel');
Route::get('/controledetentos',[SiteController::class, "controleDetentos"])->name('controleDetentos');
Route::get('/controlecelas',[SiteController::class, "controleCelas"])->name('controleCelas');
Route::get('/controleVisitas',[SiteController::class, "controleVisitas"])->name('controleVisitas');
Route::get('/controleMovimentos',[SiteController::class, "controleMovimentos"])->name('controleMovimentos');