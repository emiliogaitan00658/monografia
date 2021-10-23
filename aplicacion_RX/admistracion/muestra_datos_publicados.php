<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../img/logo.png"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.. ::EcoRadiología:: .. </title>
    <link rel="stylesheet" href="../../css/carusel/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/carusel/css/bootstrap-theme.min.css">
    <link href="../../css/framework/css.iconos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../icomoon/style.css">
    <link type="text/css" rel="stylesheet" href="../../css/framework/materialize.min.css" media="screen,projection"/>
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
session_start();
include_once '../../BD-Connection/conection.php';
include_once '../../BD-Connection/datos_clientes.php';
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}
?>
<nav>
    <div class="fixed navbar-fixed">
        <nav class="nav-color fixed">
            <div class="nav-wrapper tr">
                <a href="#" class="brand-logo white-text tr pp maximo"> <img
                        src="../../img/logo.png"
                        alt="" class="responsive-img"
                        width="20%">EcoRadiología</a>
                <a href="../../index.php" class="brand-logo white-text tr minimo">EcoRadiología</a>
                <ul class="right  maximo">
                    <li><a href="../../publicar.php" class="black-text"><i class="icon-arrow-left2 "></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="collapsible minimo sao" data-collapsible="accordion">
        <li class="container center sao">
            <div class="collapsible-header white-text sa">Menu</div>
            <div class="collapsible-body ">
                <ul class="left sa">
                    <li><a href="clinica.php" class="white-text">Regresar</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<br>
<div class="container modal-content">
    <?php
    $web = 1;
    $suma=0;
    ?>
    <br>
    <div class="z-depth-1">
        <div style="padding: 1em" class="input-group white-text"><span class="input-group-addon">
                <i class="icon-search "> </i>Buscar</span>
            <input id="filtrar" type="text" class="form-control white-text black" style="border-radius: 1em" placeholder="     Buscar Apellido Paciente">
        </div>
    </div>
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Completo</th>
            <th>Doctor Completo</th>
            <th>Edad</th>
            <th class="center">Mostar</th>
            <th>Fecha</th>
            <th>Descargar</th>
        </tr>
        </thead>
        <tbody class="buscar table table-striped">
        <?php
        $result4 = $mysqli->query("SELECT * FROM pedido ORDER BY ind DESC ");
        while ($pedido = $result4->fetch_assoc()) {
            $indmedico2=$pedido['indmedico'];

            $result = $mysqli->query("SELECT * FROM `medico` WHERE indmedico='$indmedico2'");
            $me = $result->fetch_array(MYSQLI_ASSOC);
//            $medico2=datos_clientes::datos_medico_generales2($indmedico2,$mysqli);
            ?>

            <?php if($pedido['tipo_estudio']=='1' or $pedido['tipo_estudio']=='2' or $pedido['tipo_estudio']=='3' or  $pedido['tipo_estudio']=='5'){ ?>

                <tr>
                    <td><?php echo $pedido['ind']; ?></td>
                    <?php $suma=$suma+1; ?>
                    <td><?php echo $me['nombre']." ".$me['apellido']; ?></td>
                    <td><?php echo $pedido['nombre_completo'] ?></td>
                    <td><?php echo $pedido['edad'] ?> años</td>
                    <td>
                        <div>
                            <a class="modal-trigger btn"  style="background-color: #1d2124;" href="#modal<?php echo $pedido['ind'];?>">Ver Estudio</a>
                            <div id="modal<?php echo $pedido['ind'];?>" class="modal">
                                <div class="modal-content black-text left-align">
                                    <img src="<?php echo $pedido['archivo_url']?>" alt="" class="responsive-img materialboxed">
                                    <br>
                                    <a href="<?php echo $pedido['archivo_url'] ?>" download="<?php echo $pedido['archivo_url'] ?>"
                                       class="btn"  style="background-color: #0c5460;">Descargar</a>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!"
                                       class=" modal-action modal-close waves-effect waves-green btn-flat colod">Salir</a>
                                </div>

                            </div>
                            <br><br>
                        </div>
                    </td>
                    <td><?php echo $pedido['Fecha'] ?></td>
                    <td> <a href="<?php echo $pedido['archivo_url'] ?>" download="<?php echo $pedido['archivo_url'] ?>"
                            class="btn"  style="background-color: #0c5460;">Descargar</a></td>
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
<footer class="page-footer  z-depth-3" style="background-color: #2B394D">
    <div class="container" style="background-color: #2B394D">
        <div class="row" style="background-color: #2B394D">
            <div class="col l6 s12">
                <h5 class="white-text"><img src="../../img/logo.png" alt="" class="responsive-img" style="width: 15%">EcoRadiología
                </h5>
                <p class="white-text text-lighten-4">
                    Ecoradiología Nuestra plataforma EcoRadiolgía permite al dentista socio y paciente acceder a las
                    imágenes y diagnósticos: En tiempo real (conforme se va elaborando el estudio) De por vida, los
                    365
                    días del año Desde cualquier dispositivo (móvil, tablet, computadora, laptop).</p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="../../css/carusel/js/jquery-3.1.0.min.js"></script>
<script src="../../css/carusel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/nuevo.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/personal.js"></script>
</html>