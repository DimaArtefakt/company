<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StartController;


Route::get('/start/{id}', [ MainController::class, 'staffUpdate' ])->name('staffUpdate');
Route::post('/start/{id}', [ MainController::class, 'staffUpdateMesseges' ])->name('staffUpdateSubmit');
Route::post('/addstaff', [ MainController::class, 'add' ])->name('addstaff');
Route::get('/add', [MainController::class, 'submit' ])->name('add');
Route::get('/',[ StartController::class, 'Start'])->name('home');
Route::get('/start', [ MainController::class, 'index' ])->name('start');

Route::get('/start/{id}/del', [ MainController::class, 'staffDel' ])->name('staffDel');
