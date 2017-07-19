<?php

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

    return view('welcome');

});

Route::get('social', function () {

    return view('social');

});

Route::get('welcome', function () {

    return view('welcome');

});

Route::get('discord', function () {

    return redirect('http://discord.gg/JwdKW7K');

});

Route::get('setup', function () {

    return view('setup');

});