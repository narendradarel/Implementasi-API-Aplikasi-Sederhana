<?php

use App\Http\Controllers\CuacaController;
use App\Http\Controllers\OngkirController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//PENCARIAN DOMESTIK
Route::get('/pencarian', [PencarianController::class, 'index']);
Route::post('/pencarian/hasil', [PencarianController::class, 'cari'])->name('pencarian.hasil');

//PENCARIAN INTERNATIONAL
Route::get('/search', [SearchController::class, 'index']);
Route::post('/search/result', [SearchController::class, 'search'])->name('search.result');

//ONGKIR
Route::get('/ongkir', [OngkirController::class, 'index']);
