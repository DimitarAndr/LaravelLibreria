<?php
/**
 * Created by PhpStorm.
 * User: Dimitar Andreev
 * Date: 25.3.2019 г.
 * Time: 13:50
 */
$libroPrestado = '<p>Libro Actualmente prestado</p><button type="button" class="btn btn-sm btn-danger">Devolver Libro</button>';
$libroDisponible='<p>Libro Disponible</p><button type="button" class="btn btn-sm btn-primary">Coger Libro</button>'
?>
@include('partials.navbar')
<html>
<head>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>{{$arrayLibros['title']}}</h2>
            <img class="img-fluid"
                 src="https://purepng.com/public/uploads/large/purepng.com-bookbookillustratedwrittenprintedliterature-1421526452123etpkk.png">
        </div>

        <div class="col-sm-8">
            <table id="titleLibro" class="table">
                <tr>
                    <td class="text-uppercase">Year</td>
                    <td>{{$arrayLibros['year']}}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Escritor</td>
                    <td>{{$arrayLibros['escritor']}}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Rented</td>
                    <td>{!!($arrayLibros['rented']==true)?$libroPrestado : $libroDisponible!!}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Synopsis</td>
                    <td>{{$arrayLibros['synopsis']}}</td>
                </tr>
            </table>
            <div class="buttones align-bottom" style="margin-top: 15%">
            <button type="button" class="btn btn-secondary">Editar</button>
            <button type="button" class="btn btn-secondary">Volver Catalogo</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
