<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubicaciones;

class UbicacionesController extends Controller
{
    //
    public function index()
    {
        $Ubicacion = Ubicaciones::all();
        return $Ubicacion;
    }
    public function getSelect()
    {
        $Ubicacion = Ubicaciones::select('id','nombre')->get();
        return $Ubicacion;
    }
    public function store(Request $request)
    {
        // Validate the request...
 
        $Ubicacion = new Ubicaciones;
 
        $Ubicacion->area= $request->area;
        $Ubicacion->ubicacion= $request->ubicacion;
        $Ubicacion->fecha_movimiento= $request->fecha_movimiento;
        $Ubicacion->cantidad= $request->cantidad;
        $Ubicacion->id_ingreso= $request->idIngreso;
        
 
        $Ubicacion->save();
    }

    public function update(Request $request)
    {
         
        $Ubicacion = Ubicaciones::find($request->id);
 
        $Ubicacion->area= $request->area;
        $Ubicacion->ubicacion= $request->ubicacion;
        $Ubicacion->fecha_movimiento= $request->fecha_movimiento;
        $Ubicacion->cantidad= $request->cantidad;
 
        $Ubicacion->save();
    }

    public function destroy(Request $request)
    {
     
        $Ubicacion =Ubicaciones::find($request->id);
        $Ubicacion->delete();
    }
}
