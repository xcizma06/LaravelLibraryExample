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

Route::group(['namespace' => 'BaseView'], function() {
    Route::get('/', 'BaseViewController@index')->name('home');
});

Route::group([
    'namespace' => 'Author',
    'prefix' => 'authors',
    'as' => 'author.',
], base_path('routes/author.php'));

Route::group([
    'namespace' => 'Entity',
    'prefix' => 'entities',
    'as' => 'entity.',
], base_path('routes/entity.php'));
