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
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
//ruta cargos
Route::post('/api/cargos/guardar',[App\Http\Controllers\CargosController::class,'store']);


Auth::routes();

Route::post('/api/productos/mercancia', [App\Http\Controllers\ProductosController::class, 'product']);

Auth::routes();

Route::post('/api/personas/gente', [App\Http\Controllers\PersonasController::class, 'people']);

Auth::routes();

Route::post('/api/ingresos/ingreso', [App\Http\Controllers\IngresosController::class, 'ingreso']);

Auth::routes();

Route::post('/api/Ubicaciones/Ubicacion', [App\Http\Controllers\UbicacionesController::class, 'store']);

Auth::routes();

Route::post('/api/Despachos/Despacho', [App\Http\Controllers\DespachosController::class, 'store']);
