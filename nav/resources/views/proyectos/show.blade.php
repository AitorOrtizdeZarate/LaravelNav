@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Empleado Responsable</th>
      </tr>
      
      <tr>
        <td>{{$proyectos->id}}</td>
        <td>{{$proyectos->nombre}}</td>
        <td>{{$proyectos->titulo}}</td>
        <td>{{$proyectos->fechainicio}}</td>
        <td>{{$proyectos->fechafin}}</td>
        <td>{{$proyectos->horasestimadas}}</td>
        <td>{{$proyectos->empleado->nombre}}</td>
      </tr>
      
    </table>

@endsection
