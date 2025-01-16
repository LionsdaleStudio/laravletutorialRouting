<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/comic/store', function() {
    /* Valami tárolásra használt funkció */
    return "Működik";
})->name("comic.store");

/* Útvonalak a Shoe modell részére */
Route::get('/shoes/{shoe}/review', [ShoeController::class, "review"])->name("shoes.review");
Route::resource('/shoes', ShoeController::class);

/* Autentikációs útvonalak */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* REVIEW ÚTVONALAK */
Route::resource("/reviews", ReviewController::class);