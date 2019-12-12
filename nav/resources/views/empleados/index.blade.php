@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Responsable de</th>
        <th>Departamento</th>
      </tr>
      @foreach ($empleados as $empleado)
      <tr>
        <td><a href="{{route('empleados.show', $empleado->id)}}">{{$empleado->id}}</a></td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        <td>{{$empleado->proyecto->nombre}}</td>
        <td><a href="{{route('departamentos.show', $empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a></td>
      </tr>
      @endforeach
    </table>

@endsection
