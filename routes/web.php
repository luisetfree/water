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

/*Controla la vista producciones que muestra los datos de las 4 estaciones*/
Route::get('/producciones', [ProduccionController::class, 'producciones']);

//Recibe desde el formulario en la vista resumen y guarda la informacion
Route::post('store-form', [ProduccionController::class, 'store']);

//Recibe el id desde el formulario-mostrar para filtrar y buscar la estacion que se necesita
Route::post('mostrar', [ProduccionController::class, 'mostrar']);

//Recibe la fecha del formulario en la vista Equipos para filtrar la informacion segun fecha específicada
Route::post('/operacion', [OperacionController::class, 'index']);

/*Maneja y guarda las calidades del agua*/
Route::post('/calidades', [CalidadController::class, 'store']);

/*Maneja la busqueda de calidades por fecha y las muestra */
Route::post('muestra', [CalidadController::class, 'buscar']);


//Guarda los datos del formulario para actualizar datos
Route::post('actualizar', [CalidadController::class, 'update']);

//Recibe el id de un tipo de agua en particular y precarga los datos en la vista Editar-Calidad para su posterior edicion de los valores
Route::get('/edit/{id}', [CalidadController::class, 'precargar']);

/*Maneja las producciones de las estaciones y las muestra segun la fecha requerida*/
Route::post('producciones', [ProduccionController::class, 'muestraProducciones']);