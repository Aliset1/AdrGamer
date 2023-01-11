<!doctype html>
<html lang="es">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>
    
    <div class="container">
        <div class="text-center text-red-500">
            <h1 class="text-2xl font-bold text-center">--------Listado Equipos---------- </h1>
        </div>
        <table class='table table-striped table-hove'>
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2 text-gray-800">#</th>
                    <th class="border border-gray-400 px-4 py-2 text-gray-800">Equipo</th>
                    <th class="border border-gray-400 px-4 py-2 text-gray-800">Juego</th>
                    <th class="border border-gray-400 px-4 py-2 text-gray-800">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $row)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $row->team }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{$row->game}}</td>
                    <td class="border border-gray-400 px-4 py-2">{{$row->date}}</td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

