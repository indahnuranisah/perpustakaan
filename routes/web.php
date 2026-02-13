<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/daftar-buku', [BukuController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
