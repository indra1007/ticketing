<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/tour', [TourController::class, 'tour']);