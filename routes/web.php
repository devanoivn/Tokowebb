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
    return view('index', [
        
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        'Judulutama' => 'My Library',
        'writers' => [
            'Gunung' , 'Ucing', 'Kotak', 'Burik', 'Rtx', 'kuttie'
        ],
        'contact' => [
            '123456' , '7891011' , '12131415'
        ],
        'images' => [
            '1.jpg', '2.jpg' , '3.jpg', '4.jpg', ' 6.jpeg' , '6.jpeg'
        ]
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'Judulutama' => 'My Contact'
    ]);
});
Route::get('/product', function () {
    return view('product', [
        'Judulutama' => 'My Contact'
    ]);
});