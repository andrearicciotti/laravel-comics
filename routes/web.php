<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $navbar_options = [
        [
            'option' => 'characters'
        ],
        [
            'option' => 'comics'
        ],
        [
            'option' => 'movies'
        ],
        [
            'option' => 'tv'
        ],
        [
            'option' => 'games'
        ],
        [
            'option' => 'collectibles'
        ],
        [
            'option' => 'videos'
        ],
        [
            'option' => 'fans'
        ],
        [
            'option' => 'news'
        ],
        [
            'option' => 'shop'
        ],
    ];
    $comics = config('comics');
    return view('home.home', compact('navbar_options','comics'));
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('partials.comics', compact('comics'));
})->name('comics');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('series.series', compact('comics'));
})->name('comics');