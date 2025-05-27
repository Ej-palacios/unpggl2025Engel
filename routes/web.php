<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome'); // o cualquier otra vista que desees mostrar
});

use App\Http\Controllers\homeController;

Route::get('/posts', [homeController::class, 'index']);
Route::get('/post/create', [homeController::class, 'create']);
Route::get('/post/edit', [homeController::class, 'edit']);
Route::get('/post/show', [HomeController::class, 'show']);
