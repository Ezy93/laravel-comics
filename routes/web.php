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
    $shopLinks = config('shopLinks');
    $topFooterLinks = config('topFooterLinks');
    return view('layouts.base', ["navLinks" => $navLinks , "shopLinks" => $shopLinks , "topFooterLinks" => $topFooterLinks ]);
}) -> name('home');

Route::get('/comics', function () {
    $navLinks = config('navlinks');
    $shopLinks = config('shopLinks');
    $comics = config('comics');
    $topFooterLinks = config('topFooterLinks');
    return view('guest.comics', ["comics" => $comics , "navLinks" => $navLinks , "shopLinks" => $shopLinks , "topFooterLinks" => $topFooterLinks]);
}) -> name('comics');

