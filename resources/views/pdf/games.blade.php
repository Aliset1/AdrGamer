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

<h5 class=" font-weight-bold" style="text-align:center">------------Listado de Juegos---------</h5>

<table class="table table-striped table-hove">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nombre</th>
								<th>Reglas</th>
								<th>Valor</th>
								<th>Id Categoria</th>
								<th>Id Aula</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody>
							@foreach($games as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->nombre }}</td>
								<td>{{ $row->reglas }}</td>
								<td>{{ $row->valor }}</td>
								<td>{{ $row->id_categoria }}</td>
								<td>{{ $row->id_aula }}</td>
								<td width="90">
								
								</td>
							@endforeach
						</tbody>
					</table>
