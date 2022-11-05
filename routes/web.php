<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;
use App\Http\Controllers\SesionesController;
use Illuminate\Http\Request;
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

Route::get('/',  [[Form::class, 'home']]);

Route::get('/lp', [Form::class, 'landing']);

Route::get('/form/{code?}' , [Form::class, 'formu']);

ROUTE::post('/formulario' , [Form::class, 'recibirForm']);

// ROUTE::get('/sesion', [SesionesController::class, 'index']);
// ROUTE::get('/sesion/{id}', [SesionesController::class, 'show']);

ROUTE::resource('sesion', SesionesController::class);