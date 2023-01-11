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
    <h5 class=" font-weight-bold" style="text-align:center">------------Listado de Participantes---------</h5>
            <table class="table table-striped table-hove"  >
                <thead >
                    <tr>
                        <td>#</td>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Id Equipo</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($participants as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nombre }}</td>
                        <td>{{ $row->apellido }}</td>
                        <td>{{ $row->cedula }}</td>
                        <td>{{ $row->correo }}</td>
                        <td>{{ $row->telefono }}</td>
                        <td>{{ $row->id_equipo }}</td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
</div>