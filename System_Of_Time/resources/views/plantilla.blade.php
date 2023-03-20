<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mi diario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dar" style="background-color: #4c6475;">
        <div class="container-fluid">
            <a class="navbar-link {{request()->routeIS('CInsert') ?'text-warning ':''}}" href='/'>Home</a>
            <a class="navbar-link {{request()->routeIS('recuerdo.create') ?'text-warning ':''}}" href='{{route('recuerdo.create')}}'>Ingresar Recuerdos</a>
            <a class="navbar-link {{request()->routeIS('recuerdo.index') ?'text-warning ':''}}" href="{{route('recuerdo.index')}}">Recuerdos</a>
        </div>
    </nav>
    <!--Contenido de la pagina-->
    @yield('contenido')
    <footer>ISC Angel Jovanny Marquez Chavez {{date('Y')}}</footer>
</body>
</html>
