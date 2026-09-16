<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SongRequestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DjController;
use App\Http\Controllers\UserController;

Route::view('/', 'home')->name('home');

Route::get('/request', [SongRequestController::class, 'create'])->name('request.create');
Route::post('/request', [SongRequestController::class, 'store']);

Route::get('/queue', [SongRequestController::class, 'index'])->name('queue.index');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/dj', [DjController::class, 'index'])->middleware('auth')->name('dj.index');

Route::post('/dj/song/{songRequest}/play', [DjController::class, 'play'])->middleware('auth')->name('dj.song.play');
Route::post('/dj/song/{songRequest}/reject', [DjController::class, 'reject'])->middleware('auth')->name('dj.song.reject');

Route::get('/dj/users/create', [UserController::class, 'create'])->middleware('auth')->name('users.create');
Route::post('/dj/users', [UserController::class, 'store'])->middleware('auth')->name('users.store');