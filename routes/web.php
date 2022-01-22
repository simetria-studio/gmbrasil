<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Loja\LojaController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Loja\DetailController;
use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Alunos\AlunosController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\painel\LucrosController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Loja\cartController;
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
    Route::any('/logout/painel', [UserController::class, 'logout'])->name('painel.logout');


    Route::get('shop', [LojaController::class, 'index'])->name('loja');

});

Route::get('admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('admin/login/login', [AdminController::class, 'login'])->name('admin.login.entrar');
Route::get('admin/register', [AdminController::class, 'register'])->name('admin.login.register');
Route::post('admin/login/store', [AdminController::class, 'store'])->name('admin.login.store');

Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', [PainelController::class, 'index'])->name('admin.index');
    Route::get('usuarios', [PainelController::class, 'users'])->name('admin.users');
});
Route::middleware(['auth:admin'])->prefix('/cadastro')->group(function () {

    Route::get('categoria_menu/{id?}', [PainelController::class, 'categorias'])->name('admin.categoria');
    Route::post('/nova_categoria', [CategoryController::class, 'novaCategoria'])->name('novaCategoria');
    Route::post('/atualizar_categoria', [CategoryController::class, 'atualizarCategoria'])->name('atualizarCategoria');
    Route::post('/pesquisa_categoria', [CategoryController::class, 'pesquisaCategoria']);
    Route::post('/pesquisa_categoria_produto', [CategoryController::class, 'pesquisaCategoriaProduto']);
    Route::any('/excluir_categoria', [CategoryController::class, 'excluirCategoria']);


    Route::get('/produtos', [PainelController::class, 'indexProduto'])->name('admin.produtos');
    Route::post('/novo_produto', [ProductController::class, 'novoProduto'])->name('novoProduto');
    Route::post('/atualizar_produto', [ProductController::class, 'atualizarProduto'])->name('atualizarProduto');
    Route::post('/inativar_produto', [ProductController::class, 'inativarProduto']);
});



