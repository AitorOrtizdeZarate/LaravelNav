@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Crear Proyecto</h2>
  <form action="{{route('proyectos.store')}}" method="post">
     @csrf
    Nombre: <input type="text" name="nombre" value="{{old('nombre')}}"><br>
    @if ($errors->has('nombre'))
            <label style="color: red">
                {{$errors->first('nombre')}}
            </label><br>
        @endif
    Titulo: <input type="text" name="titulo" value="{{old('titulo')}}"><br>
    @if ($errors->has('titulo'))
            <label style="color: red">
                {{$errors->first('titulo')}}
            </label><br>
        @endif
    Fecha inicio: <input type="date" name="fechainicio" value="{{old('fechainicio')}}"><br>
     @if ($errors->has('fechainicio'))
            <label style="color: red">
                {{$errors->first('fechainicio')}}
            </label><br>
        @endif
    Fecha final: <input type="date" name="fechafin" value="{{old('fechafin')}}"><br>
     @if ($errors->has('fechafin'))
            <label style="color: red">
                {{$errors->first('fechafin')}}
            </label><br>
        @endif
    Horas estimadas: <input type="number" name="horasestimadas" value="{{old('horasestimadas')}}"><br>
    @if ($errors->has('horasestimadas'))
            <label style="color: red">
                {{$errors->first('horasestimadas')}}
            </label><br>
        @endif
    Empleado Responsable
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
