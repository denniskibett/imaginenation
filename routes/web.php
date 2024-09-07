<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/styles', [HomeController::class, 'styles']);


//Route::get('/', function () {
  //  return view('welcome');
//});
