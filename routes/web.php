<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/any', function () {
    return 'Permite todos os tipos de requisição HTTP (GET, POST, PUT, DELETE)';
});

Route::match(['get', 'post'], '/match', function () {
    return 'Permite apenas os tipos de requisição HTTP (GET, POST)';
});

Route::get('/produto/{id}/{cat?}', function ($id, $cat = 'sem categoria') {
    return 'O id do produto é: ' . $id . '<br> A categoria é: ' . $cat;
});

Route::redirect('sobre', 'empresa');
Route::view('empresa', 'site.empresa');
