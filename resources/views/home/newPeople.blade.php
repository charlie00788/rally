@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>Equipos</h2>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12 animated fadeInRight">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h2>Datos del Equipo</h2>
                        </div>
                        <div class="ibox-content">
                            <div class="form-horizontal">

                                @include('partials.errors')

                                {!! Form::open(['route' => 'web.postAddPeople', 'method' => 'POST']) !!}
                                {!! Form::hidden('team_id', $team_id) !!}

                                <div class="form-group">
                                    {!! Form::label('name', 'Nombre y Apellidos:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('name', old('name')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('code', 'Código:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('code', old('code')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('semester', 'Semestre:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('semester', old('semester')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('subject', 'Materia:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('subject', old('subject')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::submit('Guardar Persona', ['class' => 'btn btn-block btn-primary']) !!}
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection