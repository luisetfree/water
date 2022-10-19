<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AguaController;
use App\Http\Controllers\ProduccionController;
use App\Http\Controllers\OperacionController;
use App\Http\Controllers\CalidadController;

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

/*Route::get('/resumen', function () {
    return view('resumen');
});*/

//Route::get('/agua/{tipo}', 'AguaController@store');

//para enviar a la vista los datos y que sean mostrados
//Route::get('/resumen, [ProduccionController::class, 'index']);

/*cuando se accede a la url: /resumen, se invoca al metodo show de ProduccionController y este manda a la vista

resumen todos los valores almacenados en la tabla Produccion.*/
//Route::get('/resumen/{id}', [ProduccionController::class, 'show']);


/*Utilizando este metodo se muestra por defecto los valores de Bocatoma desde el metodo index*/
Route::get('/resumen', [ProduccionController::class, 'index']);


/*Maneja la vista del historial de los equipos trabajando por estacion, muestra por defecto los equipos operando del dia actual*/
Route::get('/operacion', [OperacionController::class, 'index']);

/*Maneja las calidades de agua*/
Route::get('/calidad', [CalidadController::class, 'index']);

Route::get('/agua/{tipo}', [AguaController::class, 'store']);

Route::get('/prod/{caudal}', [ProduccionController::class, 'store']);

//Recibe desde el formulario en la vista resumen y guarda la informacion
Route::post('store-form', [ProduccionController::class, 'store']);

//Recibe el id desde el formulario-mostrar para filtrar y buscar la estacion que se necesita
Route::post('mostrar', [ProduccionController::class, 'mostrar']);

//Recibe los parametros del formulario en la vista Equipos, para filtrar y buscar la estacion que se necesita mostrar
Route::post('/operacion', [OperacionController::class, 'store']);

/*Maneja y guarda las calidades del agua*/
Route::post('/calidades', [CalidadController::class, 'store']);