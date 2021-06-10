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
    <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
    <script src="../js/java1.js" type="text/javascript"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/java2.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../js/java3.js"></script>
    <script src="../js/java5.js"></script>
    <![endif]-->

    <script type="text/javascript">
        $(document).ready(function () {

            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            }(jQuery));

        });
    </script>
</head>
<body>
<?php
include_once '../segurida/resultado_estudio.php';
?>
<nav>
    <div class="fixed navbar-fixed">
        <nav class="nav-color fixed">
            <div class="nav-wrapper tr">
                <a href="../../index.php" class="brand-logo white-text tr pp maximo">Sistema de Radiografia Digital</a>
                <a href="../../index.php" class="brand-logo white-text tr minimo">Sistema de Radiografia Digital</a>
                <ul class="right  maximo">
                    <li><a href="buscarpaciente.php?medico=<?php echo $medico; ?>" class="black-text">Regresar</a></li>
                </ul>
            </div>
        </nav>
    </div>
</nav>
<?php
session_start();
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}

$web = $_GET['ip'];
$suma=0;
?>
<?php
if ($web == '1') {
    ?>
    <h5 class="center">Radiografía Panoramica</h5>
    <?php

}
?>

<?php
if ($web == '2') {
    ?>
    <h5 class="center">Radiografía ATM</h5>
    <?php

}
?>

<?php
if ($web == '3') {
    ?>
    <h5 class="center">Radiografía Cefalometrica</h5>
    <?php

}
?>

<?php
if ($web == '4') {
    ?>
    <h5 class="center">Estudio</h5>
    <?php

}
?>

<?php
if ($web == '5') {
    ?>
    <h5 class="center">Radiografía Carpal</h5>
    <?php

}
?>
<br>
<div class="container">
    <div class="input-group black white-text"><span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control white-text" placeholder="Buscar Nombre de Paciente">
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Completo</th>
            <th>Edad</th>
            <th class="center">Mostar</th>
            <th>Fecha</th>
        </tr>
        </thead>
        <tbody class="buscar">
        <!-------Estudio de Radiografia en Panoramica --->
        <?php
        $result4 = $mysqli->query("SELECT * FROM `pedido` WHERE `indmedico` = '$medico' AND `tipo_estudio` = '$web' ORDER BY ind DESC");
        while ($pedido = $result4->fetch_assoc()) {
            ?>
            <?php if($pedido['tipo_estudio']=='1' or $pedido['tipo_estudio']=='2' or $pedido['tipo_estudio']=='3'){ ?>
                <tr>
                    <td><?php echo $pedido['ind']; ?></td>
                    <?php $suma=$suma+1; ?>
                    <td><?php echo $pedido['nombre_completo'] ?></td>
                    <td><?php echo $pedido['edad'] ?> años</td>
                    <td>
                        <div>
                            <a class="btn-block modal-trigger white-text btn" href="#modal<?php echo $pedido['ind'];?>">Ver Estudio</a>
                            <div id="modal<?php echo $pedido['ind'];?>" class="modal">
                                <div class="modal-content black-text left-align">
                                    <img src="<?php echo $pedido['archivo_url']?>" alt="" class="responsive-img materialboxed">
                                </div>
                                <div class="modal-footer">
                                    <a href="#!"
                                       class=" modal-action modal-close waves-effect waves-green btn-flat colod">Salir</a>
                                    <a href="<?php echo $pedido['archivo_url'] ?>" download="<?php echo $pedido['archivo_url'] ?>"
                                       class=" modal-action modal-close waves-effect waves-green btn-flat colod">Descargar
                                        Imagen</a>
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </td>
                    <td><?php echo $pedido['Fecha'] ?></td>
                </tr>
            <?php }?>

            <?php if($pedido['tipo_estudio']=='4'){ ?>
                <tr>
                    <td><?php echo $pedido['ind']; ?></td>
                    <?php $suma=$suma+1; ?>
                    <td><?php echo $pedido['nombre_completo'] ?></td>
                    <td><?php echo $pedido['edad'] ?> años</td>
                    <td><a href="<?php echo $pedido['archivo_url'] ?>" download="<?php echo $pedido['archivo_url'] ?>"
                           class="btn ">Descargar
                            Estudio</a> </td>
                    <td><?php echo $pedido['Fecha'] ?></td>
                </tr>
            <?php }?>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<footer class="page-footer white z-depth-3">
    <div class="container">
        <div class="row">
            <br>
            <h5 class="black-text">Plataforma Online</h5>
            <p class="black-text text-lighten-4">
                Solo Personal Autorizado!!!
                <br>
                En casos de emergencia llamar a oficinas de Sistema de Radiografia Digital
            </p>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container black-text">
            <script>
                var fecha = new Date();
                var ano = fecha.getFullYear();
            </script>
            ©
            <script>document.write(ano); </script>
            Copyrightv Sistema de Radiografia Digital
        </div>
    </div>
</footer>
<div class="minimo container">
    <h5>No Disponible para mobiles</h5>
    <p>Solo personal Autorizado en Sistema de Radiografia Digital</p>
</div>
</body>
<script src="../../Catalogo%20Marca/carusel/js/jquery-3.1.0.min.js"></script>
<script src="../../Catalogo%20Marca/carusel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/nuevo.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/personal.js"></script>
</html>