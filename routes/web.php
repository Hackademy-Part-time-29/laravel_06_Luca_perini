<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;


Route::get('/', [PageController::Class, ('homePageView')])->name('homepage');
Route::get('/servizi', [PageController::Class, ('serviziView')])->name('servizi');
Route::get('/team', [TeamController::Class, ('teamView')])->name('team');

