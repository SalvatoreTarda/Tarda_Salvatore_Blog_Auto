<?php

use App\Http\Controllers\ProductController;
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


//? rotte per invio mail
Route::get('/contact',[PublicController::class, 'contacts'])->name('contacts');
Route::post('/contact/submit',[PublicController::class,'submit'])->name('contact.submit');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');