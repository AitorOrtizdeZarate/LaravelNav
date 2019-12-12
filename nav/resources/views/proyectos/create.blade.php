@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Crear Proyecto</h2>
  <form action="{{route('proyectos.store')}}" method="post">
     @csrf
    Nombre: <input type="text" name="nombre"><br>
    Titulo: <input type="text" name="titulo"><br>
    Fecha inicio: <input type="date" name="fechainicio"><br>
    Fecha final: <input type="date" name="fechafin"><br>
    Horas estimadas: <input type="number" name="horasestimadas"><br>
    Empleado Responsable -> {{$proyectos->empleados->nombre}}
    <select name="empleadoRes">
      @foreach ($empleados as $empleado)
        @if(old('empleadoRes') == $empleado->id)
              <option value="{{$empleado->id}}" selected>{{$empleado->nombre}} {{$empleado->apellido}}</option>
            @else 
              <option value="{{$empleado->id}}">{{$empleado->nombre}} {{$empleado->apellido}}</option>
        @endif
        @endforeach
    </select><br>
    
    <input type="submit" value="Crear">
  </form>
  

@endsection
