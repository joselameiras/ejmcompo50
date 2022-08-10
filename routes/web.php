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
Route::get('/main', function(){return view('main');});
Route::get('/create', function(){return view('create');});


Route::get('/controla',         [CursosController::class, "index"]);
Route::get('/controla/{id}',    [CursosController::class, "show"]);
Route::post('/controla',        [CursosController::class, "store"]);
Route::put('/controla/{id}',    [CursosController::class, "update"]);
Route::delete('/controla/{id}', [CursosController::class, "delete"]);

