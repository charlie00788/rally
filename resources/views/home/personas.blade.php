@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>Personas de los equipos</h2>
            <ol class="breadcrumb">
                <li>
                    Personas en el equipo: {{ $personas->count() }}
                </li>
            </ol>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!!  Alert::render() !!}

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content">
                    <a class="btn btn-primary" href="{{ route('web.getAddPeople', $team_id) }}">
                        Agregar Personas
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-0 animated fadeInRight">
            </div>
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content" style="display: block">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Nombre y Apellidos</th>
                            <th>Semestre</th>
                            <th>Código</th>
                            <th>Materia</th>
                            <th style="text-align: center">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($personas as $persona)
                            <tr>
                                <td>{{ $persona->name }}</td>
                                <td>{{ $persona->semester }}</td>
                                <td>{{ $persona->code }}</td>
                                <td>{{ $persona->subject }}</td>
                                <td style="text-align: center"><a href="{{ route('web.getDeletePeople', $persona->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection