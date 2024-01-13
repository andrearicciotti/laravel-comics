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
    return view('home.home', compact('navbar_options'));
})->name('home');
