@extends('adminlte::page')
<?php
$juegos = \DB::table('games')
->select('games.*')
->orderBy('games.id', 'desc')
->get();

$equipos = \DB::table('teams')
->select('teams.*')
->orderBy('teams.id', 'desc')
->get();
$modos = \DB::table('modes')
->select('modes.*')
->orderBy('modes.id', 'desc')
->get();

$categories = \DB::table('categories')
->select('categories.*')
->orderBy('categories.id', 'desc')
->get();

//LLenar arreglo con los nombres del los juegos para el grafico
$labels = array();
foreach ($juegos as $juego) {
    array_push($labels, $juego->nombre);
}
$inscriptionsins = \DB::table('inscriptionsins')
->select('inscriptionsins.*')
->orderBy('inscriptionsins.id', 'desc')
->get();

$inscriptionsgrs = \DB::table('inscriptionsgrs')
->select('inscriptionsgrs.*')
->orderBy('inscriptionsgrs.id', 'desc')
->get();
// Obtener la longitud de la colección
?>


@section('title', 'Dashboard')
@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$juegos->count()}}</h3>
                        <p>Juegos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$categories->count()}}<sup style="font-size: 20px"></sup></h3>

                        <p>Categoria</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$equipos->count()}}</h3>

                        <p>Grupos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$modos->count()}}</h3>

                        <p>Modos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <!-- TO DO List -->
        <div class="card">
            <div class="card-header mb-4">
                <h3 class="card-title text-center">
                    <i class="ion ion-clipboard mr-1 text-center"></i>
                    Estadisticas mas especificas
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 row">
                <div class="table-responsive col-md-6">
                    <h3 class="text-center text-white"></h3>
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Item</th>
                                <th>Creado</th>
                                <th>Actualizado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($juegos as $juego)
                            <tr>
                                <th scope="row">{{ $juego->id }}</th>
                                <td>{{ $juego->nombre }}</td>
                                <td>{{ $juego->created_at }}</td>
                                <td>
                                    <div class="sparkb" data-color="#00a65a" data-height="20">
                                        {{ $juego->updated_at }}
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="col-6 mt-4">
                    <div>
                        <!-- Map card -->
                        <div class="card bg-gradient-primary">
                            <div class="card-header border-0">
                                <h3 class="card-title m-1">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Inscripciones por categoría de juego
                                </h3>
                            </div>
                            <div class="card-body">
                                <canvas id="ins-x-cat" height="300" style="height: 300px;"></canvas>
                            </div>
                            <thead>
                                <tr>
                            
                                    <th>Actualizado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($juegos as $juego)
                                <tr>
                                    <th scope="row">{{ $juego->id }}</th>
                                    <td>{{ $juego->nombre }}</td>

                                    <td>
                                        <div class="sparkb" data-color="#00a65a" data-height="20">
                                          
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <!-- /.card-body-->

                        </div>
                    </div>
                </div>
                <div class="card connectedSortable col-lg-6">
                    <div class="card-header">
                        <h3 class="card-title m-1">
                            <i class="fas fa-chart-bar mr-1"></i>
                            Inscripciones individuales por juego
                        </h3>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="chart" id="revenue-chart" style="position: relative; height: 300px; ">
                            <canvas id="ins-x-cat2" height="300" style="height: 300px;"></canvas>
                        </div>
                    </div>
                            <thead>
                                <tr>
                            
                                    <th>Actualizado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($juegos as $juego)
                                <tr>
                                    <th scope="row">{{ $juego->id }}</th>
                                    <td>{{ $juego->nombre }}</td>

                                    <td>
                                        <div class="sparkb" data-color="#00a65a" data-height="20">
                                          
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card connectedSortable col-lg-6">
                    <div class="card-header">
                        <h3 class="card-title m-1">
                            <i class="fas fa-chart-bar mr-1"></i>
                            Inscripciones Grupales por juego
                        </h3>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="chart" id="revenue-chart" style="position: relative; height: 300px; ">
                            <canvas id="ins-x-cat3" height="300" style="height: 300px;"></canvas>
                        </div>
                            <thead>
                                <tr>
                            
                                    <th>Actualizado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($juegos as $juego)
                                <tr>
                                    <th scope="row">{{ $juego->id }}</th>
                                    <td>{{ $juego->nombre }}</td>

                                    <td>
                                        <div class="sparkb" data-color="#00a65a" data-height="20">
                                          
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                    </div><!-- /.card-body -->
                </div>
            </div>
        </div>
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
const ctx1 = document.getElementById('ins-x-cat');
const ctx2 = document.getElementById('ins-x-cat2');
const ctx3 = document.getElementById('ins-x-cat3');

new Chart(ctx1, {
    type: 'pie',
    data: {
        labels: ['Miedo', 'Aventur', 'Acion', 'terror', 'plataforma'],
        datasets: [{
            label: '# of Votes',
            data: [1, 2, 3, 4, 5],
            borderWidth: 1,
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 248, 154, 1)',
                'rgba(255, 203, 203, 1)',
                'rgba(243, 120, 120, 1)',
                'rgba(115, 169, 173, 1)'
            ],

        }]
    },
    options: {
        maintainAspectRatio: false,
        responsive: true,
    }
});

new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Miedo', 'Aventur', 'Acion', 'terror', 'plataforma'],
        datasets: [{
            label: '# of Votes',
            data: [1, 2, 3, 4, 5],
            borderWidth: 1,
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 248, 154, 1)',
                'rgba(255, 203, 203, 1)',
                'rgba(243, 120, 120, 1)',
                'rgba(115, 169, 173, 1)'
            ],

        }]
    },
    options: {
        maintainAspectRatio: false,
        responsive: true,
    }
});

new Chart(ctx3, {
    type: 'pie',
    data: {
        labels: ['Miedo', 'Aventur', 'Acion', 'terror', 'plataforma'],
        datasets: [{
            label: '# of Votes',
            data: [1, 2, 3, 4, 5],
            borderWidth: 1,
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 248, 154, 1)',
                'rgba(255, 203, 203, 1)',
                'rgba(243, 120, 120, 1)',
                'rgba(115, 169, 173, 1)'
            ],

        }]
    },
    options: {
        maintainAspectRatio: false,
        responsive: true,
    }
});
</script>
@stop