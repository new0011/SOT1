<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example_1;

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

/*Route::get('/', function () {
    return view('Example1');
})->name('CInicio');
*/

Route::get('/{Nombre}', Example_1::class)->name('CInicio');

Route::get('/Ejem/{id?}/{id2?}', function (string $id, string $id2){
    $Ejem = "Hay ".$id2." cargas horarias por revisar ".$id;
    return view('Ejem', compact('Ejem'));
})->name('CEjemplo');

