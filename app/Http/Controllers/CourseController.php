<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    /**
     * e79: Página iniciar de cursos. Apresenta a lista dos cursos cadastrados.
     */
    public function index()
    {
        // dd('index course controller.');

        // Retrieve all records from course table.
        $courses = Course::OrderByDesc('id')->paginate(2);


        return view('courses.index', ['courses' => $courses]);
    }


    /**
     * e79: Detalhes do curso selecionado.
     */
    public function show()
    {
        // dd('Show');
        return view('courses.show');
    }


    /**
     * e79: Carrega o formulário de cadastro de cursos.
     */
    public function create()
    {
        // dd('Create');
        return view('courses.create');
    }


    /**
     * e79: Faz o insert do novo curso no banco de dados.
     */
    public function store(Request $request)
    {
        // dd($request);
        // e79: Este método não possui view. Ele somente vai redirecionar após o insert.

        // e79: odel::método_de_inserção(parâmetro_que_recebe_os_dados->todas_as_colunas_da_tabela());
        // Course::create($request->all());

        /* e79: Esta é a forma de recuperar somente os valores de colunas específicas. Neste exemplo,
        somente a coluna name é utilizada. */
        Course::create([
            'name' => $request->name
        ]);

        // e79: Após fazer o insert, redireciona o usuário e imprime uma mensagem de sucesso na tela.
        return redirect()->route('course.show')->with('success', 'Curso cadastrado com sucesso!');
    }


    /**
     * e79: Carrega o formulário de edição de cursos.
     */
    public function edit()
    {
        // dd('Edit');
        return view('courses.edit');
    }


    /**
     *
     */
    public function update()
    {
        // dd('Update');
        // e79: Este método não possui view. Ele somente vai redirecionar após o update.
    }


    /**
     * e79: Faz a exclusão do curso selecionado.
     */
    public function destroy()
    {
        // dd('Delete');
    }
}
