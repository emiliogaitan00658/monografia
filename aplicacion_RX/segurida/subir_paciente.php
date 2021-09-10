<?php
/**
 * Created by PhpStorm.
 * User: Emilio Gaitan
 * Date: 18/01/2018
 * Time: 16:36
 */

include_once '../../BD-Connection/conection.php';

$result = $mysqli->query("SELECT `medico`.*, `medico`.`indmedico` FROM `medico` WHERE (`medico`.`indmedico` ='$id')");
$medico = $result->fetch_array(MYSQLI_ASSOC);

if ($_POST) {
    $unir = '../subir/' . $id . '/';
    $id = $_GET['medico'];
    $nombre_imagen = $unir . $_FILES['subir']['name'];
    echo $tamaño = $_FILES['subir']['size'];
    $nombre_paciente = $_POST['nombre_completo'];
    $edad = $_POST['edad'];
    $fecha = $hoy = date("j/n/Y");
    $estudio = $_POST['estudio'];
    $carpeta_medico = '../subir/' . $id . '/';


    $insert = "INSERT INTO `pedido` (`ind`, `indmedico`, `nombre_completo`, `edad`, `Fecha`, `tipo_estudio`, `archivo_url`) VALUES (NULL, '$id', '$nombre_paciente', '$edad', '$fecha', '$estudio', '$nombre_imagen');";
    $query = mysqli_query($mysqli, $insert);

    $carpeta = $unir;
    opendir($carpeta);
    $pait = $carpeta . $_FILES['subir']['name'];
    copy($_FILES['subir']['tmp_name'], $pait);


    date_default_timezone_set('America/Managua');
    $fecha = $hoy = date("Y-n-j");
    $hora = $hoy = date("h:i:s");

    $telefono = " Tel: 2220-6871---2277-0288";
    $correoreceptor = $medico['Correo'];
    $asunto = "Plataforma Online EcoRadiología";

    $mensaje = "Notificacion de Sistema de EcoRadiología: \r\n";
    $mensaje .= "Hola Dr. " . $medico['nombre'] . $medico['apellido'] . "\r\n";
    $mensaje .= "Estimado usuario la radiografía de su paciente: " . $nombre_paciente . "\r\n";
    $mensaje .= "Ya esta ingresado en la plataforma online ya puede ver la imagen." . "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "¡Gracias por se parte de Sistema de EcoRadiología!" . "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "http://www.EcoRadiología.com/index.php" . "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "Telefono de Oficina:" . $telefono . "\r\n";
    $mensaje .= "Fecha:" . $fecha . "\r\n";
    $mensaje .= "Hora:" . $hora . "\r\n";

    $cabeceras = 'From: EcoRadiología@hotmail.com' . "\r\n" .
        'Reply-To: EcoRadiología@hotmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($correoreceptor, $asunto, $mensaje, $cabeceras);

    echo '<script> swal("Datos Publicados Correctamente")</script>';

}
?>