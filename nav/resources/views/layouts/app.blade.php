<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
           

            <div class="links" >
               <img src="{{URL::asset('imagenes/logo.png')}}" id="logo" style="height: 40px; width: 40px;">
                    <a href="{{route('empleados.index')}}">Empleados</a>
                    <a href="{{route('proyectos.index')}}">Proyecto</a>
                    <a href="{{route('departamentos.index')}}">Departamento</a>
            </div>
            <hr><br><br>
            <div class="op">
                @yield('content')
            </div>
        </div>
    </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
