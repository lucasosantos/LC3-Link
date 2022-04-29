<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Auth::routes();

Route::get('/painel', 'PainelController@index')->middleware('auth')->name('painel');

Route::get('/home', function () {
    return redirect(route('painel'));
})->name('home');