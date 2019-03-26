<?php
/**
 * Created by PhpStorm.
 * User: Dimitar Andreev
 * Date: 25.3.2019 г.
 * Time: 13:50
 */
var_dump($arrayLibros);
?>
@include('partials.navbar')
<html>
<head>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h2 class="font-weight-bold font-italic">Modificar Libro</h2>
            <form>
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="Titulo" class="text-capitalize text-muted  font-weight-bolder">Titulo Libro</label>
                    <input type="text" class="form-control" name="title" id="titleLibro" placeholder="Titulo">
                </div>
                <div class="form-group">
                    <label for="Ano" class="text-capitalize text-muted  font-weight-bolder">Ano</label>
                    <input type="text" class="form-control" name="year" id="ano" placeholder="Ano">
                </div>

                <div class="form-group">
                    <label for="Escritor" class="text-capitalize text-muted  font-weight-bolder">Escritor</label>
                    <input type="text" class="form-control" name="escritor" id="escritor" placeholder="Escritor">
                </div>

                <div class="form-group">
                    <label for="Resumen" class="text-capitalize text-muted  font-weight-bolder">Resumen</label>
                    <textarea rows="4" cols="30" class="form-control" name="synopsis" id="synopsis">
                    </textarea>
                </div>
                <input type="button" class="btn btn-success float-sm-right" name="submit" value="Modificar libro"/>

            </form>

        </div>
    </div>
</div>
</body>
</html>
