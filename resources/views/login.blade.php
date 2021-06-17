<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>LOGIN</title>
</head>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="#"><img class="col-md-4 img-fluid" src="img/logo.png"></a>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item active text-right">
                    <a href="#" class="btn-login btn btn-danger btn-group">Iniciar Sesión</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<body>
<div class="container">
    <div class="row justify-content-center pt-5 mt-5 m-1">
        <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
            <form action="" method="post">
                {{csrf_field()}}
                <div class="form-group text-center pt-3">
                    <h1 class="text-dark">Iniciar</h1>
                </div>
                @if(isset($estatus))
                    @if($estatus == "success")
                        <label class="text-primary text-center">{{$mensaje}}</label>
                    @elseif($estatus == "error")
                        <label class="text-danger text-center">{{$mensaje}}</label>
                    @endif
                @endif
                <div class="form-group mx-sm-4 pt-3">
                    <input type="text" class="form-control" name="correo" placeholder="Ingrese su Usuario">
                </div>
                <div class="form-group mx-sm-4 pb-3">
                    <input type="password" class="form-control" name="password" placeholder="Ingrese su Contraseña">
                </div>
                <div class="form-group mx-sm-4 pb-2">
                    <input type="submit" class="btn btn-block ingresar" value="INGRESAR">
                </div>
                <div class="form-group mx-sm-4 text-right">
                    <span class=""><a href="#" class="olvide">Olvide mi contraseña?</a></span>
                </div>
                @if(isset($_GET["r"]))
                    <input type="hidden" name="url" value="{{$_GET["r"]}}">
                @endif
            </form>
            <div class="form-group text-center">
                <span><a href="" class="olvide1">Crear Cuenta</a></span>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
