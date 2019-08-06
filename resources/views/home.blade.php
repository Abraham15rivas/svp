@extends('layouts.app')

@section('title')
    @include('partials.title.home', [
        'title' => __("Bienvenido al nuevo SVP!")
    ])
@endsection

@section('content')
<div class="row">
    <div class="col s6 m4 l2"></div>
        <div class="col s12 m8 l8">
        <div class="row" style="margin-top:50px">
            <div class="col s12 l6" >
            <div class="card hoverable sticky-action">
                <div class="card-image waves-effect waves-block waves-blue opacidad">
                    <img class="activator" src="{{ asset('image/fondo8.jpg') }}">
                </div>
                <div class="card-content light-blue darken-3">
                    <span class="card-title center activator white-text">Vacaciones<i class="material-icons right">info</i></span>
                </div>
                <div class="card-action center light-blue darken-3">
                    <a class="btn waves-effect waves-blue white light-blue-text text-darken-3" href="{{ route('holidays.menu')}}">Ingresar<i class="material-icons right">send</i></a>
                </div>
                <div class="card-reveal light-blue darken-3 white-text">
                    <span class="card-title"><i class="material-icons right">close</i>Vacaciones</span>
                    <p>Solicita tus vacaciones aquí.</p>
                </div>
                </div>
            </div>
            <div class="col s12 l6" >
                <div class="card hoverable sticky-action">
                    <div class="card-image waves-effect waves-block waves-blue opacidad">
                        <img class="activator " src="{{ asset('image/fondo6.jpg') }}" height="400px">
                    </div>
                    <div class="card-content light-blue darken-3">
                        <span class="card-title center activator white-text">Permisos<i class="material-icons right">info</i></span>
                    </div>
                    <div class="card-action center light-blue darken-3">
                        <a class="btn waves-effect waves-blue white light-blue-text text-darken-3" href="{{ route('permits.menu')}}">Ingresar<i class="material-icons right">send</i></a>
                    </div>
                    <div class="card-reveal light-blue darken-3 white-text">
                        <span class="card-title"><i class="material-icons right">close</i>Permisos</span>
                        <p>Solicita tus permisos aquí.</p>
                    </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="col s6 m8 l2"></div>
</div>
@endsection
