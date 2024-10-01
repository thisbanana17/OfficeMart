<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AutenticaController;
use App\Http\Controllers\PedidoController;

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
//Ruta '/' --> minimercado.test

Route::view('/','inicio')->name('inicio');

//Ruta para categorias
Route::resource('/categorias', CategoriaController::class)->except(['show']);

//Ruta para productos
Route::resource('/productos', ProductoController::class);

//Ruta de registro de usuarios
route::view('/registro', 'auth.registro')->name('registro');
route::post('/registro', [AutenticaController::class, 'registro'])->name('registro.store');

//Ruta de login de usuarios
route::view('/login', 'auth.login')->name('login');
route::post('/login', [AutenticaController::class, 'login'])->name('login.store');
//Ruta de logout de usuarios
route::post('/logout', [AutenticaController::class, 'logout'])->name('logout');

//Ruta para editar el perfil de usuario
Route::get('/perfil', [AutenticaController::class, 'perfil'])->name('perfil');
Route::put('/perfil/{user}', [AutenticaController::class, 'perfilUpdate'])->name('perfil.update');
//Ruta para cambiar la contraseña de usuario
Route::put('/perfil/password/{user}', [AutenticaController::class, 'passwordUpdate'])->name('password.update');
//Rutas para pedidos
Route::resource('/pedidos', PedidoController::class)->except(['create']);
Route::get('/pedidos/create/{producto}', [PedidoController::class, 'create'])->name('pedidos.create');

auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

auth::routes(['verify' => true]);