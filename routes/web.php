<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;


Route::get('/', [PageController::Class, ('homePageView')])->name('homepage');
Route::get('/servizi', [PageController::Class, ('serviziView')])->name('servizi');
Route::get('/team', [TeamController::Class, ('teamView')])->name('team');
Route::get('/contattaci', [ContactController::Class, ('contactView')])->name('contatti');
Route::post('/thank-you', [ContactController::Class, ('saveContact')])->name('saveContact');

