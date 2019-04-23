<?php

namespace App\Http\Controllers;

use App\Author;
use App\Libro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numLibros= Libro::getNumLibros();
        $numAuthores= Author::getNumAuthores();
        return view('home',array('numLibros'=>$numLibros,'numAuthores'=>$numAuthores));
    }
}