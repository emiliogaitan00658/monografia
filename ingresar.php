<?php
include_once "model/header.php";
?>
<nav>
    <div class="fixed navbar-fixed">
        <nav class="nav-color fixed">
            <div class="nav-wrapper tr">
                <a href="" class="brand-logo white-text tr pp maximo"> <img
                            src="img/logo.png"
                            alt="" class="responsive-img"
                            width="20%">EcoRadiología</a>
                <a href="index.php" class="brand-logo white-text tr minimo">EcoRadiología</a>
                <ul class="right  maximo">
                    <li><a href="ingresar.php" class="black-text"><i class="icon-cancel-circle small"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</nav>
<br>
<div class="container center">
    <h5 class="linea">Plataforma Online</h5>
    <hr class="container z-depth-3">
</div>
<br>
<br>
<div class="container center white center-align z-depth-1  white" style="border-radius: 6px;">
    <form action="ingresar.php" method="post" class="container white" style="margin-top: 2em;">
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
    include_once 'aplicacion_RX/segurida/conexion.php';

    $user = filter_var( $_POST['user'], FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];


    if (mysqli_connect_errno()) {
        die("Error al conectar: " . mysqli_connect_error());
    }

    $result = $mysqli->query("SELECT * FROM `sucursales` WHERE `user_sucursal` LIKE '$user' AND `pass_sucursal` LIKE '$pass'");
    $rows = $result->fetch_array(MYSQLI_ASSOC);
    $_SESSION['sucursal'] = $rows['indsucursal'];

    if (!empty($rows)) {
        if ($rows['user_sucursal'] == $user and $rows['pass_sucursal'] == $pass) {
            echo "<script>location.href='publicar.php'</script>";
        } else {
            echo '<script>swal("Mensaje","Contaseña o Usuario No identificada","error"); </script>';
        }
    } else {
        echo '<script>swal("Mensaje","Contaseña o Usuario No identificada","error"); </script>';
    }


}
?>
</body>
<?php
include_once 'model/footer.php';
?>
<script src="css/buscador_applicacion/js/jquery-3.1.0.min.js"></script>
<script src="css/buscador_applicacion/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/nuevo.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/personal.js"></script>
</html>