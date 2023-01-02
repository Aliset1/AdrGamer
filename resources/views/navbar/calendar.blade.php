<!-- Validar si ha iniciado sesion y colocar un navbar dependiendo si lo ha hecho-->
@if (Auth::check())
    @include('adminlte::page')
@else
    @include('navbar.app')
@endif

@section('title', 'Calendario')
@section('content_header')
    <h1>Calendario</h1>
@stop

@section('content')

    <p>Welcome to this beautiful admin panel.</p>
@stop
