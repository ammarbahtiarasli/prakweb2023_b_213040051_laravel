<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', [
        "name" => "Ahmad Ammar Bahtiar",
        "email" => "ammarbahtiarasli@gmail.com",
        "image" => "ahmad.png"
    ]);
});
Route::get('/blog', function () {
    return view('posts');
});
