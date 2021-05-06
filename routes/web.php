<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::redirect('/Inicio', '/', 301);

Route::get('/Nosotros', function () {
    return view('nosotros');
});

Route::get('/Servicios', [ServiciosController::class, 'index']);

Route::get('/Servicios/{type}/{service}', [ServiciosController::class, 'show']);

Route::get('/Catalogo', [CatalogoController::class, 'index']);

Route::get('/Catalogo/{type}/{product}', [CatalogoController::class, 'show']);

Route::get('/Contacto', [ContactoController::class, 'index'])->name('contacto.index');

Route::post('/Contacto', [ContactoController::class, 'store'])->name('contacto.store');
