<?php
/**
 * Created by PhpStorm.
 * User: Dimitar Andreev
 * Date: 25.3.2019 г.
 * Time: 13:50
 */
?>
@include('partials.navbar')
<html>
<head>
</head>
<body>

<div class="container">
    <h2>Anadir Nuevo Libro</h2>
    <form method="post" action="/catalog/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="Titulo" class="text-capitalize col-sm-3  text-muted  font-weight-bolder">Titulo Libro</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="title" id="titleLibro" placeholder="Titulo">
            </div>
        </div>
        <div class="form-group row">
            <label for="Ano" class="text-capitalize col-sm-3  text-muted  font-weight-bolder">Ano</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="year" id="ano" placeholder="Ano">
            </div>
        </div>
        <div class="form-group row">
            <label for="Escritor" class="text-capitalize col-sm-3  text-muted  font-weight-bolder">Escritor</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="escritor" id="escritor" placeholder="Escritor">
            </div>
        </div>
        <div class="form-group row">
            <label for="Resumen" class="text-capitalize text-muted col-sm-3 font-weight-bolder">Resumen</label>
            <div class="col-sm-9">
                <textarea rows="4" cols="30" class="form-control" name="synopsis" id="synopsis"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="photo" class="text-capitalize text-muted col-sm-3 font-weight-bolder">Photo</label>
            <div class="col-sm-9">
                <input type="file" name="photo" id="photo">
            </div>
        </p>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Anadir Libro</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>