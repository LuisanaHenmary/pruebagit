<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibroController;

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


Route::get('/',function() {
    	return view('welcome');
	});

Route::get('cliente/{c?}', function($c=0) {
    	return view('cliente',array('c' => $c ));
	})->where("c","[0-9]+");



Route::get('libro', [LibroController::class,'index']);

Route::get('destino/{c?}', function ($c=0) {
    	return view('destino',array('c' => $c ));
	})->name('destino');
