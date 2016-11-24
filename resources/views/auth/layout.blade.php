<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ trans('propio.titulo') }}</title>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/style.min.css') !!}
    {!! Html::style('css/mystyles.css') !!}

</head>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="font-bold" align="center">
                {{ trans('propio.titulo') }}
                <br>
                {{ trans('propio.empresa') }}
                <br>
                <br>
            </h2>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">

        <div class="col-md-6">

            <p align="justify">

            Bienvenidos al {{ trans('propio.titulo') }},
            donde podrá inscribir a los estudiantes de la Carrera de {{ trans('propio.empresa') }}.

        </p>

        <p align="justify">
            Mediante la plataforma {{ trans('propio.titulo') }} podra realizar la inscripción
            de los estudiantes y hacer el seguimiento del Rally.
        </p>

        <p align="justify">
            <small>Para poder ingresar al {{ trans('propio.titulo') }} deberá estar registrado
                por el administrador de la plataforma de la Carrera de {{ trans('propio.empresa') }}
                donde se le asignará un usuario y contraseña; todo ingreso a la plataforma
                estará registrado en el sistema.</small>
        </p>

        </div>
        <div class="col-md-6">

            @yield('content')

        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            Desarrollado por Charlie Seoane Sánchez
        </div>
        <div class="col-md-4 text-right">
            <small>Copyright © 2016</small>
        </div>
    </div>
</div>

</body>

</html>