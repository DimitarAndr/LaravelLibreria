<?php
$nameAuthor = $authorInfo[0]['name'];
$fecha_nacAuthor = $authorInfo[0]['fecha_nac'];
$nacionalidadAuthor = $authorInfo[0]['nacionalidad'];
$authorInfo
?>
@include('partials.navbar')
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>{{$nameAuthor}}</h2>
            <img class="img-fluid"
                 src="{{url('/photos/authores/'.$authorInfo[0]['id'])}}" alt="Image">
        </div>

        <div class="col-sm-8">
            <table id="Author" class="table">

                <th colspan="2" style="text-align: center"><h4>Informacion Author</h4></th>
                <tr>
                    <td class="text-uppercase">Fecha Nacimiento</td>
                    <td>{{$fecha_nacAuthor}}</td>
                </tr>
                <tr>
                    <td class="text-uppercase">Nacionalidad</td>
                    <td>{{$nacionalidadAuthor}}</td>
                </tr>
                <tr>
                    <th colspan="2" style="text-align: center"><h4>Libros</h4></th>
                </tr>
                @foreach ($books as $book)
                    <tr>
                        <td class="text-uppercase">{{$book['title']}}</td>
                        <td class="text-uppercase">{{$book['year']}}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>