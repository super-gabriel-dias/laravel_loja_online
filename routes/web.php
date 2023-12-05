<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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

Route::resource('users', UserController::class);



Route::get('/', [SiteController::class, 'home'])->name('site.home');

Route::get('/sobre-nos', [SiteController::class, 'sobre_nos'])->name('site.sobre_nos');

Route::get('/produtos', [SiteController::class, 'produtos'])->name('site.produtos');

Route::get('/produtos/{slug}', [SiteController::class, 'details'])->name('site.details');

Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');

Route::post('/carrinho', [CarrinhoController::class, 'adicionarCarrinho'])->name('site.addcarrinho');

Route::post('/remover', [CarrinhoController::class, 'removerCarrinho'])->name('site.removecarrinho');

Route::get('/limpar', [CarrinhoController::class, 'limparCarrinho'])->name('site.limparcarrinho');

Route::view('/login', 'login.form')->name('login.form');

Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/register', [LoginController::class, 'create'])->name('login.create');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'checkemail']);

Route::get('/admin/produtos', [DashboardController::class, 'produtos'])->name('admin.produtos');

Route::delete('/admin/produtos/delete/{id}', [ProdutoController::class, 'destroy'])->name('admin.produto.delete');

Route::post('/admin/produtos/store', [ProdutoController::class, 'store'])->name('admin.produto.store');

Route::put('/admin/produtos/update/{id}', [ProdutoController::class, 'update'])->name('admin.produto.update');
