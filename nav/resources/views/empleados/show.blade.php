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
      </tr>
      
      <tr>
        <td>{{$empleados->id}}</td>
        <td>{{$empleados->nombre}}</td>
        <td>{{$empleados->email}}</td>
        <td>{{$empleados->telefono}}</td>
        <td>{{$empleados->proyecto->nombre}}</td>
      </tr>
     
    </table>


@endsection