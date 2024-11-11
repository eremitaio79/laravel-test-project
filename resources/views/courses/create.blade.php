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
            <h4>Cadastrar novo curso</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-3">
            <form action="{{ route('course.store') }}" method="post">
                @csrf
                @method('POST')
                
                <div class="row">
                    <div class="col-12">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" placeholder="Nome do curso" value="{{ old('name') }}" required />
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>