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
      </tr>
      @foreach ($empleados as $empleado)
      <tr>
        <td><a href="{{route('persona.empleado', $empleado->id)}}">{{$empleado->id}}</a></td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
      </tr>
      @endforeach
    </table>

@endsection
