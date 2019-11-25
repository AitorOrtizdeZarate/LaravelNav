<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departamento;
use App\empleado;
use App\proyecto;


class listarController extends Controller
{
   public function departamentos()
    {
        $departamentos = departamento::all();
        return view('departamentos.index')->with('departamentos', $departamentos);
    }
    public function empleados()
    {
        $empleados = empleado::all();
        return view('empleados.index')->with('empleados', $empleados);
    }
    public function proyectos()
    {
        $proyectos = proyecto::all();
        return view('proyectos.index')->with('proyectos', $proyectos);
    }

    public function show($id){
    	$empleados= empleado::find($id);
    	return view('persona.empleado', compact('empleados'));
    }
}
