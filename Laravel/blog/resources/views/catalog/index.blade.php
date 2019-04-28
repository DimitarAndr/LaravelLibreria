<?php
/**
 * Created by PhpStorm.
 * User: Dimitar Andreev
 * Date: 25.3.2019 г.
 * Time: 13:50
 */

?>
@include ('partials.navbar')
<div class="container">
    <div class="row">
        @foreach($infoAllLibrosCat as $key => $libro )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="{{ url('/catalog/show/'.$libro['id'])}}">
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$libro['title']}}
                    </h4>
                </a>
            </div>
        @endforeach
    </div>
</div>
