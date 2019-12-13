@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')


  <h2>Persona Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Responsable de</th>
        <th>Colabora en</th>
      </tr>
      
      <tr>
        <td>{{$empleados->id}}</td>
        <td>{{$empleados->nombre}}</td>
        <td>{{$empleados->email}}</td>
        <td>{{$empleados->telefono}}</td>
        <td>{{$empleados->proyecto->nombre}}</td>
        <td>
          
          @foreach($empleados->proyectos as $proyecto)
            {{$proyecto->nombre}}
          @endforeach

        </td>
      </tr>
     
    </table>
@endsection