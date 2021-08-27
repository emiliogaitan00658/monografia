<?php
session_start();
$_SESSION['pedidopaciente'] = $_GET['paciente'];

$pedidomedico = $_SESSION['pedidomedico'];
$pedidopaciente = $_SESSION['pedidopaciente'];

/*  datos medico */
if (mysqli_connect_errno()) {
    die("Error al conectar: " . mysqli_connect_error());
}
$result = $mysqli->query("SELECT * FROM `medico` WHERE (`medico`.`indmedico` ='$pedidomedico');");
$row = $result->fetch_array(MYSQLI_ASSOC);

$res = $mysqli->query("SELECT * FROM `paciente` WHERE (`paciente`.`indpaciente` ='$pedidopaciente');");
$row2 = $res->fetch_array(MYSQLI_ASSOC);

if ($_POST) {
    $paciente = $_POST['paciente'];
    $medico = $_POST['medico'];

    if (!empty($_POST['edad'])) {
        $edad = $_POST['edad'];
    } else {
        echo '<script>alert("Ingresar Edad"); </script>';
    }

    if (!empty($_POST['estudio'])) {
        $estudio = $_POST['estudio'];
    } else {
        echo '<script>alert("Ingresar Tipo de Estudio"); </script>';
    }

    if (!empty($_POST['fecha'])) {
        $fecha = $_POST['fecha'];
    } else {
        echo '<script>alert("Ingresar Fecha"); </script>';
    }

    /*Datos de la imagenes */
    if ($estudio=='1'){
        $imagen ='../../Panoramica/'. $_FILES['subir']['name'];
        $carpeta = '../../Panoramica/';
    } else if ($estudio=='2'){
        $imagen ='../../ATM/'. $_FILES['subir']['name'];
        $carpeta = '../../ATM/';
    }else {
        $imagen ='../../Cefalometrica/'. $_FILES['subir']['name'];
        $carpeta = '../../Cefalometrica/';
    }
    opendir($carpeta);
    $pait = $carpeta . $_FILES['subir']['name'];
    copy($_FILES['subir']['tmp_name'], $pait);
    /*Datos de la imagenes */

    $insert = "INSERT INTO `pedido` (`indpedido`, `indpaciente`, `indmedico`, `fecha`, `tipo`, `edad`, `imagen`) VALUES (NULL, '$paciente', '$medico', '$fecha', '$estudio', '$edad', '$imagen');";
    $query = mysqli_query($mysqli, $insert);
}
?>