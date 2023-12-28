<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
// use app\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class, 'home']
)->name('home');

Route::get('/Porsche', [PublicController::class, 'PorschePage'])->name('Porsche');

Route::get('/Ferrari',[PublicController::class, 'FerrariPage'] )->name('Ferrari');

Route::get('/Porsche/dettaglio/{tipes}', [PublicController::class, 'DettaglioPorsche'])->name('Dettaglio.Porsche');

Route::get('/Ferrari/dettaglio/{tipes}', [PublicController::class, 'DettaglioFerrari'])->name('Dettaglio.Ferrari');