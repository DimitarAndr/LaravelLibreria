<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
   public static function listAllLibros(){
       $titles=[];
       $libros = Libro::all('title');
       foreach ($libros as $libro){
         array_push( $titles,$libro);
       }
        return($titles);
    }

    public static function showLibro($id){
       $libroElegido=Libro::findOrFail($id);
       return($libroElegido);
    }
}
