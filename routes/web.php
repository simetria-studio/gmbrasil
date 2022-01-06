<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CepController;
use App\Http\Controllers\painel\AfiliadosController;
use App\Http\Controllers\painel\EstoqueController;
use App\Http\Controllers\painel\LucrosController;
use App\Http\Controllers\painel\PedidosController;
use App\Http\Controllers\UserController;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('buscacep', [CepController::class, 'buscaCep'])->name('address.cep');
Route::post('register-user', [UserController::class, 'store'])->name('register.user');
Route::post('login-user', [UserController::class, 'login'])->name('login.user');



Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos');
Route::get('/estoque', [EstoqueController::class, 'index'])->name('estoque');
Route::get('/afiliados', [AfiliadosController::class, 'index'])->name('afiliados');
Route::get('/lucros', [LucrosController::class, 'index'])->name('lucros');
