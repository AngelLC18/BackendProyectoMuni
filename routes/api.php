<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PersonasCursosController;

//Rutas Personas
Route::post('personas', [PersonaController::class, 'store']);
Route::get('personas', [PersonaController::class, 'index']);
Route::get('personas/{persona}', [PersonaController::class, 'show']);
Route::put('personas/{persona}', [PersonaController::class, 'update']);
Route::delete('personas/{persona}', [PersonaController::class, 'destroy']);

//Rutas Cursos
Route::post('cursos', [CursoController::class, 'store']);
Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);
Route::put('cursos/{curso}', [CursoController::class, 'update']);
Route::delete('cursos/{curso}', [CursoController::class, 'destroy']);

//Rutas PersonasCursos
Route::post('personasCursos', [PersonasCursosController::class, 'store']);
Route::get('personasCursos', [PersonasCursosController::class, 'index']);
Route::get('personasCursos/{personasCursos}', [PersonasCursosController::class, 'show']);
Route::put('personasCursos/{personasCursos}', [PersonasCursosController::class, 'update']);
Route::delete('personasCursos/{personasCursos}', [PersonasCursosController::class, 'destroy']);

//Rutas Modalidad
Route::post('modalidad', [ModalidadController::class, 'store']);
Route::get('modalidad', [ModalidadController::class, 'index']);
Route::get('modalidad/{modalidad}', [ModalidadController::class, 'show']);
Route::put('modalidad/{modalidad}', [ModalidadController::class, 'update']);
Route::delete('modalidad/{modalidad}', [ModalidadController::class, 'destroy']);
