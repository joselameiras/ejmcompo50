<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/curso', function () {return view('curso');});
Route::get('/courses/{id}',function($id){return "curso no: ".$id;});
Route::get('/courses', function(){return "todos los cursos";});
Route::get('/controla', [CursosController::class, "index"]);

