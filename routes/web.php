<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SongRequestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DjController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/request', [SongRequestController::class, 'create']);
Route::post('/request', [SongRequestController::class, 'store']);

Route::get('/queue', [SongRequestController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dj', [DjController::class, 'index'])->middleware('auth');
Route::post('/dj/song/{songRequest}/play', [DjController::class, 'play'])->middleware('auth');
Route::post('/dj/song/{songRequest}/reject', [DjController::class, 'reject'])->middleware('auth');

