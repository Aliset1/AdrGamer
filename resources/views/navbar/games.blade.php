<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GamerFest</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/js/app.js', 'resources/sass/app.scss'])
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */body {

            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
<body>
    @include('navbar.app')
        <div>
            <h2 class="text-center fs-2">
                Games
            </h2>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Descripción</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($games as $game)
                                                        <tr>
                                                            <td>{{ $game->name }}</td>
                                                            <td>{{ $game->description }}</td>
                                                            <td>
                                                                <a href="{{ route('games.edit', $game->id) }}" class="btn btn-primary">Editar</a>
                                                                <form action="{{ route('games.destroy', $game->id) }}" method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</body>
</html>
