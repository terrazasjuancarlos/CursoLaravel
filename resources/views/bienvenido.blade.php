<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bienvenido</title>
</head>
<body>
    <h1> bienvenido al curso laravel 10</h1><hr>
    <h2>{{ $nombre }}</h2>
    <h2>listado de asistencias 07/10/2023</h2>
    <ul>
        @foreach ( $alumnos as $a )
            <li>{{ $a }}</li>

        @endforeach
    </ul>
    <h2>Datos</h2> 
    <table border="1">
        <tr>
            <td>nombre</td>
            <td>edad</td>
            <td>turnos</td>
        </tr>
        @foreach ( $datos as $d )

            <tr>
                <td>{{ $d["nombre"] }}</td>
                <td>{{ $d["edad"] }}</td>
                <td>{{ $d["turno"] }}</td>
            </tr>
        @endforeach
    </table>
    <p>laravel utiliza una arquitectura mvc modelo vista controlardor </p>

    <p>modelo: es la base dde datosd los ,modelos son nuestras tablas , por cada tabla debemos de tener un modelo 
        los modelos estan en la carpeta app/models
    </p>
    <p>Vista: las son los html y css que se muestran en la pagina web en la carpeta de resources/views </p>


</body>
</html>