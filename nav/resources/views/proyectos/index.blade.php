@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
  <a href="{{route('proyectos.create')}}"><button>Insertar Proyecto</button></a>
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
      @foreach ($proyectos as $proyecto)
      <tr>
        <td><a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->id}}</a></td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td>{{$proyecto->empleado->nombre}}</td>
        <td><a href="{{route('proyectos.edit', $proyecto->id)}}">Editar</a></td>
        <td>
                <form action="{{ route('proyectos.destroy', $proyecto->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Elimiar">
                </form>
            </td>
      </tr>
      @endforeach
    </table>

@endsection


