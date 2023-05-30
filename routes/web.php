<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|;


*/

Route::get('/',[AppController::class, 'index'])->name('index');
Route::get('Liste',[AppController::class, 'Liste'])->name('Liste');
Route::post('/Ajout',[AppController::class,'Ajout'])->name('Ajout');



