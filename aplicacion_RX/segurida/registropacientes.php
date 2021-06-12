<?php
$fecha=$hoy = date("j-n-Y");
if ($_POST) {
    $nombre="";
    $apellido="";
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    } else {
        echo '<script>alert("Ingresar Nombre"); </script>';
    }

    if (!empty($_POST['apellido'])) {
        $apellido = $_POST['apellido'];
    } else {
        echo '<script>alert("Ingresar Apellido"); </script>';
    }
    if (!empty($nombre) and !empty($apellido)){
        $insert = "INSERT INTO `paciente` (`indpaciente`, `nombre`, `apellido`) VALUES (NULL, '$nombre', '$apellido');";
        $query = mysqli_query($mysqli, $insert);
        echo '<script>alert("Guardado con Exito"); </script>';
    }else{
        echo '<script>alert("Ocurrio un Error interno"); </script>';
    }
}
?>