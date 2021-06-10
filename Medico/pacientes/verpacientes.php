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
</head>
<body>
<?php
include_once '../segurida/conexion.php';
include_once '../segurida/verpaciente.php';
session_start();
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}

?>
<div class="container">
    <section class="container ">
        <h2 class="header">Estudios</h2>
        <hr>
        <ul class="collapsible" data-collapsible="accordion">
            <?php
            while ($f = $result->fetch_assoc()) {
                ?>
                <li>
                    <div class="collapsible-header"><?php echo $f['nombre'].$f['apellido'] ?></div>
                    <div class="collapsible-body">
                        <img src="<?php echo $f['imagen'] ?>" alt="">
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
    </section>

</div>
<footer class="page-footer white z-depth-3">
    <div class="container">
        <div class="row">
            <h5 class="black-text">Plataforma online EcoRadiología</h5>
            <p class="black-text text-lighten-4">
                ¡Llevando la radiología dental literalmente hacia las nubes!
                Además, te damos la opción de marcar en nuestra orden radiográfica el "NO recibir el estudio
                impreso"...este llegaría 100% virtual con nuestra plataforma. Así ayudarías al planeta a reducir la
                utilización de insumos altamente contaminante (placas, líquidos, etc.) y reducir papelería excesiva que
                fomenta a la tala indiscriminada de árboles.
            </p>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container black-text">
            © 2021 Copyrightv Sistema de Radiografia Digital
            <a class="black-text text-lighten-4 right" href="#!"> Derechos de autor 2017</a>
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