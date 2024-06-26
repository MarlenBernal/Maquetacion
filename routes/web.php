<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/index', function () {
        return view('index');
    })->name('index');
    
    Route::get('/datos_cliente', function () {
        return view('datos_cliente');
    })->name('datos_cliente');

    Route::get('/Datos_muestra', function () {
        return view('Datos_muestra');
    })->name('datos_muestra');

    Route::get('/Analisis_solicitado', function () {
        return view('Analisis_solicitado');
    })->name('analisis_solicitado');

    Route::get('/Procedencia', function () {
        return view('Procedencia');
    })->name('procedencia');

    Route::get('/Orden', function () {
        return view('Orden');
    })->name('orden');

    Route::get('/prueba', function () {
        return view('prueba');
    })->name('prueba');

});
