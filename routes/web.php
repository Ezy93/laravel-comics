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

Route::get('/comic-details/{id}', function ($id) {
    $navLinks = config('navlinks');
    $shopLinks = config('shopLinks');
    $comics = config('comics');
    $topFooterLinks = config('topFooterLinks');
    if(is_numeric($id) && $id >= 0 && $id < count($comics)){
        return view('guest.product-details', ["comic" => $comics[$id] , "navLinks" => $navLinks , "shopLinks" => $shopLinks , "topFooterLinks" => $topFooterLinks]);
    }else{
        abort(404); 
    }
}) -> name('details');

