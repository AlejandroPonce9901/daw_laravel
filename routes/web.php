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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cache', function() {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return "Caché limpio";
})->name('cache');

Route::group(['middleware' => ['auth'] ], function(){
    Route::resource('users', 'UserController');
    Route::resource('productos', 'ProductoController');
    Route::resource('roles', 'rolesController');
    Route::resource('cproducto', 'cproductoController');
    Route::resource('proveedor', 'proveedorController');
    Route::resource('compra', 'compraController');
    Route::resource('clientes', 'clientesController');
    Route::resource('venta', 'ventaController');
    Route::resource('contactos', 'contactosController');

});

