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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

Route::get('auth/login', function () {
    return view('auth/login');
});
Route::get('logout', function () {
    return redirect('auth/login');
});
Route::get('catalog', 'CatalogController@getIndex');

Route::get('catalog/show/{id}', 'CatalogController@getShow');

/*Route::get('catalog/show/{id}', 'CatalogController@cambiarEstadoLibro');*/

Route::get('contact-us', 'ContactUsController@contactUs');
Route::post('contact-us',[
    'as'=>'contactUs.store',
    'uses'=>'ContactUsController@contactUsPost'
]);

Route::get('catalog/create', 'CatalogController@getCreate');

Route::post('catalog/create', 'CatalogController@addLibro');

Route::get('catalog/edit/{id}', 'CatalogController@showEdit');

Route::post('catalog/edit/', 'CatalogController@getEdit');

Route::get('catalog/delete', 'CatalogController@getLibrosForDelete');

Route::get('catalog/delete/{id}', 'CatalogController@getDelete');

Route::get('author', 'AuthorController@getIndex');

Route::get('author/show/{id}', 'AuthorController@getShow');

Route::get('author/create', 'AuthorController@getCreate');

Route::get('author/edit', 'AuthorController@getEdit');

Route::get('editorial', 'EditorialController@getIndex');

Route::get('editorial/show', 'EditorialController@getShow');

Route::get('editorial/create', 'EditorialController@getCreate');

Route::get('editorial/edit', 'EditorialController@getEdit');
