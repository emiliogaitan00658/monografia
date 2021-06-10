<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../img/093b747.png"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.. ::Sistema de Radiografia Digital:: .. </title>
    <link rel="stylesheet" href="../../Catalogo%20Marca/carusel/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Catalogo%20Marca/carusel/css/bootstrap-theme.min.css">
    <link href="../../framework/css.iconos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../icomoon/style.css">
    <link type="text/css" rel="stylesheet" href="../../framework/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="../../css/adaptacion_paramobiles.css">
    <link rel="stylesheet" href="../../css/css.index.css">
    <link rel="stylesheet" href="../../css/medico.css">
    <script src="../../g/js/jquery.js"></script>
    <script src="../../g/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../../g/css/estilos.css">
    <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
</head>
<?php
session_start();
include_once '../segurida/conexion.php';
include_once '../segurida/pedido.php';
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}
?>
<body>
<div class="maximo">
    <nav>
        <div class="fixed navbar-fixed">
            <nav class="nav-color fixed">
                <div class="nav-wrapper tr">
                    <a href="../../index.php" class="brand-logo white-text tr pp maximo"> Sistema de Radiografia Digital</a>
                    <a href="../../index.php" class="brand-logo white-text tr minimo">Sistema de Radiografia Digital</a>
                    <ul class="right  maximo">
                        <li><a href="../../Medico/pacientes/buscarmedico.php" class="black-text">Cancelar Pedido</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <section class="container">
        <form action="pedidofinal.php?paciente=<?php echo $pedidopaciente; ?>" method="post"
              enctype="multipart/form-data">
            <h5>Datos medico</h5>
            <hr class="z-depth-3">
            <div class="row pedido">
                <p>Nombre:<?php echo $row['nombre']; ?></p>
                <input type="hidden" value="<?php echo $row['indmedico']; ?>" name="medico">
            </div>
            <div class="row pedido">
                <p>Apellido:<?php echo $row['apellido']; ?></p>
            </div>
            <div class="row pedido">
                <p>Correo:<?php echo $row['Correo']; ?></p>
            </div>
            <h5>Datos paciente:</h5>
            <hr class="z-depth-3">
            <div class="row pedido">
                <p>Nombre:<?php echo $row2['nombre']; ?></p>
                <input type="hidden" value="<?php echo $row2['indpaciente']; ?>" name="paciente">
            </div>
            <div class="row pedido">
                <p>Apellido:<?php echo $row2['apellido']; ?></p>
            </div>
            <div class="row pedido">
                <input type="text" placeholder="Edad" name="edad" required>
            </div>
            <h5>Tipo de Estudio</h5>
            <hr class="z-depth-3">
            <div class="row fo">
                <select class="browser-default blue-grey white-text container" name="estudio">
                    <option value="" disabled="" selected="">Opcion Estudio</option>
                    <option value="1" class="estudio">Radiografía Panoramica</option>
                    <option value="2" class="estudio">Radiografía ATM</option>
                    <option value="3" class="estudio">Radiografía Cefalometrica</option>
                </select>
            </div>
            <div class="row pedido">
                <p class="red-text">Nu.Pedido:<?php echo $sec = rand(100, 22000); ?></p>
                <input type="hidden" name="pedido" value="<?php echo $sec; ?>">
            </div>
            <div class="row pedido">
                <p>Fecha:<?php echo $hoy = date("j-n-Y"); ?></p>
                <input type="hidden" name="fecha" value="<?php echo date("j-n-Y") ?>">
            </div>
            <h5>Subir Imagen</h5>
            <hr class="z-depth-3">
            <div class="row pedido">
                <input type="file" value="Subir Archivo" name="subir">
            </div>
            <p>Solo Personal Autorizado!!</p>
            <hr>
            <div class="row center">
                <input type="submit" value="Guardar" class="btn">
            </div>
            <hr>
        </form>
    </section>
    <script src="../../g/js/buscador.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96584217-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-96584217-1');
    </script>
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
                ©<script>document.write(ano); </script> Copyrightv Sistema de Radiografia Digital
            </div>
        </div>
    </footer>
</div>
<div class="minimo container">
    <h5>No Disponible para mobiles</h5>
    <p>Solo personal Autorizado en Sistema de Radiografia Digital</p>
</div>
<script src="../../Catalogo%20Marca/carusel/js/jquery-3.1.0.min.js"></script>
<script src="../../Catalogo%20Marca/carusel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/nuevo.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/personal.js"></script>
</html>