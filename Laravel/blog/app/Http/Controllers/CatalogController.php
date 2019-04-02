<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $infoAllLibrosCat = Libro::listAllLibros();
        return view('catalog.index', ['infoAllLibrosCat' => $infoAllLibrosCat]);
    }

    public function getShow($id)
    {
        $libro = Libro::showLibro($id);
        return view('catalog.show', ['libro' => $libro]);
    }

    public function getCreate()
    {
        return view('catalog.create.create');
    }

    public function addLibro()
    {
        $title = $_REQUEST['title'];
        $ano = $_REQUEST['year'];
        $escritor=$_REQUEST['escritor'];
        $synopsis=$_REQUEST['synopsis'];
        $infoAddLibro = array('title'=>$title,'year'=>$ano,'escritor'=>$escritor,'rented'=>0,'synopsis'=>$synopsis);

        Libro::addNewLibro($infoAddLibro);

        return $this->getIndex();

    }

    public function showEdit($id)
    {
        return view('catalog.edit.edit');
    }

    public function getEdit(){
        var_dump($_REQUEST);
        return view('catalog.edit.edit');

    }

    public function getLibrosForDelete()
    {
        $infodDeleteLibro = Libro::getInfoDelete();
        return view('catalog.delete.delete', ['infodDeleteLibro' => $infodDeleteLibro]);
    }

    public function getDelete($id)
    {
        $resultDelete = Libro::deleteLibroBBDD($id);
        return $this->getIndex();
    }


}
