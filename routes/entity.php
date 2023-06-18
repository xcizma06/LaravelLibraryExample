<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EntityController@index')->name('index');

Route::group([
    'prefix' => 'book',
    'as' => 'book.',
    'namespace' => 'BookEntity'
], function (){
    Route::get('/create', 'BookEntityController@createForm')->name('create');
    Route::post('/create', 'BookEntityController@create')->name('create');

    Route::group([
        'prefix' => '{entity}/',
    ], function (){
        Route::get('/view', 'BookEntityController@view')->name('view');
        Route::get('/update', 'BookEntityController@updateForm')->name('update');
        Route::post('/update', 'BookEntityController@update')->name('update');
        Route::delete('/delete', 'BookEntityController@delete')->name('delete');
    });
});

Route::group([
    'prefix' => 'magazine',
    'as' => 'magazine.',
    'namespace' => 'MagazineEntity'
], function (){
    Route::get('/create', 'MagazineEntityController@createForm')->name('create');
    Route::post('/create', 'MagazineEntityController@create')->name('create');

    Route::group([
        'prefix' => '{entity}/',
    ], function (){
        Route::get('/view', 'MagazineEntityController@view')->name('view');
        Route::get('/update', 'MagazineEntityController@updateForm')->name('update');
        Route::post('/update', 'MagazineEntityController@update')->name('update');
        Route::delete('/delete', 'MagazineEntityController@delete')->name('delete');
    });
});

Route::group([
    'prefix' => 'digital',
    'as' => 'digital.',
    'namespace' => 'DigitalEntity'
], function (){
    Route::get('/create', 'DigitalEntityController@createForm')->name('create');
    Route::post('/create', 'DigitalEntityController@create')->name('create');

    Route::group([
        'prefix' => '{entity}/',
    ], function (){
        Route::get('/view', 'DigitalEntityController@view')->name('view');
        Route::get('/update', 'DigitalEntityController@updateForm')->name('update');
        Route::post('/update', 'DigitalEntityController@update')->name('update');
        Route::delete('/delete', 'DigitalEntityController@delete')->name('delete');
    });
});
