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
use App\Http\Controllers\MathController;

Route::get('/sum/{a}/{b}', [MathController::class, 'sum']);
Route::get('/subtract/{a}/{b}', [MathController::class, 'subtract']);
Route::get('/multiply/{a}/{b}', [MathController::class, 'multiply']);
// Puedes agregar más rutas aquí según sea necesario


use App\Http\Controllers\StudentController;

Route::get('/student/{name}/{age}', [StudentController::class, 'show']);
// Puedes agregar más rutas aquí según sea necesario
use App\Http\Controllers\AgeCalculatorController;

Route::get('/calculate/{input}', [AgeCalculatorController::class, 'calculate']);




Route::get('/botones', function () {
    return view('botones');
});


Route::get('/cards', function () {
    return view('cards');
});
Route::get('/modals', function () {
    return view('modals');
});
Route::get('/navbar', function () {
    return view('navbar-example');
});