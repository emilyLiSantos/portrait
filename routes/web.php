<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AlbumController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Começo Categoria

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');

Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');


//Fim da Categoria

// COMEÇO DO ALBUM


Route::get('/album', [AlbumController::class, 'index'])->name('album.index');

//Route::get('/album/create', [CategoriaController::class, 'create'])->name('album.create');

//Route::post('/album', [CategoriaController::class, 'store'])->name('album.store');

//Route::get('/album/{id}', [CategoriaController::class, 'show'])->name('album.show');

//Route::get('/album/{id}/edit', [CategoriaController::class, 'edit'])->name('album.edit');

//Route::put('/album/{id}', [CategoriaController::class, 'update'])->name('album.update');

///Route::delete('/album/{id}', [CategoriaController::class, 'destroy'])->name('album.destroy');







// FIM DO ALBUM
