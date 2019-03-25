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

Route::get('/', function () {
    return ('welcome');
});

Route::get('/Ruta',function(){
    return ('Texto a mostrar');
});

Route::get('login',function(){
    return ('Login usuario');
});
Route::get('logout',function(){
    return ('Logout usuario');
});
Route::get('catalog',function(){
    return ('Listado libros');
});

Route::get('catalog/show/{id}',function($id){
    return ('Vista detalle libro{id}');
});

Route::get('catalog/create ',function(){
    return ('Añadir libro');
});

Route::get('catalog/edit/{id} ',function(){
    return ('Modificar libro {id}');
});

Route::get('author',function(){
    return ('Listado de escritores');
});

Route::get('author/show/{id}',function(){
    return ('Vista detalle de autor');
});

Route::get('author/create',function(){
    return ('Añadir autor');
});

Route::get('author/edit/{id}',function(){
    return ('Modificar autor');
});

Route::get('editorial ',function(){
    return ('Listado de editoriales');
});

Route::get('editorial/show/{id}',function(){
    return ('Vista detalle de editorial');
});

Route::get('editorial/create',function(){
    return ('Añadir editorial');
});

Route::get('editorial/edit/{id}',function(){
    return ('Modificar editorial');
});
