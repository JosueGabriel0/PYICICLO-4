<?php

use App\Livewire\Inicio;
use Illuminate\Support\Facades\Route;
use App\Livewire\Prueba;
use App\Livewire\Prueba2;

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

    Route::get('/inicio', Inicio::class);
    Route::get('/prueba', Prueba::class);
    Route::get('/prueba2', Prueba2::class);
});
