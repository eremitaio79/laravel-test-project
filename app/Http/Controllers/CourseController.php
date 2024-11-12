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
        $courses = Course::OrderByDesc('id')->paginate(10);


        return view('courses.index', ['courses' => $courses]);
    }


    /**
     * e79: Detalhes do curso selecionado.
     */
    public function show(Request $request)
    {
        $course = Course::where('id', $request->courseId)->first();

        /* // Verifica se há dados de depuração na sessão
        $debugCourse = session('debug_course');

        // Exibe os dados da sessão para revisão
        if ($debugCourse) {
            // Aqui você pode fazer um dd($debugCourse) para inspecionar
            dd($debugCourse);
        } */

        return view('courses.show', ['course' => $course]);
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
        // Cria o curso e armazena o modelo criado em uma variável
        $course = Course::create([
            'name' => $request->name
        ]);

        // Armazena os dados do curso na sessão para revisão
        session()->flash('debug_course', $course);

        // Redireciona para a rota, usando o ID do curso recém-criado
        return redirect()->route('course.show', ['courseId' => $course->id])->with('success', 'Curso cadastrado com sucesso!');
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
