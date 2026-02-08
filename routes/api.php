<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/admin/me', [AdminController::class, 'me']);