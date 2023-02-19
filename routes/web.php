<?php

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

Route::get('/', function () {
    $cards = config("comics.cards");
    return view('sections.home', ["cards" => $cards]);
})->name("home");

Route::get('/cardPage/{id}', function ($id) {
    $cards = config('comics');
    $singleCard = '';
    foreach ($cards as $key => $card) {
        if ($key == $id) {
            $singleCard = $card;
        }
    }
    return view('sections.singlecard', compact('singleCard'));
})->name('cardPage');
