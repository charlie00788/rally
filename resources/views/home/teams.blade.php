@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>Equipos</h2>
            <ol class="breadcrumb">
                <li>
                    Equipos en el sistema: {{ $personas->total() }}
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
                    <a class="btn btn-primary" href="#">
                        Agregar Equipo
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
                            <th>Nombre Equipo</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <td>{{ $team->nickname }}</td>
                                <td style="text-align: center"><a href="#" class="btn btn-xs btn-success">Ver</a></td>
                                <td style="text-align: center"><a href="#" class="btn btn-xs btn-danger">Eliminar</a></td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection