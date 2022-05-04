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
    $navLinks = config('navlinks');
    return view('layouts.base', ["navLinks" => $navLinks ]);
}) -> name('home');

Route::get('/comics', function () {
    $navLinks = config('navlinks');
    $comics = config('comics');
    return view('guest.comics', ["comics" => $comics , "navLinks" => $navLinks]);
}) -> name('comics');

