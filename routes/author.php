<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AuthorController@index')->name('index');
Route::get('/create', 'AuthorController@createForm')->name('create');
Route::post('/create', 'AuthorController@create')->name('create');
