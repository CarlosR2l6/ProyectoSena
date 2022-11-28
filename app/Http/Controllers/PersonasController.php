<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class PersonasController extends Controller
{
    //
    public function pople(Request $request)
    {
        // Validate the request...
 
        $persona = new personas;
 
        $persona->nombre= $request->nombre;
        $persona->apellidos= $request->apellidos;
        $persona->telefono= $request->telefono;
        $persona->email= $request->email;
        $persona->edad= $request->edad;
        $persona->fecha_nacimiento= $request->fecha_nacimiento;
        
        
 
        $persona->save();
    }
}
