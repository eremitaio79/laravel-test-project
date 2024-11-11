<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// e79: My routes.
// e79: Courses.
Route::get('/index-course', [CourseController::class, 'index'])->name('course.index'); // e79: Index de cursos. Lista todos os cursos.
Route::get('/show-course/{courseId}', [CourseController::class, 'show'])->name('course.show'); // e79: Página que apresenta os detalhes do curso selecionado.
Route::get('/create-course', [CourseController::class, 'create'])->name('course.create'); // e79: Página de form para inserção de novos cursos.
Route::post('/store-course', [CourseController::class, 'store'])->name('course.store'); // e79: Insert do novo curso.
Route::get('/edit-course', [CourseController::class, 'edit'])->name('course.edit'); // e79: Página de form para editar os dados do curso.
Route::put('update-course', [CourseController::class, 'update'])->name('course.update'); // e79: Update do curso selecionado.
Route::delete('destroy-course', [CourseController::class, 'destroy'])->name('course.destroy'); // e79: Deleta o curso selecionado.
