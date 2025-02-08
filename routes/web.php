<?php

use Illuminate\Support\Facades\Route;

Route::get('', fn() => to_route('jobs.index'));
Route::resource('jobs', \App\Http\Controllers\JobController::class)->only(['index']);

Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::resource('auth', \App\Http\Controllers\AuthController::class)->only(['store', 'create']);

