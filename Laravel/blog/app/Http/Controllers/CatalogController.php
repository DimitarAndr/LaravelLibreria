<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function addLibro(Request $request)
    {
        $title = $_REQUEST['title'];
        $ano = $_REQUEST['year'];
        $escritor = $_REQUEST['escritor'];
        $synopsis = $_REQUEST['synopsis'];
        $infoAddLibro = array('title' => $title, 'year' => $ano, 'escritor' => $escritor, 'rented' => 0, 'synopsis' => $synopsis);
        $file=$request->file('photo');
        $nextId =Libro::getNextId();
        $file->move('photos',$nextId);
        Libro::addNewLibro($infoAddLibro);
        return $this->getIndex();
    }

    public function cambiarEstadoLibro($id)
    {
        $libro = Libro::cambiarEstado($id);
        return view('catalog.show', ['libro' => $libro]);
    }

    public function showEdit($id)
    {
        Session::put('id', $id);
        return view('catalog.edit.edit');
    }

    public function getEdit()
    {
        $id = Session::get('id');
        $resultEdit = Libro::editLibro($id);
        return $this->getIndex();

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
