<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Loja\cartController;
use App\Http\Controllers\Loja\LojaController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Loja\DetailController;
use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Alunos\AlunosController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Cartao\CartaoController;
use App\Http\Controllers\painel\LucrosController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\painel\EstoqueController;
use App\Http\Controllers\painel\PedidosController;
use App\Http\Controllers\painel\AfiliadosController;
use App\Http\Controllers\Admin\BrocheToUserController;
use App\Http\Controllers\Admin\PedidosController as AdminPedidosController;

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


Route::get('cartao/cadastro', [CartaoController::class, 'index'])->name('cartao.index');
Route::post('cartao/cadastro/store', [CartaoController::class, 'store'])->name('cartao.store');

Route::middleware(['auth:web'])->group(function () {

    Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos');
    Route::get('/pedidos/detelhe/{id}', [PedidosController::class, 'pedidosDetelhes'])->name('pedidos.detelhes');


    Route::get('/estoque', [EstoqueController::class, 'index'])->name('estoque');
    Route::get('/afiliados', [AfiliadosController::class, 'index'])->name('afiliados');
    Route::get('/afiliados/todos', [AfiliadosController::class, 'create'])->name('afiliados.todos');
    Route::get('/lucros', [LucrosController::class, 'index'])->name('lucros');
    Route::any('/logout/painel', [UserController::class, 'logout'])->name('painel.logout');


    Route::get('shop', [LojaController::class, 'index'])->name('loja');
    Route::post('cartAdd', [cartController::class, 'cartAdd'])->name('cart.add');
    Route::get('cartClear', [cartController::class, 'cartClear'])->name('cart.clear');
    Route::get('cartRemove/{id}', [cartController::class, 'cartRemove'])->name('cart.remove');
    Route::get('cart/get', [cartController::class, 'cartGet'])->name('cart.get');
    Route::get('cart', [cartController::class, 'cart'])->name('cart');
    Route::post('cart/update/{id}', [cartController::class, 'cartUpdate'])->name('cart.update');

    Route::get('shipping', [CheckoutController::class, 'shipping'])->name('shipping');
    Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('checkout/token', [CheckoutController::class, 'makePagSeguroSession'])->name('checkout.token');
    Route::any('checkout/getToken', [CheckoutController::class, 'getToken'])->name('checkout.client');
    Route::post('checkout/finalizar', [CheckoutController::class, 'checkoutEnd'])->name('checkout.end');
    Route::post('checkout/boleto', [CheckoutController::class, 'boleto'])->name('checkout.boleto');



    Route::get('product-detail/{slug}', [LojaController::class, 'productDetail'])->name('product.detail');
});

Route::get('admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('admin/login/entrar', [AdminController::class, 'login'])->name('admin.login.entrar');
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

    Route::post('add/broche', [BrocheToUserController::class, 'store'])->name('add.broche');

    Route::get('pedidos', [AdminPedidosController::class, 'index'])->name('admin.pedidos');
    Route::get('pedidos/detalhes/{id}', [AdminPedidosController::class, 'pedidoDetail'])->name('admin.pedidos.detelhe');
});



