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
                <h4>Editar curso selecionado</h4>
                {{-- {{ dd($courseId) }} --}}
                <form action="{{ route('course.update', ['courseId' => $courseId]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="alert alert-primary p-2" role="alert">ID selecionado:
                        <strong>{{ $courseId->id }}</strong>
                    </div>

                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" class="form-control"
                        value="{{ old('name', $courseId->name) }}" required />

                    <input type="hidden" id="id" name="id" value="{{ old('id', $courseId->id) }}" />
                    <input type="hidden" id="create_at" name="create_at" value="{{ old('create_at', $courseId->created_at) }}" />
                    <input type="hidden" id="updated_at" name="updated_at" value="{{ old('updated_at', $courseId->updated_at) }}" />

                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-primary btn-sm">&nbsp;&nbsp;&nbsp;Salvar&nbsp;&nbsp;&nbsp;</button>
                        <a href="{{ route('course.index') }}" target="_self" type="button" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>

                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
