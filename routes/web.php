<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorld;
use App\Http\Controllers\Create;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Hello', [HelloWorld::class, 'index']);
Route::get('/create', [Create::class, 'create']);
