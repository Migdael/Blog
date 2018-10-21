<?php

//RUTAS DEL FEONT
Route::get('/', [
    'uses' => 'FrontController@index',
    'as'   => 'front/index',
]);

Route::get('front/buscar/categoria/{name}', 'FrontController@BuscarCategoria');
Route::get('front/buscar/tag/{name}', 'FrontController@BuscarTag');
Route::get('front/ver/articulo/{id}', 'FrontController@VerArticulo');

//rutas del panel de administarcion
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::group(['middleware' => 'admin'], function () {
        Route::resource('users', 'UsersController');
        Route::get('users/{id}/destroy', [
            'uses' => 'UsersController@destroy',
            'as'   => 'admin/users/destroy',
        ]);
    });

    Route::resource('categories', 'CategoriesController');
    Route::get('categories/destroy/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as'   => 'admin/categories/destroy',
    ]);

    Route::resource('tags', 'TagsController');
    Route::get('tags/destroy/{id}', [
        'uses' => 'TagsController@destroy',
        'as'   => 'admin/tags/destroy',
    ]);

    Route::resource('articles', 'ArticlesController');
    Route::get('articles/destroy/{id}', [
        'uses' => 'ArticlesController@destroy',
        'as'   => 'admin/articles/destroy',
    ]);

    Route::get('images', [
        'uses' => 'ImagesController@index',
        'as'   => 'admin/images/index',
    ]);
});

//------------------------------------------------------------------------------------------------------------

Auth::routes();
Route::get('/admin/index', 'HomeController@index')->name('admin/index');
