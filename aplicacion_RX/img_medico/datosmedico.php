<?php
session_start();
include_once 'conexion.php';
if ($_GET){
$ver=$_GET['indmedico'];
$_SESSION['user']=$ver;
}

if ($_SESSION){
    $medico=$_SESSION['user'];
    if (mysqli_connect_errno()) {
        die("Error al conectar: " . mysqli_connect_error());
    }
    $result = $mysqli->query("SELECT * FROM `admistracion` WHERE (`admistracion`.`indmedico` ='$medico')");
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if (!empty($row)) {

    } else {
        echo '<script>alert("Contaseña o id No identificada"); </script>';
    }
}else{
   /* header("location:localhost/orthodental/index.php");*/
}
if ($_POST) {
    $id=$_SESSION['user'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $user= $_POST['user'];
    $pass= $_POST['pass'];
    $clinica= $_POST['clinica'];
    $telefono= $_POST['telefono'];
    $correo= $_POST['correo'];
    $fecha= $_POST['fecha'];

    if (!empty($nombre)) {
        $insert = "UPDATE `admistracion` SET `nombre` = '$nombre', `apellido` = '$apellido', `usuario` = '$user', `contrasena` = '$pass', `Telefono` = '$telefono', `Correo` = '$correo', `Departamento` = '', `sexo` = '' WHERE `admistracion`.`indmedico` = $id;";
        $query = mysqli_query($mysqli, $insert);

    }
}
?>
