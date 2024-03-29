<?php

use Illuminate\Support\Facades\Route;
//se agregan los controladores que se deben utilizar
use App\Http\Controllers\AguaController;
use App\Http\Controllers\ProduccionController;
use App\Http\Controllers\OperacionController;
use App\Http\Controllers\CalidadController;
use App\Http\Controllers\CargaController;
use App\Http\Controllers\SuspensionController;
use App\Http\Controllers\ConsumoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\ValidatedInput;
use App\Models\User;
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

//Auth::routes();

Route::get('/', function () {
    //obteniendo los datos del usuario logueado
    $user = Auth::user();

    return view('welcome',compact('user'));
})->middleware('auth');

Route::get('/app', function () {
    return view('/layouts/app');
});

/*Route::get('login', function () {
    return view('login');
});
*/
Route::get('login',array('as'=>'login',function(){
    return view('login');
}));


Route::get('register', function () {
    return view('register');
});

Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('register',[RegisterController::class, 'register']);

Route::get('logout', [LoginController::class, 'logout']);



/*Utilizando este metodo se muestra por defecto los valores de Bocatoma desde el metodo index*/
Route::get('/resumen{fecha}', [ProduccionController::class, 'index'])->middleware('auth');

/*Muestra el formulario para editar un paro de operacion en especifico*/
Route::get('/editarParo{id_paro}', [SuspensionController::class, 'edit'])->middleware('auth');

/*Muestra el formulario para editar un paro de operacion en especifico*/
Route::get('/editarCarga{id_carga}', [CargaController::class, 'edit'])->middleware('auth');

/*Editar dosificaciones Coagulante-polimero, etc*/
Route::get('/editardosis{id_dosis}', [ConsumoController::class, 'show'])->middleware('auth');

/*Muestra Paro de operaciones*/
Route::get('/paros', [SuspensionController::class, 'index'])->middleware('auth');

/*Muestra el dashboard resumen*/


Route::get('/dashboard', [ProduccionController::class, 'dashboard'])->middleware('auth');
    
   




/*Maneja la ruta de la vista bitacora*/
Route::get('/bitacora', [CalidadController::class, 'cargarBitacora'])->middleware('auth');


/*Maneja la vista del historial de los equipos trabajando por estacion, muestra por defecto los equipos operando del dia actual*/
Route::get('/operacion', [OperacionController::class, 'index'])->middleware('auth');

/*Muestra las horas trabajadas de los equipos de bombeo, recibe fecha actual y mes qe hace referencia a una busqueda*/
Route::get('/horas-trabajadas/{fecha}/{mes}', [OperacionController::class, 'horasTrabajadas'])->middleware('auth');

/*Maneja las calidades de agua*/

Route::get('/calidad', [CalidadController::class, 'index'])->middleware('auth');

/*Controla y muestra la carga de quimicos en la vista Quimicos*/
Route::get('/cargas', [CargaController::class, 'index'])->middleware('auth');

Route::get('/agua/{tipo}', [AguaController::class, 'store'])->middleware('auth');

Route::get('/prod/{caudal}', [ProduccionController::class, 'store'])->middleware('auth');

/*Controla la vista producciones que muestra los datos de las 4 estaciones*/
Route::get('/producciones', [ProduccionController::class, 'producciones'])->middleware('auth');

//Recibe desde el formulario en la vista resumen y guarda la informacion
Route::post('store-form', [ProduccionController::class, 'store'])->middleware('auth');

//Recibe el id desde el formulario-mostrar para filtrar y buscar la estacion que se necesita
Route::post('mostrar', [ProduccionController::class, 'mostrar'])->middleware('auth');

//Recibe la fecha del formulario en la vista Equipos para filtrar la informacion segun fecha específicada
Route::post('/operacion', [OperacionController::class, 'index'])->middleware('auth');

/*Maneja y guarda las calidades del agua*/
Route::post('/calidades', [CalidadController::class, 'store'])->middleware('auth');

