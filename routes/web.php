<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzakController;

Route::get('/', [PizzakController::class, 'akcios']);
Route::get('/adatlap/{id}', [PizzakController::class, 'adatlap']);   ## Tipuspélda adatlap útvonalára
Route::get('/all', [PizzakController::class, 'osszes']);             ## Rendezés nélkül
Route::get('/all/{p}', [PizzakController::class, 'osszes2']);        ## Rendezéssel
Route::get('/rnd', [PizzakController::class, 'rnd']);

Route::view('/add', 'add');                                          ## nézet + útvonal
Route::post('/add', [PizzakController::class, 'AddData']);           ## Ez a gomb lenyomáshoz kell

Route::get('/mod', [PizzakController::class, 'Mod']);                ## Lista a módosításhoz

Route::get('/modositas/{id}', [PizzakController::class, 'Modositas']);          ## Modositás form nézet + adat + útvonal
Route::post('/modositas/{id}', [PizzakController::class, 'ModositasData']);     ## Ez a gomb lenyomáshoz kell

Route::get('/torles/{id}', [PizzakController::class, 'Torles']);
Route::get('/exit/{id}', [PizzakController::class, 'Exit']);
