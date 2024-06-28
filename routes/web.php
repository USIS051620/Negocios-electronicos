<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login', [App\Http\Controllers\Auth\loginController::class, 'index'])->name('login');
Route::get('register', [App\Http\Controllers\Auth\registerController::class, 'index'])->name('register');
Route::post('login', [App\Http\Controllers\Auth\loginController::class, 'login'])->name('login.new');
Route::post('register', [App\Http\Controllers\Auth\registerController::class, 'register'])->name('register.new');
Route::post('logout', [App\Http\Controllers\Auth\logoutController::class, 'logout'])->name('logout');


// Rutas para mostrar la lista de productos y para crear uno nuevo
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [App\Http\Controllers\ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [App\Http\Controllers\ProductoController::class, 'store'])->name('productos.store');

// Rutas para ver un producto específico, editar y actualizar
Route::get('/productos/{producto}', [App\Http\Controllers\ProductoController::class, 'show'])->name('productos.show');
Route::get('/productos/{producto}/edit', [App\Http\Controllers\ProductoController::class, 'edit'])->name('productos.edit');
Route::post('/productos/{producto}', [App\Http\Controllers\ProductoController::class, 'update'])->name('productos.update');

// Ruta para eliminar un producto
Route::delete('/productos/{producto}', [App\Http\Controllers\ProductoController::class, 'destroy'])->name('productos.destroy');

// Route::get('/productos/create', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos.create');
// Route::post('/productos', [App\Http\Controllers\ProductoController::class, 'store'])->name('productos.store');
