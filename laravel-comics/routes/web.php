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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $comics = config('comics');
    return view('guest.comics', ["comics" => $comics]);
})->name('comics-page');

Route::get('/products/{index}', function ($index) {
    $comicsList = config('comics');
    if( is_numeric($index) && $index >= 0 && $index < count($comicsList)){
        return view('guest.detail', ["comic" => $comicsList[$index]]);
    } else {
        abort(404);
    }
})->name('comic-detail-page');
