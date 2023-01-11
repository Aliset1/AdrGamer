@section('title', __('Participants'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Lista de Participantes </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Participantes">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Crear Participantes
						</div>
						
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDownloadModal">
						<i class="fa fa-plus"></i>  Descargar PDF
						</div>
						<div>
						<a class="btn btn-sm btn-info"  href="/generar_pdf" target="_blank">PDF</a>

						</div>

					
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.participants.create')
						@include('livewire.participants.update')
						
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Cedula</th>
								<th>Correo</th>
								<th>Telefono</th>
								<th>Id Equipo</th>
								<td>ACCIONES</td>
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
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Participant id {{$row->id}}? \nDeleted Participants cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $participants->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
