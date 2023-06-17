<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EntityController@index')->name('index');
