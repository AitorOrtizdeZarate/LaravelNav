<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyecto;
use App\empleado;

class proyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = proyecto::all();
        return view('proyectos.index')->with('proyectos', $proyectos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = empleado::all();
        return view('proyectos.create')->with('empleados', $empleados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new proyecto;
        $proyecto->nombre = $request->input('nombre');
        $proyecto->titulo = $request->input('titulo');
        $proyecto->fechainicio = $request->input('fechainicio');
        $proyecto->fechafin = $request->input('fechafin');
        $proyecto->horasestimadas = $request->input('horasestimadas');
        $proyecto->empleado_id = $request-> get('empleadoRes');
        $proyecto->save();
        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyectos= proyecto::find($id);
        return view('proyectos.show', compact('proyectos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados = empleado::all();
        $proyectos = proyecto::find($id);
        return view('proyectos.edit')->with(['proyectos'=> $proyectos, 'empleados' => $empleados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proyecto = proyecto::find($id);
        $proyecto->nombre = $request->input('nombre');
        $proyecto->titulo = $request->input('titulo');
        $proyecto->fechainicio = $request->input('fechainicio');
        $proyecto->fechafin = $request->input('fechafin');
        $proyecto->horasestimadas = $request->input('horasestimadas');
        $proyecto->empleado_id = $request-> get('empleadoRes');
        $proyecto->save();
        return redirect()->route('proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = proyecto::find($id);
        $proyecto->delete();
        return redirect()->route('proyectos.index');
    }
}
