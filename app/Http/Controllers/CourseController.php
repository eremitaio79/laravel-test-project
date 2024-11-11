<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    /**
     * e79: Página iniciar de cursos. Apresenta a lista dos cursos cadastrados.
     */
    public function index()
    {
        // dd('index course controller.');

        return view('courses.index');
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
    public function store()
    {
        // dd('Store');
        // e79: Este método não possui view. Ele somente vai redirecionar após o insert.
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
