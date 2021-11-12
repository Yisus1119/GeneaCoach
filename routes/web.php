<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login_RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginDocenteController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', HomeController::class);



Route::get('/Home',function (){
return view('Home');
});

Route::get('/login',function(){
return view('Login');

});



Route::get('Login', [LoginController::class,'create']);

Route::get('Register',[RegisterController::class,'show'] );

Route::get('Docente',[LoginDocenteController::class,'show'] );

Route::get('Blog',[BlogController::class,'show']);