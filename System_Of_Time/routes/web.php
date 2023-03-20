<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPag;
use App\Http\Controllers\controladorBD;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home')->name('routeHome');
Route::view('/ingresar', 'ingresar')->name('routeIngresar');
#Route::view('/recuerdos', 'recuerdos')->name('routeRecuerdos');

#Route::get('/ingresar', function(){
#    return "Esta es mi ruta de ingresar recuerdos";
#);

#Route::get('/ingresar/{name}', function($name){
#    return "Bienvenido a mi ruta ingresar $name";
#});

Route::get('/recuerdos/{name?}', ['as'=>'NRecuerdos', function($name = "Invitado"){
    $arrName=['Pepe', 'Angel', 'Petra'];
    return view('recuerdos', compact('name','arrName'));
}]);
*/
/*
Route::get('/', ['as'=>'NHome', 'uses'=>'App\Http\Controllers\ControladorPag@home']);
Route::get('ingresar', ['as'=>'NIngresar', 'uses'=>'App\Http\Controllers\ControladorPag@ingresar']);
Route::get('recuerdos/{name?}', ['as'=>'NRecuerdos', 'uses'=>'App\Http\Controllers\ControladorPag@recuerdos']);
*/
Route::get('/', [ControladorPag::class, 'fHome'])->name('NHome');
Route::get('/ingresar', [ControladorPag::class, 'fIngresar'])->name('NIngresar');
Route::get('/recuerdos/{name?}', [ControladorPag::class, 'fRecuerdos'])->name('NRecuerdos');

Route::post('/guardarRecuerdos', [ControladorBD::class, 'store'])->name('recuerdo.store');
//Ruta para la funcion create
Route::get('/recuerdo/create', [controladorBD::class, 'create'])->name('recuerdo.create');
//Ruta para la funcion store
Route::post('/recuerdo', [controladorBD::class, 'store'])->name('recuerdo.store');

//Funcion index para procesar la vista de consulta
Route::get('/recuerdo', [controladorBD::class, 'index'])->name('recuerdo.index');

//Funcion para mostrar un registro filtrado
Route::get('/recuerdo/{id}/edit', [controladorBD::class, 'edit'])->name('recuerdo.edit');

//Funcion update para editar el registro
Route::put('/recuerdo/{id}', [controladorBD::class, 'update'])->name('recuerdo.update');
