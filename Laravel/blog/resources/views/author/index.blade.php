<?php
?>
@include ('partials.navbar')
<div class="container">
    <h2 class="text-center">Todos los Authores</h2>
    <div class="row">
        @foreach($authores as $author)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href={{url('/author/show',array($author['escritor']))}}>
                    <img class=" img-fluid" width="40%"
                         src="https://visualpharm.com/assets/809/Person-595b40b65ba036ed117d315a.svg">
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$author['escritor']}}
                    </h4>
                </a>
            </div>
        @endforeach
    </div>
</div>


