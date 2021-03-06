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

Route::get('test', function () {

    return view('test');

});

Route::get('/', function () {

    return view('home');

});

Route::get('about', function () {

    return view('about');

});

Route::get('discord', function () {

    return redirect('http://discord.gg/JwdKW7K');

});

Route::get('fb', function () {

    return redirect('https://www.facebook.com/Trevxor-101778424930184');

});

Route::get('contact', function () {

    return view('contact');

});

Route::get('tips', function () {

    return view('tips');

});

Route::get('alerts', function () {

    return view('alerts');

});

Route::get('ticker', function () {

    return view('ticker');

});

Route::get('timer', function () {

    return view('timer');

});

Route::get('merch', function () {
    
    return redirect('https://streamlabs.com/trevxor#/merch');

});

Route::get('fidget', function () {

    return redirect('https://itunes.apple.com/us/app/animated-fidget-spinner-sticker-pack/id1272739329?mt=8');

});

Route::get('youtube', function () {

return redirect('https://www.youtube.com/channel/UCWehsqV0hK82hS53DGH_icg');

});