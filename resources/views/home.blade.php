<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1> {{ "Mundo Laravel $nombre $apellido " }}</h1>
    @isset($posts3)
        Esta definido y no es null
    @endisset

    @empty($posts3)
        posts3 esta vacio
    @endempty

    <ul>
        @forelse ($posts as $post)
            <li>
                @if ($loop->first)
                    Primero:
                @elseif ($loop->last)
                    Ultimo:
                @else 
                    Medio:
                @endif
                {{ $post }}
            </li>
        @empty
            <li>No hay posts</li>
        @endforelse
    </ul>
</body>
</html>