<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <ul>
                    {{-- <li><a href="{{ route('course.show') }}" target="_self">Visualizar os detalhes do curso...</a></li> --}}
                    <li><a href="{{ route('course.create') }}" target="_self">Cadastrar novo curso...</a></li>
                    <li><a href="{{ url('/') }}" target="_self">Voltar</a></li>
                </ul>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-12">
                @if (session('success'))
                    <div id="success-alert" class="alert alert-success p-2 mt-3" role="alert">
                        {{ session('success') }} <span id="countdown">5</span>s
                    </div>
                @endif

                <h4>Lista completa</h4>
                @forelse($courses as $course)
                    <p>
                        ID: <strong>{{ $course->id }}</strong><br />
                        Curso: <strong>{{ $course->name }}</strong><br />
                        <span style="font-size: 12px;">
                            {{-- Cadastrado em: {{ $course->created_at }}<br /> --}}
                            Cadastrado em:
                            {{ \Carbon\Carbon::parse($course->created_at)->tz('America/Belem')->format('d/m/Y H:i:s') }}<br />
                            {{-- Atualizado em : {{ $course->updated_at }}<br /> --}}
                            Atualizado em :
                            {{ \Carbon\Carbon::parse($course->updated_at)->tz('America/Belem')->format('d/m/Y H:i:s') }}<br />
                        </span>
                        >>&nbsp;<a href="{{ route('course.show', ['courseId' => $course->id]) }}"
                            target="_self">Detalhes deste curso...</a>
                        &nbsp;|&nbsp;<a href="{{ route('course.edit', ['courseId' => $course->id]) }}"
                            target="_self">Editar...</a>
                    <form action="{{ route('course.destroy', ['courseId' => $course->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        &nbsp;|&nbsp;<button type="submit" onclick="return confirm('Excluir o registro?')" target="_self">Excluir...</button>
                    </form>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        // Define o tempo inicial do contador em segundos
        let countdownTime = 5;

        // Função para atualizar o contador regressivo a cada segundo
        const countdownInterval = setInterval(() => {
            countdownTime--;
            document.getElementById('countdown').textContent = countdownTime;

            // Quando o contador chegar a 0, inicia o efeito de desaparecimento
            if (countdownTime <= 0) {
                clearInterval(countdownInterval); // Para o intervalo
                const alert = document.getElementById('success-alert');
                if (alert) {
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';
                    setTimeout(() => alert.remove(), 500); // Remove o elemento após o fade-out
                }
            }
        }, 1000);
    </script>
</body>

</html>
