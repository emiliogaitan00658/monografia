<?php
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

    $result = $mysqli->query("SELECT * FROM `medico` WHERE (`medico`.`indmedico` ='$medico')");
    $row = $result->fetch_array(MYSQLI_ASSOC);

    $resul = $mysqli->query("SELECT count(ind) as contSuma FROM pedido WHERE indmedico='$medico' ORDER BY ind DESC");
    $ContSuma = $resul->fetch_array(MYSQLI_ASSOC);
    if (!empty($row)) {

    } else {
        echo '<script>swal("Contaseña o id No identificada"); </script>';
    }

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

    //notfifcar el actualizacion de los datos

    date_default_timezone_set('America/Managua');
    $fechaa = $hoy = date("Y-n-j");
    $hora = $hoy = date("h:i:s");

    $telefono = " Tel: 2220-6871---2277-0288";
    $correoreceptor = $medico['Correo'];
    $asunto = "Plataforma Online Sistema de Radiografia Digital";

    $mensaje = "Notificacion de Sistema de Radiografia Digital: \r\n";
    $mensaje .= "Hola DR.: " . $medico['nombre'] . $medico['apellido'] . "\r\n";
    $mensaje .= "Sus datos de perfil sean actualizados correctamente." . "\r\n";
    $mensaje .= "!Gracias por se parte de Sistema de Radiografia Digital!" . "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "http://www.sistemaradiografiadigital.com/index.php" . "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "Telefono de Oficina:" . $telefono . "\r\n";
    $mensaje .= "Fecha:" . $fechaa . "\r\n";
    $mensaje .= "Hora:" . $hora . "\r\n";

    $cabeceras = 'From: sistemaradiografiadigital@hotmail.com' . "\r\n" .
        'Reply-To: sistemaradiografiadigitall@hotmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($correoreceptor, $asunto, $mensaje, $cabeceras);


    if (!empty($nombre)) {
        $insert = "UPDATE `medico` SET `nombre` = '$nombre', `apellido` = '$apellido', `usuario` = '$user', `contrasena` = '$pass', `clinica` = '$clinica', `FechaNac` = '$fecha' WHERE `medico`.`indmedico` = $id; ";
        $query = mysqli_query($mysqli, $insert);
        echo "<script>location.href='../pacientes/clinica.php?indmedico=".$row['indmedico']."'</script>";
        echo '<script>swal("Exito Datos Guardados"); </script>';
    }
}
?>
