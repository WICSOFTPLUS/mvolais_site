<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home');

Route::get('/about', function () {
    return view('pages/about');
})->name('about');


Route::get('/services', function () {
    return view('pages/service');
})->name('services');


Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');


Route::get('/produit', function () {
    return view('pages/produit');
})->name('produit');


Route::get('/actualite', function () {
    return view('pages/actualite');
})->name('actualite');


Route::post('/contact/send', [WebController::class, 'send'])->name('contact.send');
