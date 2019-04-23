<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Author;

class AuthorController extends Controller
{
    public static function getIndex()
    {
        $authores = Author::getAuthores();
        return view('author.index', array('authores' => $authores));
    }

    public function getShow($name)
    {
        if (Auth::check()) {
            $authorInfo = Author::showAuthorInfo($name);
            $books = Author::showAuthorBoooks($name);
            return view('author.show', array('authorInfo' => $authorInfo), array('books' => $books));
        }
    }

    public function getCreate()
    {
        return view('author.create');
    }

    public function getEdit($id)
    {
        return view('author.edit', array('id' => $id));
    }

}