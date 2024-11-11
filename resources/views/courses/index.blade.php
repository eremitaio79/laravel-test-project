<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <ul>
                    <li><a href="{{ route('course.show') }}" target="_self">Visualizar os detalhes do curso...</a></li>
                    <li><a href="{{ route('course.create') }}" target="_self">Cadastrar novo curso...</a></li>
                    <li><a href="{{ url('/') }}" target="_self">Voltar</a></li>
                </ul>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-12">
                <h4>Lista completa</h4>
                @forelse($courses as $course)
                <p>
                    Curso: <strong>{{ $course->name }}</strong><br />
                    <span style="font-size: 12px;">
                        {{-- Cadastrado em: {{ $course->created_at }}<br /> --}}
                        Cadastrado em: {{ \Carbon\Carbon::parse($course->created_at)->tz('America/Belem')->format('d/m/Y H:i:s') }}<br />
                        {{-- Atualizado em : {{ $course->updated_at }}<br /> --}}
                        Atualizado em : {{ \Carbon\Carbon::parse($course->updated_at)->tz('America/Belem')->format('d/m/Y H:i:s') }}<br />
                    </span>
                </p>
                @empty
                <div class="alert alert-warning" role="alert">
                    Nenhum curso encontrado.
                </div>
                @endforelse

                {{ $courses->links() }}
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