/*Maneja la busqueda de calidades por fecha y las muestra */
Route::post('muestra-calidad', [CalidadController::class, 'buscar'])->middleware('auth');

/*Recibe de la vista Resumen la fecha que el usuario selecciono para cambiar los datos de la vista */
Route::post('muestra', [ProduccionController::class, 'cargarFecha'])->middleware('auth');


/*Maneja la busqueda de los datos de bitacora por fecha*/
Route::post('bitacora', [CalidadController::class, 'cargarBitacora'])->middleware('auth');


//Guarda los datos del formulario para actualizar datos
Route::post('actualizar', [CalidadController::class, 'update'])->middleware('auth');

//Recibe el id de un tipo de agua en particular y precarga los datos en la vista Editar-Calidad para su posterior edicion de los valores
Route::get('/edit/{id}', [CalidadController::class, 'precargar'])->middleware('auth');

//Controla la edicion de las producciones recibiendo un id 
Route::get('/produccion/{id}', [ProduccionController::class, 'precargar'])->middleware('auth');

//Controla la edicion de los equipos operando
Route::get('/editar-equipos/{hora}/{fecha}/{id_estacion}', [OperacionController::class, 'precargar'])->middleware('auth');
/*Actualiza los valores de los equipos operando*/
Route::post('updatEquipos', [OperacionController::class, 'actualizarEquipos'])->middleware('auth');

//Guarda los datos del formulario de la vista Editar-Produccion para actualizar caudales
Route::post('actualiza_caudal', [ProduccionController::class, 'update'])->middleware('auth');

/*Maneja las producciones de las estaciones y las muestra segun la fecha requerida*/
Route::post('producciones', [ProduccionController::class, 'muestraProducciones'])->middleware('auth');

/*Controla las cargas de los quimicos*/
Route::post('cargas', [CargaController::class, 'store'])->middleware('auth');

/*filtra por fecha segun se indica en la vista Dashboard*/
Route::post('dashboard', [ProduccionController::class, 'dashboard'])->middleware('auth');

/*Filtra y muestra por quimico que se necesita ver en la vista QUIMICOS */
Route::post('quimico', [CargaController::class, 'index'])->middleware('auth');

/*Procesa y gurada en la BD la informacion de una suspension del formulario de la vista PAROS*/
Route::post('suspension', [SuspensionController::class, 'store'])->middleware('auth');

/*Captura y procesa: fecha y estacion de la cual se desean filtrar los paros de operacion en la vista PAROS*/
Route::post('filtrar-cortes', [SuspensionController::class, 'filtroCortes'])->middleware('auth');

/*Captura y procesa un paro en especifico para ser eliminado*/
Route::post('eliminar-paro', [SuspensionController::class, 'destroy'])->middleware('auth');

/*Actualizacion de datos de un paro en la BD*/
Route::post('actualizar-paro', [SuspensionController::class, 'update'])->middleware('auth');

/*Captura y procesa una carga especifica para ser eliminada*/
Route::post('eliminar-carga', [CargaController::class, 'destroy'])->middleware('auth');

/*Captura y procesa una carga especifica para ser eliminada*/
Route::post('actualizar-carga', [CargaController::class, 'update'])->middleware('auth');

/*Captura y actualiza las dosis de quimicos*/
Route::post('actualizar-dosis', [ConsumoController::class, 'update'])->middleware('auth');



/*Muestra las horas trabajadas de los equipos segun la fecha requerida*/
Route::post('worktime', [OperacionController::class, 'horasTrabajo'])->middleware('auth');


/*Elimina los datos de dosificaciones-niveles de camara, niveles rio, cloros aporte las pavas segun la hora y fecha */
/*Route::post('eliminar-procesos', [ConsumoController::class, 'destroy']);
*/

/*Captura y procesa un elemento de calidad especifico para ser eliminado*/
/*Route::post('eliminar-calidad', [CalidadController::class, 'destroy']);*/
