
            <table class="table table-striped"  >
                <thead >
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
                    </tr>
                        @endforeach
                </tbody>
            </table>
