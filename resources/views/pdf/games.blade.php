<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>




            <table class="table table-striped"  >
                <thead >
                    <tr>
                        <td>#</td>
                        <th>Nombre</th>
                    
                        <td>Numero de juegos</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($games as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nombre }}</td>
                        
                        <td>{{ $row->id_juegos }}</td>
                    </tr>
                        @endforeach
                </tbody>

            </table>
