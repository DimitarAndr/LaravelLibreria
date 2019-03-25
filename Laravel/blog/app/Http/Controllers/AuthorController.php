<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getIndex()
    {
        return view('author');
    }

    public function getShow($id)
    {
        return view('author.show', array('id' => $id));
    }

    public function getCreate(){
        return view('author.create');
    }

    public function getEdit($id){
        return view('author.edit',array('id'=>$id));
    }

}
