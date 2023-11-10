<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');

//Route::resource('produtos', ProdutoController::class);
//Route::resource('users', UserController::class);

Route::get('produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get('carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post('carrinho',[CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho');
Route::post('remover',[CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');
Route::post('atualizar',[CarrinhoController::class, 'atualizaCarrinho'])->name('site.atualizacarrinho');
Route::get('limpar', [CarrinhoController::class, 'limparCarrinho'])->name('site.limparcarrinho');

Route::view('login', 'login.form')->name('login.form');
Route::post('auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('register', [LoginController::class, 'create'])->name('login.register');

Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'checkemail']);
Route::get('admin/produtos', [ProdutoController::class, 'index'])->name('admin.produtos')->middleware(['auth', 'checkemail']);
