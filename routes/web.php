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
    $parametri = [ 
        'links' => [
            [
                'name' => 'CHARACTERS'
            ],
            [
                'name' => 'COMICS'
            ],
            [
                'name' => 'MOVIES'
            ],
            [
                'name' => 'TV'
            ],
            [
                'name' => 'GAMES'
            ],
            [
                'name' => 'COLLECTIBLES'
            ],
            [
                'name' => 'VIDEOS'
            ],
            [
                'name' => 'FANS'
            ],
            [
                'name' => 'NEWS'
            ],
            [
                'name' => 'SHOP'
            ],
        ]

    ];
    return view('guest.home', $parametri);
})->name('home');



/*
Route::get('/charact/{id}', function ($id) {
    $comics = collect(config('comics'));
    $selectedComic = $comics->firstwhere('id', $id);
    if ($selectedComic === null) abort(404);

    return view('guest.character', [
        'title' => $selectedComic['title'],
        'product' => $selectedComic
    ]);
})->name('character');
*/


