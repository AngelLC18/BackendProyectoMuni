<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Http\Requests\StorePersona;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Persona::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersona $request)
    {

        //dd($request->all()); Explica como funciona request
        $persona = new Persona();
        $persona ->fill($request->all());
        $persona -> save(); //Guardo el regitro

        return $persona;
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //function show (Persona $persona)
        //$persona = Persona::find($id);
        return $persona;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePersona $request, Persona $persona)
    {
        $persona ->fill($request->all());
        $persona -> update();

        return $persona;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return response()->json(['success' => 'Persona eliminada correctamente']);
        //Status 204, aprobo pero no duelve nada
    }
}
