<html>
<header>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</header>
</html>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="http://www.tasmanlibraries.govt.nz/assets/Uploads/bookmyne-app-logo-100px-high.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" {{ Request::is('catalog*') && !Request::is('catalog/create')? ' class=active' : ''}}>
                        <a class="nav-link" href="{{url('/catalog')}}">
                            <span class="sr-only"></span>
                            Catálogo
                        </a>
                    </li>
                    <li class="nav-item"{{ Request::is('catalog/create') ? ' class=active' : ''}}>
                        <a class="nav-link" href="{{url('/catalog/create')}}">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            Nuevo libro
                        </a>
                    </li>
                    <li class="nav-item" {{ Request::is('catalog/delete') ? ' class=active' : ''}}>
                        <a class="nav-link" href="{{url('/catalog/delete')}}">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            Eliminar libro
                        </a>
                    </li>
                    <li class="nav-item" {{ Request::is('author*') ? ' class=active' : ''}}>
                        <a class="nav-link" href="{{url('/author')}}">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            Authores
                        </a>
                    </li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item" {{ Request::is('contactUs*') ? ' class=active' : ''}}>
                        <a class="nav-link" href="{{url('/contact-us')}}">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                          Enviar Correo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>