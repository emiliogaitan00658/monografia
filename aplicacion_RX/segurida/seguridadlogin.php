﻿<?php
include_once 'BD-Connection/conection.php';
include_once 'BD-Connection/datos_clientes.php';
session_start();
if ($_POST) {
    $usuario = "";
    $pass = "";
    if (!empty($_POST['usuario'])) {
        $usuario=$correo=filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);;
    } else {
        echo '<script>swal("Ingresar Usuario"); </script>';
    }
    if (!empty($_POST['pass'])) {
        $pass1 = $_POST['pass'];
        $pass=Password::hash($pass1);
    } else {
        echo '<script>swal("Ingresar contraseña"); </script>';
    }
    if (!empty($_POST['usuario']) and !empty($_POST['pass'])) {
        if (mysqli_connect_errno()) {
            die("Error al conectar: " . mysqli_connect_error());
        }
        $result = $mysqli->query("SELECT medico.indmedico,medico.usuario FROM medico WHERE ((medico.usuario ='$usuario') AND (medico.contrasena ='$pass'))");
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if (!empty($row)) {
            $valor = $row['indmedico'];
            $ver = $row['usuario'];
            if($ver==$usuario){

            }else{
                echo '<script>swal("Mensaje","Error Sistema","error")</script>';
                echo '<script>location.href = "../../index.php";</script>';
            }
            ?>
            <script>location.href = "aplicacion_RX/pacientes/clinica.php?indmedico=<?php echo $valor?>";</script>
            <?php
        } else {
            echo '<script>swal("Mensaje","Contaseña o Usuario no valido","error")</script>';
        }
    }
}
?>