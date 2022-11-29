<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class PersonasController extends Controller
{
    //
    public function index()
    {
        $persona = Personas::all();
        return $persona;
    }
    public function getSelect()
    {
        $persona = Personas::select('id','nombre')->get();
        return $persona;
    }
    public function store(Request $request)
    {
        // Validate the request...
 
        $persona = new personas;
 
        $persona->nombre= $request->nombre;
        $persona->apellidos= $request->apellidos;
        $persona->telefono= $request->telefono;
        $persona->email= $request->email;
        $persona->edad= $request->edad;
        $persona->fecha_nacimiento= $request->fecha_nacimiento;
        $persona->id_cargo= $request->idCargos;
        
        
        
        $persona->save();
    }

    public function update(Request $request)
    {
         
        $persona = personas::find($request->id);
 
        $persona->nombre= $request->nombre;
        $persona->apellidos= $request->apellidos;
        $persona->telefono= $request->telefono;
        $persona->email= $request->email;
        $persona->edad= $request->edad;
        $persona->fecha_nacimiento= $request->fecha_nacimiento;
        $persona->id_cargo= $request->idCargos;
 
        $persona->save();
    }

    public function destroy(Request $request)
    {
     
        $persona =personas::find($request->id);
        $persona->delete();
    }
}
