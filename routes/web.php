<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('inicio.home');

Route::get('productos/', [ProductosController::class, 'index'])->name('u_prod.index');

Route::post('productos/',[ProductosController::class, 'validate_pws'])->name('u_prod.validate');

Route::post('productos/alta', [ProductosController::class, 'create'])->name('u_prod.alta');

Route::get('productos/delete/{id_del}', [ProductosController::class, 'fn_delete'])->name('u_prod.fn_delete');

Route::put('productos/update', [ProductosController::class, 'update'])->name('u_prod.update');

Route::view('contacto', 'contacto')->name('contacto');