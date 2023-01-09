<style>
    body {
        margin: 0 auto;
    }
</style>

<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>
    <table class="table table-striped"  >
        <thead class="table-dark">
            <tr>
                <td>#</td>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->nombre }}</td>
            </tr>
                @endforeach
        </tbody>
    </table>
