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
               <img src="imagenes/logo.png" id="logo" style="height: 40px; width: 40px;">
                    <a href="empleados">Empleados</a>
                    <a href="proyectos">Proyecto</a>
                    <a href="departamentos">Departamento</a>
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
