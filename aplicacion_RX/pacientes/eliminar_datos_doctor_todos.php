<?php
/**
 * Created by PhpStorm.
 * User: fuentes
 * Date: 09/10/2018
 * Time: 02:00 PM
 */
include_once '../segurida/conexion.php';
if (mysqli_connect_errno()) {
    die("Error al conectar: " . mysqli_connect_error());
}
if($_GET){

    $eliminar=$_GET['eliminar'];
    if($eliminar==''){
        echo '<script>alert("Error al Eliminar datos"); </script>';
        echo "<script>location.href='buscarpaciente.php?admistracion=".$eliminar."'</script>";
    }else{

        $ress = $mysqli->query("SELECT * FROM admistracion WHERE indmedico='$eliminar'");
        $med = $ress->fetch_array(MYSQLI_ASSOC);

        $result = $mysqli->query("DELETE FROM `admistracion` WHERE `admistracion`.`indmedico` = '$eliminar'");
        $query = mysqli_query($mysqli, $result);

        echo "<script>location.href='buscarmedico.php?ip=".$med['Departamento']."'</script>";
    }
}else{
    echo "<script>location.href='sucursales.php'</script>";
}