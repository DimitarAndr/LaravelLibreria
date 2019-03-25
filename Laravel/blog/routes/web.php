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
    return view('home');
});

Route::get('login',function(){
    return view('/auth/login');
});
Route::get('logout',function(){
    return view ('/auth/logout');
});
Route::get('catalog',function(){
    return view('catalog.index');
});

Route::get('catalog/show/{id}',function($id){
    return view ('catalog.show',array('id'=>$id));
});

Route::get('catalog/create ',function(){
    return view ('catalog/create.create');
});

Route::get('catalog/edit/{id} ',function($id){
    return view ('/catalog/edit.edit',array('id'=>$id));
});

Route::get('author',function(){
    return ('Listado de escritores');
});

Route::get('author/show/{id}',function($id){
    return ('Vista detalle de autor');
});

Route::get('author/create',function(){
    return ('Añadir autor');
});

Route::get('author/edit/{id}',function($id){
    return ('Modificar autor');
});

Route::get('editorial ',function(){
    return ('Listado de editoriales');
});

Route::get('editorial/show/{id}',function($id){
    return ('Vista detalle de editorial');
});

Route::get('editorial/create',function(){
    return ('Añadir editorial');
});

Route::get('editorial/edit/{id}',function($id){
    return ('Modificar editorial');
});
