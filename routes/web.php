<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\Alunos\AlunosController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\painel\LucrosController;
use App\Http\Controllers\painel\EstoqueController;
use App\Http\Controllers\painel\PedidosController;
use App\Http\Controllers\painel\AfiliadosController;

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





Route::get('alunos/cadastro', [AlunosController::class, 'index'])->name('alunos.index');
Route::get('alunos/thanks', [AlunosController::class, 'thanks'])->name('alunos.thanks');
Route::post('alunos/cadastro/store', [AlunosController::class, 'store'])->name('alunos.store');

Route::middleware(['auth:web'])->group(function () {

    Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos');
    Route::get('/estoque', [EstoqueController::class, 'index'])->name('estoque');
    Route::get('/afiliados', [AfiliadosController::class, 'index'])->name('afiliados');
    Route::get('/afiliados/todos', [AfiliadosController::class, 'create'])->name('afiliados.todos');
    Route::get('/lucros', [LucrosController::class, 'index'])->name('lucros');

});

Route::get('admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('admin/login/login', [AdminController::class, 'login'])->name('admin.login.entrar');
Route::get('admin/register', [AdminController::class, 'register'])->name('admin.login.register');
Route::post('admin/login/store', [AdminController::class, 'store'])->name('admin.login.store');

Route::middleware(['auth:admin'])->prefix('admin')->group(function () {

    Route::get('home', [PainelController::class, 'index'])->name('admin.index');
    Route::get('usuarios', [PainelController::class, 'users'])->name('admin.users');
});
