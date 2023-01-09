<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Numeroaula</th>
								<th>Bloque</th>
								<td>ACCIÓN</td>
							</tr>
						</thead>
						<tbody>
							@foreach($classrooms as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->numeroAula }}</td>
								<td>{{ $row->bloque }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Classroom id {{$row->id}}? \nDeleted Classrooms cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>	