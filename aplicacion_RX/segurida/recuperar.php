<?php
/**
 * Created by PhpStorm.
 * User: Emilio Gaitan
 * Date: 09/05/2018
 * Time: 20:37
 */

include_once 'conexion.php';
$correos=$_POST["recuper"];

if($correos==""){
    echo "<script>location.href='../../index.php'</script>";
}

$result = $mysqli->query("SELECT * FROM medico WHERE Correo='$correos'");
$row = $result->fetch_array(MYSQLI_ASSOC);
if (!empty($row)) {

} else {
    echo "<script>location.href='../../index.php'</script>";
}
    date_default_timezone_set('America/Managua');
    $fecha = $hoy = date("Y-n-j");
    $hora = $hoy = date("h:i:s");

    $telefono = " Tel: 2220-6871---2277-0288";
    $correoreceptor = $row['Correo'];
    $asunto = "Recuperar Contraseña. Cambiar Usuario al ingresar";

    $mensaje = "Notificacion de EcoRadiología: \r\n";
    $mensaje .= "Hola DR.: " . $row['nombre'] . $row['apellido'] . "\r\n";

    $mensaje .= "En este correo encontrará su usuario y contraseña con el cual podrá acceder " . "\r\n";
    $mensaje .= "a nuestra plataforma para poder ver las radiografías de sus pacientes en" . "\r\n";
    $mensaje .= "línea, a través de la cual podrá ingr                                                                                                                                                                                                                                                                                                                                esar en su móvil, tablet o computador." . "\r\n";
    $mensaje .= "Estará a su disposición en cualquier momento , las 24 horas del día, los 365 días del año." . "\r\n";
    $mensaje .= "¡Gracias por ser parte de EcoRadiología!" . "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "Usuario: " . $row['usuario'] . "\r\n";
    $mensaje .= "Contraseña: " . $row['contrasena'] . "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "http://www.EcoRadiología.com/index.php" . "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "\r\n";
    $mensaje .= "Recuerda de Cambiar las Contraseña y usuario(En la opcion perfil)" . "\r\n";
    $mensaje .= "Telefono de Oficina: " . $telefono . "\r\n";
    $mensaje .= "Fecha: " . $fecha . "\r\n";
    $mensaje .= "Hora: " . $hora . "\r\n";
    $mensaje .= "Problemas al ingresar reportar: soporteEcoRadiología@gmail.com"."\r\n";


    $cabeceras = 'From: EcoRadiología@hotmail.com' . "\r\n" .
        'Reply-To: EcoRadiología@hotmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($correoreceptor, $asunto, $mensaje, $cabeceras);


/*Verifica que si se guardo y se envio el correo*/
echo '<script>alert("Se a enviado un correo Revisar porfavor!"); </script>';
echo "<script>location.href='../../index.php'</script>";
?>