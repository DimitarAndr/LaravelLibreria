<?php

namespace App\Http\Controllers;

use App\Libro;

class CatalogController extends Controller
{
    public function getIndex()
    {
       $infoAllLibrosCat=Libro::listAllLibros();
        return view('catalog.index',['infoAllLibrosCat'=>$infoAllLibrosCat]);
    }

    public function getShow($id)
    {
        $libro=Libro::showLibro($id+1);
        return view('catalog.show',['libro'=>$libro]);
    }

    public function getCreate()
    {
        return view('catalog.create.create');
    }

    public function getEdit($id)
    {

        //return view('catalog.edit.edit', array('arrayLibros'=>$arrayLibros[$id]));
    }

    public function getLibrosForDelete(){
        $infodDeleteLibro=Libro::getInfoDelete();
        return view('catalog.delete.delete',['infodDeleteLibro'=>$infodDeleteLibro]);
    }

    public function getDelete($id){

    }

}
