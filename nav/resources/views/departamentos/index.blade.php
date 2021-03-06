@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Empleados</th>
      <th>Jefe</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td><a href="{{route('departamentos.show', $departamento->id)}}">{{$departamento->id}}</a></td>
      <td>{{$departamento->nombre}}</td>
        <td>
        @foreach($departamento->empleados as $empleado)
          {{$empleado->nombre}}
        @endforeach
        </td>
        <td>
          @if($departamento->jefe)
            {{$departamento->jefe->nombre}}
          @endif
        </td>
    </tr>
    @endforeach
  </table>

@endsection
