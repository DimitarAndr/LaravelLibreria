<?php
/**
 * Created by PhpStorm.
 * User: dimitar
 * Date: 29/03/19
 * Time: 17:20
 */
?>
@include ('partials.navbar')
<html>
<head>
    <title>Eliminar Libro</title>
    {{--<style>
        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
            background-color: #dd430b;
        }
    </style>--}}
</head>

<div class="container">
<h2 class=text-center>Lista de libros</h2>
<table class="table table-hover danger">
    <thead class="thead-dark">
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Ano</th>
        <th>Escritor</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($infodDeleteLibro as $key => $libro )
        {{--<a href="{{$key}}">--}}
        <tr>
            <td>{{$libro['id']}}</td>
            <td>{{$libro['title']}}</td>
            <td>{{$libro['year']}}</td>
            <td>{{$libro['escritor']}}</td>
            <td>
                <a class="btn btn-danger btn-ok" href="{{URL::action('CatalogController@getDelete',$libro['id'])}}">Delete</a>
            </td>
        </tr>
        {{-- <div class="list-group">
             <a href="{{ url('/catalog/show/' . $key ) }}"
                class="list-group-item list-group-item-action list-group-item-danger"> {{$libro['title']}}</a>
         </div>--}}
    @endforeach
    </tbody>
</table>
</div>
</html>

