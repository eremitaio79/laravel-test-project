<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projeto 1 - Laravel 10x</title>

    </head>


    <body>

        <h3>Projeto Laravel 10x</h3>

        <ul>
            <li><a href="{{ route('course.index') }}" target="_self">Listar os cursos</a></li>
            {{-- <li><a href="{{ route('course.show') }}" target="_self">Detalhes do curso</a></li> --}}
            <li><a href="{{ route('course.create') }}" target="_self">Cadastrar novo curso</a></li>
        </ul>

    </body>
</html>
