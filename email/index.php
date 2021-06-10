<?php
include_once '../Medico/segurida/conexion.php';

$result4 = $mysqli->query("SELECT * FROM `medico`");
while ($fecha = $result4->fetch_assoc()) {
/*Enviar el correo al doctor por correo y todo los registro*/
date_default_timezone_set('America/Managua');
$fecha = $hoy = date("Y-n-j");
$hora = $hoy = date("h:i:s");
$nombre=$fecha['nombre'];
$apellido=$fecha['apellido'];
$usuario=$fecha['usuario'];
$pass=$fecha['contrasena'];

$telefono = " Tel: 2220-6871---2277-0288";
$correoreceptor = $fecha['Correo'];
$asunto = "Plataforma Online Ortho Dental";

$mensaje = "Notificación de Ortho Dental: \r\n";
$mensaje .= "Hola DR.: " . $nombre .$apellido. "\r\n";
$mensaje .= "Esto es el usuario y contaseña para acceder a la plataforma online" . "\r\n";
$mensaje .= "para ver las rafiografía en linea de sus paciente podra acceder desde" . "\r\n";
$mensaje .= "su mobil o tableta o lapto desde la comodidad de su clinica en cualquier" . "\r\n";
$mensaje .= "momento las 24 hora del dia los 365 dias del año disponible." . "\r\n";
$mensaje .= "Para un mejor servicio a los doctores muchas gracias por se parte de Ortho Dental." . "\r\n";
$mensaje .= "\r\n";
$mensaje .= "\r\n";
$mensaje .= "Usuario: ".$usuario."\r\n";
$mensaje .= "Contraseña: ".$pass."\r\n";
$mensaje .= "\r\n";
$mensaje .= "\r\n";
$mensaje .= "Ingresas ya:"."http://www.orthodentalnic.com/index.php" . "\r\n";
$mensaje .= "\r\n";
$mensaje .= "Recuerda de cambiar tu contraseña y usuario cuando ingreses por primera vez.". "\r\n";
$mensaje .= "Telefono de Oficina: " . $telefono . "\r\n";
$mensaje .= "Fecha: " . $fecha . "\r\n";
$mensaje .= "Hora: " . $hora . "\r\n";


$cabeceras = 'From: ortho_dental@hotmail.com' . "\r\n" .
    'Reply-To: ortho_dental@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($correoreceptor, $asunto, $mensaje,$cabeceras);
}
?>