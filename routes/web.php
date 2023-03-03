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

//Number 1
Route::get('/', function () {
    echo 'Halaman Awal Website';
});

//Number 2
Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games',function(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">Halaman Marbel Edu Games</a>';
    });
    Route::get('/marbel-and-friends-kids-games',function(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Halaman Marbel and Friends Kids Games</a>';
    });
    Route::get('/riri-story-books',function(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">Halaman Riri Story Books</a>';
    });
    Route::get('/kolak-kids-songs',function(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">Halaman Kolak Kids Songs</a>';
    });
});

//Number 3
Route::get('/news/{news?}', function ($news=' ') {
    return 'Halaman News '.$news;
});


//Number 4
Route::prefix('/program')->group(function(){
    Route::get('/karir',function(){
        return '<a href="https://www.educastudio.com/program/karir">Halaman Karir</a>';
    });
    Route::get('/magang',function(){
        return '<a href="https://www.educastudio.com/program/magang">Halaman Magang</a>';
    });
    Route::get('/kunjungan-industri',function(){
        return '<a href="https://www.educastudio.com/program/kunjungan-industri">Halaman Kunjungan Industri</a>';
    });
});

//Number 5
Route::get('/about-us', function () {
    echo '<a href="https://www.educastudio.com/about-us">Halaman About-Us</a>';
});

//Number 6
use App\Http\Controllers\Controller;

Route::resource('contact', Controller::class)->only([
    'index'
]);
