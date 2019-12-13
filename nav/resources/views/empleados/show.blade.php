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
        <th>Jefe</th>
      </tr>
      
      <tr>
        <td>{{$empleados->id}}</td>
        <td>{{$empleados->nombre}}</td>
        <td>{{$empleados->email}}</td>
        <td>{{$empleados->telefono}}</td>
        <td>
          @if($empleados->proyecto)
          {{$empleados->proyecto->nombre}}
          @endif
        </td>
        <td>
          
          @foreach($empleados->proyectos as $proyecto)
            {{$proyecto->nombre}}
          @endforeach

        </td>
         <td>
           @if($empleados->jefeDe)
            {{$empleados->jefeDe->nombre}}
          @endif

        </td>
      </tr>
     
    </table>
@endsection