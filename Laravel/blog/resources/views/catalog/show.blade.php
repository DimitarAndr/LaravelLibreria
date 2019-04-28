<?php
/**
 * Created by PhpStorm.
 * User: Dimitar Andreev
 * Date: 25.3.2019 г.
 * Time: 13:50
 */

$libroPrestado = '<p>Libro Actualmente prestado</p><button type="button" class="btn btn-sm btn-danger">Devolver Libro</button>';
$libroDisponible = '<p>Libro Disponible</p><button type="button" class="btn btn-sm btn-primary">Coger Libro</button>'
?>
@include('partials.navbar')
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>{{$libro['title']}}</h2>
            <img class="img-fluid"
                 src="https://purepng.com/public/uploads/large/purepng.com-bookbookillustratedwrittenprintedliterature-1421526452123etpkk.png">
        </div>

        <div class="col-sm-8">
            <table id="titleLibro" class="table">
                <tr>
                    <td class="text-uppercase">Year</td>
                    <td>{{$libro['year']}}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Escritor</td>
                    <td>{{$libro['escritor']}}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Rented</td>
                        <td>{!!($libro['rented']==true)?$libroPrestado : $libroDisponible!!}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Synopsis</td>
                    <td>{{$libro['synopsis']}}</td>
                </tr>
            </table>
            <div class="buttones align-bottom" style="margin-top: 15%">
                <button type="button" class="btn btn-secondary"><a style="text-decoration: none;color:white"
                                                                   href="{{ url('/catalog/edit',$libro['id'])}}">Editar</a>
                </button>
                <button type="button" class="btn btn-secondary"><a style="text-decoration: none;color:white"
                                                                   href="{{ url('/catalog')}}">Volver Catalogo</a>
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
