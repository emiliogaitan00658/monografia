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
include_once '../segurida/registromedico.php';
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}
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
                    <a href="../../publicar.php" class="brand-logo white-text tr pp maximo">Sistema de Radiografia Digital</a>
                    <a href="../../index.php" class="brand-logo white-text tr minimo">Sistema de Radiografia Digital</a>
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
                <span style="width: 35px!important;padding: 1em; border-bottom: 1px solid black;" class="center-align">Usuario:</span>
                <input type="text" name="id" placeholder="Usuario" value="admin" style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                <input type="hidden" name="depar" value="<?php if ($_GET) {
                    echo $departamento = $_GET['ip'];
                } ?>" required>
                <br>
                <span style="width: 25px!important;padding: 1em; border: 1px solid black;" class="center-align">Contraseña:</span>
                <input type="text" name="pass" placeholder="Contraseña" value="<?php echo rand(560000, 22000); ?>" class="inputvalor" style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
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
                ©
                <script>document.write(ano); </script>
                Copyrightv Sistema de Radiografia Digital
                <a class="black-text text-lighten-4 right" href="#!"> Derechos de autor <?php echo date("Y"); ?></a>
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