<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function getIndex(){
        return view('editorial');
    }

    public function getShow($id){
        return view('editorial.show');
    }

    public function getCreate(){
        return view('editorial.create');
    }

    public function getEdit($id){
        return view('editorial.edit',array('id'=>$id));
    }
}
