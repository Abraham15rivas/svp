@extends('layouts.app')

@section('title')
    @include('partials.title.holidayMenu',['title'=> __("Seleccione una opción")])
@endsection

@section('content')
    @include('partials.menus.'. App\User::roleUser())
@endsection