<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../img/093b747.png"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ortho Dental S.A </title>
    <link rel="stylesheet" href="../../Catalogo%20Marca/carusel/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Catalogo%20Marca/carusel/css/bootstrap-theme.min.css">
    <link href="../../framework/css.iconos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../icomoon/style.css">
    <link type="text/css" rel="stylesheet" href="../../framework/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="../../css/adaptacion_paramobiles.css">
    <link rel="stylesheet" href="../../css/css.index.css">
    <link rel="stylesheet" href="../../css/medico.css">
    <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
</head>
<body>
<?php
session_start();
include_once '../segurida/datosmedico.php';
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}
?>
<nav>
    <div class="fixed navbar-fixed">
        <nav class="nav-color fixed">
            <div class="nav-wrapper tr">
                <a href="../../index.php" class="brand-logo white-text tr pp maximo"> <img src="../../img/093b747.png"
                                                                                           alt="" class="responsive-img"
                                                                                           width="20%">Ortho Dental</a>
                <a href="../../index.php" class="brand-logo white-text tr minimo">Ortho Dental</a>
                <ul class="right  maximo">
                    <li><a href="clinica.php" class="black-text">Inicio</a></li>
                    <li><a class="waves-effect waves-light modal-trigger black-text" href="#modal5">Perfil Medico</a>
                    </li>
                    <li><a href="../../index.php" class="black-text">Salir</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="collapsible minimo" data-collapsible="accordion">
        <li class="sa container center">
            <div class="collapsible-header black-text sa">Menu</div>
            <div class="collapsible-body ">
                <ul class="right black">
                    <li><a href="../../index.php" class="white-text">Inicio</a></li>
                    <li><a class="waves-effect waves-light modal-trigger white-text" href="#modal5">Perfil Medico</a>
                    <li><a href="../../index.php" class="white-text">Salir</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<br>

<footer class="page-footer white z-depth-3">
    <div class="container">
        <div class="row">
            <br>
            <h5 class="black-text">Plataforma Online</h5>
            <p class="black-text text-lighten-4">
                Solo Personal Autorizado!!!
                <br>
                En casos de emergencia llamar a oficinas de orthodental.
            </p>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container black-text">
            <script>
                var fecha = new Date();
                var ano = fecha.getFullYear();
            </script>
            ©<script>document.write(ano); </script> Copyrightv Ortho Dental
            <a class="black-text text-lighten-4 right" href="https://www.facebook.com/emilioantoniogaitanfuentes">Diseño: Emilio Gaitan</a>
        </div>
    </div>
</footer>
</body>
<script src="../../Catalogo%20Marca/carusel/js/jquery-3.1.0.min.js"></script>
<script src="../../Catalogo%20Marca/carusel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/nuevo.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/personal.js"></script>
</html>