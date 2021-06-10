<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/093b747.png"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.. ::Sistema de Radiografia Digital:: .. </title>
    <link rel="stylesheet" href="Catalogo%20Marca/carusel/css/bootstrap.min.css">
    <link rel="stylesheet" href="Catalogo%20Marca/carusel/css/bootstrap-theme.min.css">
    <link href="framework/css.iconos.css" rel="stylesheet">
    <link rel="stylesheet" href="icomoon/style.css">
    <link type="text/css" rel="stylesheet" href="framework/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="css/adaptacion_paramobiles.css">
    <link rel="stylesheet" href="css/css.index.css">
    <link rel="stylesheet" href="css/medico.css">
    <script type="text/javascript" src="js/sweetalert.min.js"></script>
</head>
<body>
<nav>
    <div class="fixed navbar-fixed">
        <nav class="nav-color fixed">
            <div class="nav-wrapper tr">
                <a href="#" class="brand-logo white-text tr pp maximo">Sistema de Radiografia Digital</a>
                <a href="index.php" class="brand-logo white-text tr minimo">Sistema de Radiografia Digital</a>
                <ul class="right  maximo">
                    <li><a href="ingresar.php" class="black-text"><i class="icon-cancel-circle small"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</nav>
<br>
<div class="container center">
    <h5>Plataforma Online</h5>
    <hr class="container z-depth-3">
</div>
<br>
<br>
<div class="container center center-align">
    <form action="ingresar.php" method="post" class="container">
        <p>Usuario:</p>
        <input type="text" name="user" placeholder="Usuario" value="<?php if ($_POST) {
            echo $_POST['user'];
        } ?>" style="border-radius: 6px;border: 1px solid #2e6da4;padding-left: 1em;">
        <p>Contraseña:</p>
        <input type="password" name="pass" placeholder="Contraseña"
               style="border-radius: 6px;border: 1px solid #2e6da4;padding-left: 1em;">
        <input type="submit" class="btn orange" value="Ingresar">
    </form>
    <br>
    <hr class="container z-depth-3">
</div>
<br><br>
<?php
session_start();
if ($_POST) {
    include_once 'Medico/segurida/conexion.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];


    if (mysqli_connect_errno()) {
        die("Error al conectar: " . mysqli_connect_error());
    }

    $result = $mysqli->query("SELECT * FROM `sucursales` WHERE `user_sucursal` LIKE '$user' AND `pass_sucursal` LIKE '$pass'");
    $rows= $result->fetch_array(MYSQLI_ASSOC);
    $_SESSION['sucursal'] = $rows['indsucursal'];

    if (!empty($rows)) {
        if($rows['user_sucursal']==$user AND $rows['pass_sucursal']==$pass){
            echo "<script>location.href='publicar.php'</script>";
        }else{
            echo '<script>swal("Mensaje","Contaseña o Usuario No identificada","error"); </script>';
        }
    } else {
        echo '<script>swal("Mensaje","Contaseña o Usuario No identificada","error"); </script>';
    }


}
?>
</body>
<?php
include_once 'MVS/footer.php';
?>
<script src="Catalogo%20Marca/carusel/js/jquery-3.1.0.min.js"></script>
<script src="Catalogo%20Marca/carusel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/nuevo.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/personal.js"></script>
</html>