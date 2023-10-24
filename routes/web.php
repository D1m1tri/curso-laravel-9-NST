<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.clientes');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){
    Route::get('dashboard', function(){
        return 'Dashboard Admin';
    })->name('dashboard');

    Route::get('users', function(){
        return 'Data Users';
    })->name('users');

    Route::get('clientes', function(){
        return 'Data Clientes';
    })->name('clientes');
});
