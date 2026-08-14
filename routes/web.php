<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SongRequestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/request', [SongRequestController::class, 'create']);
Route::post('/request', [SongRequestController::class, 'store']);

Route::get('/dj', [SongRequestController::class, 'index']);

