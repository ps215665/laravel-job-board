<?php

use Illuminate\Support\Facades\Route;

Route::get('', fn() => to_route(('jobs.index')));

Route::resource('jobs', \App\Http\Controllers\JobController::class)->only(['index']);
