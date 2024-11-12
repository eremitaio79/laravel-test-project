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

        @if (session('success'))
            <div id="success-alert" class="alert alert-success p-2 mt-3" role="alert">
                {{ session('success') }} <span id="countdown">5</span>s
            </div>
        @endif

        <div class="row">
            <div class="col-12 mt-3">
                <h4>Exibe os detalhes</h4>

                {{-- {{ dd($course); }} --}}
                ID: {{ $course->id }}<br />
                Name: {{ $course->name }}<br />
                Name: {{ $course->created_at }}<br />
                Name: {{ $course->updated_at }}
                <hr />
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{ route('course.index') }}" target="_self">Mostrar todos os registros</a>&nbsp;|&nbsp;
                <a href="{{ route('course.edit', ['courseId' => $course->id]) }}" target="_self">Editar</a>&nbsp;|&nbsp;
                <a href="{{ url('/') }}" target="_self">Home</a><br />
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
