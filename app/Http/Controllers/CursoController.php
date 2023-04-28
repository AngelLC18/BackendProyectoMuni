<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Http\Requests\StoreCursoRequest;
use App\Http\Requests\UpdateCursoRequest;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Curso::all();
    }

    public function store(StoreCursoRequest $request)
    {
        $curso = new Curso();
        $curso->fill($request->all());
        $curso->save();

        return $curso;
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        return $curso;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCursoRequest $request, Curso $curso)
    {
        $curso->fill($request->all());
        $curso->update();

        return $curso;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return response()->json(['success' => 'Curso eliminado correctamente']);
    }
}
