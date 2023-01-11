<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>

<table class="table table-striped">

    <thead>
        <tr>
            <th>---------------------------------------------------------------</th>
        </tr>

        <tr>
            <th>------------------------Lista de juegos-------------</th>
        </tr>
        
        <tr>
            <td>Numero</td>
            <th>Nombre</th>
            <th>Descripcion</th>

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
    </tbody>d

</table>