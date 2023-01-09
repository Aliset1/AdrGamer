
	
				
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Tipo</th>
								<td>ACCIÓN</td>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->tipo }}</td>
								<td width="90">
								</td>
							@endforeach
						</tbody>
					</table>						
					

