<?php

use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WorkController::class, 'show']);
Route::get('/work/create', [WorkController::class, 'create']);
Route::get('/work/edit', [WorkController::class, 'edit']);
