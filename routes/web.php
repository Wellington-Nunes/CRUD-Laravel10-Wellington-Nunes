<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
/* 
//A listagem de users
Route::get('/users', [UserController::class, 'index'])->name('users.index');

//ex: direcionar para um form de criação de user
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

//esse de fato cria o user no DB (ligação direta ao DB)
Route::post('/users', [UserController::class, 'store'])->name('users.store');

//Mostrar um determinado user
Route::get('/users{user}', [UserController::class, 'show'])->name('users.show');

//ex: pegar um user para mostrar em um form de atualização
Route::get('/users{user}/edit', [UserController::class, 'edit'])->name('users.edit');

//esse de fato edita o user no DB (ligação direta ao DB)
Route::put('/users{user}', [UserController::class, 'update'])->name('users.update');

//esse de fato deleta o user no DB (ligação direta ao DB)
Route::delete('/users{user}', [UserController::class, 'destroy'])->name('users.destroy'); */

Route::resource('users', UserController::class);