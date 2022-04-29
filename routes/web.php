<?php

use App\Http\Controllers\Ejercicio1Controller;
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
    //en view (carpeta.nombre archivo)
    return view('welcome');
});

Route::get('/Ejercicio1',[Ejercicio1Controller::class, 'Ejercicio1']);
Route::post('/resultadoej1', [Ejercicio1Controller::class,'resultado_ejercicio1'])->name('resultadoej1');