<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public static function getAuthores()
    {
        return Libro::all('escritor');
    }

    public static function showAuthorInfo($name)
    {
        $info = Author::where('name', $name)->get();
        return $info;
    }

    public static function showAuthorBoooks($name)
    {
        $books = Libro::where('escritor', $name)->get();
        return $books;
    }

    public static function getNumAuthores()
    {
        $numAuthores = Author::all('id');
        return $numero = count($numAuthores);

    }

}