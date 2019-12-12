@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Editar Proyecto</h2>
  <form action="{{route('proyectos.update', $proyectos->id)}}" method="post">
    @method('PUT')
     @csrf
    Nombre: <input type="text" name="nombre" value="{{$proyectos->nombre}}"><br>
    Titulo: <input type="text" name="titulo" value="{{$proyectos->titulo}}"><br>
    Fecha inicio: <input type="date" name="fechainicio" value="{{$proyectos->fechainicio}}"><br>
    Fecha final: <input type="date" name="fechafin" value="{{$proyectos->fechafin}}"><br>
    Horas estimadas: <input type="number" name="horasestimadas" value="{{$proyectos->horasestimadas}}"><br>
    Empleado responsable:
    <select name="empleadoRes">
      @foreach ($empleados as $empleado)
        @if(old('empleadoRes') == $empleado->id)
              <option value="{{$empleado->id}}" selected>{{$empleado->nombre}} {{$empleado->apellido}}</option>
            @else 
              <option value="{{$empleado->id}}">{{$empleado->nombre}} {{$empleado->apellido}}</option>
        @endif
        @endforeach
    </select><br>
    
    <input type="submit" value="Editar">
  </form>
  

@endsection
