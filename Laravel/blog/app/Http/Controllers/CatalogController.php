<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
       $allLibros=Libro::listAllLibros();
        return view('catalog.index',['allLibros'=>$allLibros]);
    }

    public function getShow($id)
    {
        $libro=Libro::showLibro($id);
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

}
