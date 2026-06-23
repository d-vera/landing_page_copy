<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerEstudiante;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',[ControllerEstudiante::class,'metodoinicio']);
Route::get('/categorias',[ControllerEstudiante::class,'metodocategorias']);
Route::get('/productos',[ControllerEstudiante::class,'metodoproductos']);


Route::get('/id/categoria/timestamp',[ControllerEstudiante::class,'metodocategorias']);