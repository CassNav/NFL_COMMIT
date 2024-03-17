<?php

use App\Http\Controllers\TeamsController;
use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\CitiesController;

Route::get('/teams', [TeamsController::class, 'index']);
Route::get('/divisions', [DivisionsController::class, 'index']);
Route::get('/conferences', [ConferencesController::class, 'index']);
Route::get('/cities', [CitiesController::class, 'index']);

