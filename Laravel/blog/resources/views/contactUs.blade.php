<html>
@include('partials.navbar')
<div class="container">
    <h1>Contactar</h1>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    {!! Form::open(['route'=>'contactUs.store']) !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('Nombre:') !!}
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('Correo:') !!}
        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Correo']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>

    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
        {!! Form::label('Text:') !!}
        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Texto']) !!}
        <span class="text-danger">{{ $errors->first('message') }}</span>
    </div>

    <div class="form-group">
        <button class="btn btn-success">Enviar</button>
    </div>

    {!! Form::close() !!}

</div>

</body>
</html>