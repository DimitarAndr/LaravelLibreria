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

Route::get('/', 'HomeController@getHome');

Route::get('login', function () {
    return view('auth.login');
});
Route::get('logout', function () {
    return view('auth.logout');
});
Route::get('catalog', 'CatalogController@getIndex');

Route::get('catalog/show/{id}', 'CatalogController@getShow');

Route::get('catalog/create', 'CatalogController@getCreate');

Route::post('catalog/create', 'CatalogController@addLibro');

Route::post('catalog/edit', 'CatalogController@getEdit');

Route::get('catalog/edit/{id}', 'CatalogController@showEdit');

Route::get('catalog/delete', 'CatalogController@getLibrosForDelete');

Route::get('catalog/delete/{id}', 'CatalogController@getDelete');

Route::get('author', 'AuthorController@getIndex');

Route::get('author/show', 'AuthorController@getShow');

Route::get('author/create', 'AuthorController@getCreate');

Route::get('author/edit', 'AuthorController@getEdit');

Route::get('editorial ', 'EditorialController@getIndex');

Route::get('editorial/show', 'EditorialController@getShow');

Route::get('editorial/create', 'EditorialController@getCreate');

Route::get('editorial/edit', 'EditorialController@getEdit');