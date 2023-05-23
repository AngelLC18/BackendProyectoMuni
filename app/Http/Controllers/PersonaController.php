<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Http\Requests\StorePersona;
class PersonaController extends Controller
{
    public function index()
    {
        return Persona::all();
    }

    public function store(StorePersona $request)
    {
        $persona = new Persona();
        $persona->fill($request->all());
        $persona->save();

        return $persona;
    }

    public function show(Persona $persona)
    {
        //function show (Persona $persona)
        //$persona = Persona::find($id);
        return response()->json(['status' => 'true', 'data' => $persona]);
    }

    public function update(StorePersona $request, Persona $persona)
    {
        $persona ->fill($request->all());
        $persona -> update();

        return $persona;
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return response()->json(['success' => 'Persona eliminada correctamente']);
        //Status 204, aprobo pero no duelve nada
    }
}
