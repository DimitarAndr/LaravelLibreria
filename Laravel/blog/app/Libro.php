<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Input;

class Libro extends Model
{
    public $timestamps = false;

    public static function listAllLibros()
    {
        $titles = [];
        $libros = Libro::all('title');
        foreach ($libros as $libro) {
            array_push($titles, $libro);
        }
        return ($titles);
    }

    public static function showLibro($id)
    {
        $libroElegido = Libro::findOrFail($id);
        return ($libroElegido);
    }

    public static function getInfoDelete()
    {
        $infoDelete = [];
        $libros = Libro::all('id', 'title', 'year', 'escritor');
        foreach ($libros as $libro) {
            array_push($infoDelete, $libro);
        }
        return ($infoDelete);
    }

    public static function deleteLibroBBDD($id)
    {
        Libro::findOrFail($id)->delete();
        $responseDeleteLibro = "Libro borado";
        return ($responseDeleteLibro);
    }

    public static function addNewLibro($infoAddLibro)
    {
        $libro = new Libro;
        $libro->title = $infoAddLibro['title'];
        $libro->year = $infoAddLibro['year'];
        $libro->escritor = $infoAddLibro['escritor'];
        $libro->synopsis = $infoAddLibro['synopsis'];
        $libro->save();
        $result = "success";
        return $result;
    }

    public static function editLibro($id)
    {
        var_dump($id);
        var_dump($_REQUEST);
    }
}
