<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [TestController::class, 'home']);
Route::get('/test', [TestController::class, 'test']);
Route::get('/records', [TestController::class, 'records'])->name('records');
Route::post('/records/check', [TestController::class, 'records_check']);