@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Empleados</th>
    </tr>
    
    <tr>
      <td>{{$departamentos->id}}</td>
      <td>{{$departamentos->nombre}}</td>
      <td>
        @foreach($departamentos->empleados as $empleado)
          {{$empleado->nombre}}
        @endforeach
        </td>
    </tr>
    
  </table>

@endsection
