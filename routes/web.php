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

    return view('home');

});

Route::get('about', function () {

    return view('about');

});

Route::get('discord', function () {

    return redirect('http://discord.gg/JwdKW7K');

});

Route::prefix('personal')->group(function () {

    Route::get('setup', function () {

        return view('setup');

    });

    Route::get('discord', function () {

        return redirect('http://discord.gg/JwdKW7K');

    });

    Route::get('social', function () {

        return view('social');

    });

    Route::get('home', function () {

        return view('personal');

    });

});

Route::prefix('professional')->group(function () {

    Route::get('home', function () {

        return view('professional');

    });

});