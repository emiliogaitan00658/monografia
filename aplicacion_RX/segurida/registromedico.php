<?php
include_once 'conexion.php';
if ($_GET) {
    $departamento = $_GET['ip'];
    $_SESSION['ip'] = $departamento;
}
$departamento = $_SESSION['ip'];
if ($_POST) {
    $nombre = "";
    $pass = "";
    $usuario = "";
    $correo = "";
    $apellido = "";
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    } else {
        echo '<script>swal("Ingresar Nombre"); </script>';
    }

    if (!empty($_POST['apellido'])) {
        $apellido = $_POST['apellido'];
    } else {
        echo '<script>swal("Ingresar Apellido"); </script>';
    }
    if (!empty($_POST['id'])) {
        $usuario = $_POST['id'];
    } else {
        echo '<script>swal("Ingresar Usuario"); </script>';
    }
    if (!empty($_POST['pass'])) {
        $pass = $_POST['pass'];
    } else {
        echo '<script>swal("Ingresar Contraseña"); </script>';
    }
    if (!empty($_POST['correo'])) {
        $correo = $_POST['correo'];
    } else {
        echo '<script>swal("Ingresar Correo"); </script>';
    }

    $depart=$_POST['depar'];
    $_SESSION['ip']=$depart;

    if (!empty($nombre) and !empty($correo)) {
        $pinunico=rand(56000000, 220000000);;
        $insert = "INSERT INTO `medico` (`indmedico`, `nombre`, `apellido`, `usuario`, `contrasena`, `clinica`, `Telefono`, `FechaNac`, `Correo`, `Departamento`, `sexo`) VALUES ('$pinunico', '$nombre', '$apellido', '$usuario', '$pass', NULL, NULL, NULL, '$correo', '$depart', NULL);";
        $query = mysqli_query($mysqli, $insert);
        
        $result = $mysqli->query("SELECT * FROM medico WHERE Correo='$correos'");
        $row = $result->fetch_array(MYSQLI_ASSOC);

        date_default_timezone_set('America/Managua');
        $fecha = $hoy = date("Y-n-j");
        $hora = $hoy = date("h:i:s");

        $telefono = " Tel: 2220-6871---2277-0288";
        $correoreceptor = $correo;
        $asunto = "Plataforma Online Sistema de Radiografia Digitall";

        $mensaje = "Notificacion de Sistema de Radiografia Digital \r\n";
        $mensaje .= "\r\n";
        $mensaje .= "Hola Dr. " . $nombre . $apellido . "\r\n";

        $mensaje .= "Se ha creado su nuevo usuario de nuestra plataforma de visualizacion de radiografia " . "\r\n";
        $mensaje .= "\r\n";
        $mensaje .= "En este correo encontrará su usuario y contraseña con el cual podrá acceder " . "\r\n";
        $mensaje .= "a nuestra plataforma para poder ver las radiografías de sus pacientes en" . "\r\n";
        $mensaje .= "línea, a través de la cual podrá ingresar en su móvil, tablet o computador." . "\r\n";
        $mensaje .= "Estará a su disposición en cualquier momento, las 24 horas del día, los 365 días del año." . "\r\n";
        $mensaje .= "¡Gracias por ser parte de Sistema de Radiografia Digital!" . "\r\n";
        $mensaje .= "\r\n";
        $mensaje .= "\r\n";
        $mensaje .= "Usuario: " . $usuario . "\r\n";
        $mensaje .= "Contraseña: " . $pass . "\r\n";
        $mensaje .= "\r\n";
        $mensaje .= "http://www.sistemaradiografiadigital.com/aplicacion_RX/pacientes/clinica.php?indmedico=".$pinunico."\r\n";
        /*$mensaje .= "http://www.orthodentalnic.com/Medico.php"."\r\n";*/
        $mensaje .= "\r\n";
        $mensaje .= "\r\n";
        $mensaje .= "Recuerda de Cambiar las Contraseña y usuario"."\r\n";
        $mensaje .= "Telefono de Oficina: " . $telefono . "\r\n";
        $mensaje .= "Fecha: " . $fecha . "\r\n";
        $mensaje .= "Hora: " . $hora . "\r\n";


        $cabeceras = 'From: sistemaradiografiadigital@hotmail.com' . "\r\n" .
            'Reply-To: sistemaradiografiadigital@hotmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($correoreceptor, $asunto, $mensaje, $cabeceras);


        /*Verifica que si se guardo y se envio el correo*/
        echo '<script>swal("Guardado con Exito (Correo Enviado)"); </script>';
    } else {
        echo '<script>swal("Ingresar Todos lo campos"); </script>';
    }
}
?>