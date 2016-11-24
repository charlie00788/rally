@extends('auth.layout')

@section('content')

    @include('partials.errors')

<div class="ibox-content">
    {!! Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form']) !!}
        {!! Form::hidden('active', true) !!}

        <div class="form-group">
            {!! Form::text('nickname', old('nickname'), ['class' => 'form-control', 'placeholder' => 'Usuario']) !!}

        </div>
        <div class="form-group">
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
        </div>
        {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-primary block full-width m-b']) !!}

        {{--<a href="{{ url('password/email') }}">--}}
            {{--<small>Olvidó su contraseña?</small>--}}
        {{--</a>--}}

    {!! Form::close() !!}
    <p class="m-t">
        <small>{{ trans('propio.empresa') }} &copy; 2016</small>
    </p>
</div>

@endsection