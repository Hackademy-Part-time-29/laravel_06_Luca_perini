<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::Class, ('homePageView')])->name('homepage');
Route::get('/servizi', [PageController::Class, ('serviziView')])->name('servizi');

