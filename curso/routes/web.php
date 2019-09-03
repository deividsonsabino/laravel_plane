<?php

Route::group(['prefix' => 'panel', 'namespace' => 'Panel'], function () {
    
    Route::any('brands/search', 'BrandController@search')->name('brands.search');
    Route::resource('/brands', 'BrandController');

    Route::resource('planes', 'PlaneController');
    Route::any('planes/search', 'PlaneController@search')->name('planes.search');


    Route::get('/', 'PanelController@index')->name('panel');
});





Route::get('/promocoes', 'Site\SiteController@promotions')->name('promotions');
Route::get('/','Site\Sitecontroller@index')->name('home');

Auth::routes();

