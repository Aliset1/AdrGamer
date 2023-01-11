
    <div class="container">
        <div class="text-center text-red-500">
            <h1 class="text-2xl font-bold text-center">Reporte de las Inscripciones Grupales </h1>
        </div>
        <table>
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

