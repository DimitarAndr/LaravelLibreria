<html>
<header>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</header>
</html>
<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
                LIBRERIA
            </a>
        </div>

        @if( true || Auth::check() )
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li{{ Request::is('catalog*') && !Request::is('catalog/create')? ' class=active' : ''}}>
                    <a href="{{url('/catalog')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Catálogo
                    </a>
                </li>
                <li{{ Request::is('catalog/create') ? ' class=active' : ''}}>
                    <a href="{{url('/catalog/create')}}">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                        Nuevo libro
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('logout')}}">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
        @endif
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>