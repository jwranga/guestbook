<?php


Route::get('/', 'SignatureController@index')
    ->name('home');

Route::get('sign', 'SignatureController@create')
    ->name('sign');
