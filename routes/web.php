<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/formulario', [RegistroController::class,'index'])->name('formulario.index');

//http://localhost/form/public/formulario/registro
Route::get('/register', [RegistroController::class, 'create'])->name('formulario.create');
//http://localhost/form/public/formulario
Route::post('/formulario', [RegistroController::class, 'store'])->name('formulario.store');
  









/*  Route::get('/cursos', [CursoController::class,'index'])->name('cursos.index');

    Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');

    Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');

    Route::get('/cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

    Route::get('/cursos/{id}/edit',[CursoController::class,'edit'])->name('cursos.edit');

    Route::put('/cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');*/