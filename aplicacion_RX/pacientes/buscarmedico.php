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
    <script src="../../css/buscador_applicacion/js/jquery.js"></script>
    <script src="../../css/buscador_applicacion/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../../css/buscador_applicacion/css/estilos.css">
    <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
</head>
<?php
include_once '../segurida/registromedico.php';
include_once '../../BD-Connection/conection.php';
include_once '../../BD-Connection/datos_clientes.php';
?>
<script>
    function rx1() {
        var div1 = document.getElementById('quitar1');
        var div2 = document.getElementById('quitar2');
        div1.style.display = 'block';
        div2.style.display = 'none';
    }

    function rx2() {
        var div1 = document.getElementById('quitar1');
        var div2 = document.getElementById('quitar2');
        div1.style.display = 'none';
        div2.style.display = 'block';
    }

</script>
<body>
<div class="maximo">
    <nav>
        <div class="fixed navbar-fixed">
            <nav class="nav-color fixed">
                <div class="nav-wrapper tr">
                    <a href="../../publicar.php" class="brand-logo white-text tr pp maximo"> <img
                                src="../../img/logo.png"
                                alt="" class="responsive-img"
                                width="20%">EcoRadiología</a>
                    <a href="../../publicar.php" class="brand-logo white-text tr minimo">EcoRadiología</a>
                    <ul class="right  maximo">
                        <li><a href="#" class="black-text" onclick="rx1()"><i class="icon-search"></i></a></li>
                        <li><a class="waves-effect waves-light  black-text" href="#" onclick="rx2()"><i class="icon-user-plus "> </i></a>
                        <li><a href="../../publicar.php" class="black-text"><i class="icon-arrow-left2 "></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <br>
    <div id="quitar2" style="display:none;" class="container">
        <div class="modal-content black-text left-align">
            <section class="container black center">
                <h5 class="white-text g">Datos Personales Doctor:</h5>
            </section>
            <hr>
            <form action="buscarmedico.php?ip=<?php if ($_GET) {
                echo $departamento = $_GET['ip'];
            } ?>" method="post" class="container">
                <span style="width: 35px!important;padding: 1em; border-bottom: 1px solid black;" class="center-align">Codigo Minsa:</span>
                <input type="text" name="id" placeholder="Usuario" value="admin" style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                <input type="hidden" name="depar" value="<?php if ($_GET) {
                    echo $departamento = $_GET['ip'];
                } ?>" required>
                <br>
                <span style="width: 25px!important;padding: 1em; border: 1px solid black;" class="center-align">Contraseña:</span>
                <input type="text" name="pass" placeholder="Contraseña" value="<?php echo datos_clientes::generador_codigo($mysqli); ?>" class="inputvalor" style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                <br>
                <span style="width: 35px!important;padding: 1em; border: 1px solid black;" class="center-align">Correo:</span>
                <input type="email" name="correo" placeholder="Correo" value="<?php if ($_POST) {
                    echo $_POST['correo'];
                } ?>" required class="inputvalor" style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                <br>
                <span style="width: 35px!important;padding: 1em; border: 1px solid black;" class="center-align">Nombres:</span>
                <input type="text" name="nombre" placeholder="Nombres" value="<?php if ($_POST) {
                    echo $_POST['nombre'];
                } ?>" required class="inputvalor"  style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                <br>
                <span style="width: 30px!important;padding: 1em; border: 1px solid black;" class="center-align">Apellidos:</span>
                <input type="text" name="apellido" placeholder="Apellidos" value="<?php if ($_POST) {
                    echo $_POST['apellido'];
                } ?>" required class="inputvalor" style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                <hr>
                <section class="center">
                    <input type="submit" class="btn" value="Guardar">
                </section>
            </form>
            <br>
            <br>
        </div>
    </div>


    <div id="quitar1">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h5 class="container"><i class="icon-search "> </i>Buscar Doctor:</h5>
        <header class="container">
            <div class="container center">
                <div>
                    <input type="search" placeholder="Buscar . . ." id="inputBusqueda" class="black-text input">
                </div>
            </div>
            <div class="search" id="search">
                <table class="search-table" id="searchTable">
                    <thead>
                    <tr>
                        <td class="center">Nombre y Apellido</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $dep = $_GET['ip'];

                    $_SESSION['ip'] = $dep;

                    $result4 = $mysqli->query("SELECT * FROM `medico` WHERE `Departamento` LIKE '$dep'");
                    while ($fecha = $result4->fetch_assoc()) {
                        $r = $fecha['indmedico'];
                        $r1 = $fecha['nombre'];
                        $r2 = $fecha['apellido'];
                        ?>
                        <tr>
                            <td><a href="buscarpaciente.php?medico=<?php echo $r ?>"><?php echo $r2 . ',' . $r1 ?></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <script src="../../css/buscador_applicacion/js/buscador.js"></script>
    <footer class="page-footer  z-depth-3" style="background-color: #2B394D">
        <div class="container" style="background-color: #2B394D">
            <div class="row" style="background-color: #2B394D">
                <div class="col l6 s12">
                    <h5 class="white-text"><img src="img/logo.png" alt="" class="responsive-img" style="width: 15%">EcoRadiología</h5>
                    <p class="white-text text-lighten-4">
                        Ecoradiología Nuestra plataforma EcoRadiolgía permite al dentista socio y paciente acceder a las
                        imágenes y diagnósticos: En tiempo real (conforme se va elaborando el estudio) De por vida, los 365
                        días del año Desde cualquier dispositivo (móvil, tablet, computadora, laptop).</p>
                </div>
            </div>
        </div>
    </footer>
<script src="../../css/carusel/js/jquery-3.1.0.min.js"></script>
<script src="../../css/carusel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/nuevo.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/personal.js"></script>
</html>