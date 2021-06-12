<?php
include_once 'conexion.php';
if ($_POST) {
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if (!empty($_POST['user']) and !empty($_POST['pass'])) {
        if (mysqli_connect_errno()) {
            die("Error al conectar: " . mysqli_connect_error());
        }
        $result = $mysqli->query("SELECT * FROM `usuario` WHERE ((`usuario`.`usuario` ='$user') AND (`usuario`.`contrasena` ='$pass')) ");
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (!empty($row)) {
            session_start();
            $_SESSION['user'] = $pass;
            echo "<script>location.href='../../publicar.php'</script>";
        } else {
            echo '<script>alert("Contaseña o id No identificada"); </script>';
        }
    } else {
        ?>
        <div class="container red white-text espacios">
            <p>Esta No es La Contraseña O Usurio Vuelva a intentar</p>
        </div>
        <?php
    }
}

?>