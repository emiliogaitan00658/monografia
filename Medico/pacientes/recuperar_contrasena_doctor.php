<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../img/093b747.png"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.. ::Sistema de Radiografia Digital:: .. </title>
    <link rel="stylesheet" href="../../Catalogo%20Marca/carusel/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Catalogo%20Marca/carusel/css/bootstrap-theme.min.css">
    <link href="../../framework/css.iconos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../icomoon/style.css">
    <link type="text/css" rel="stylesheet" href="../../framework/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="../../css/adaptacion_paramobiles.css">
    <link rel="stylesheet" href="../../css/css.index.css">
    <link rel="stylesheet" href="../../css/medico.css">
    <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
</head>
<body>
<nav>
    <div class="fixed navbar-fixed">
        <nav class="nav-color fixed">
            <div class="nav-wrapper tr">
                <a href="../../index.php" class="brand-logo white-text tr pp maximo">Sistema de Radiografia Digital</a>
                <a href="../../index.php" class="brand-logo white-text tr minimo">Sistema de Radiografia Digital</a>
                <ul class="right  maximo">
                    <li><a href="../../index.php" class="black-text">Regresar</a></li>
                </ul>
            </div>
        </nav>
    </div>
</nav>
<section style="position: fixed;border-radius: 6px;width: 15%;margin: 6px;padding: 6px" class="z-depth-1">
    <p>Nota:</p>
    <p>El correo que debes de ingresar es el que enviaste con tu paciente.</p>
</section>
<br><br>
<div class="container center">
    <h5>Recuperar cuenta</h5>
    <hr class="container z-depth-3">
</div>
<br>
<br>
<div class="container center center-align">
    <form action=" " method="post" class="container">
        <p>Correo:</p>
        <input type="email" name="correo" placeholder="Correo" value="<?php ?>" required style="padding-left: 1em; border: 1px solid #00acc1;border-radius: 6px;">
        <input type="submit" class="btn orange" value="Recuperar">
    </form>
</div>
<br><br>
<?php
session_start();
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}

include_once '../segurida/conexion.php';
if ($_POST) {
    $recuperar=$_POST['correo'];
    if(!empty($recuperar)){
        if (mysqli_connect_errno()) {
            die("Error al conectar: " . mysqli_connect_error());
        }
        $result = $mysqli->query("SELECT * FROM `medico` WHERE `Correo` LIKE '$recuperar'");
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (!empty($row)) {
            $nombre=$row['nombre'];
            $apellido=$row['apellido'];
            $user=$row['usuario'];
            $pass=$row['contrasena'];
            $correo=$row['Correo'];


            date_default_timezone_set('America/Managua');
            $fecha = $hoy = date("Y-n-j");
            $hora = $hoy = date("h:i:s");

            $telefono = " Tel: 2220-6871---2277-0288";
            $correoreceptor = $correo;
            $asunto = "Plataforma Online Sistema de Radiografia Digital";

            $mensaje = "Notificacion de Sistema de Radiografia Digital: \r\n";
            $mensaje .= "Hola DR.: " . $nombre . $apellido . "\r\n";

            $mensaje .= "Estimado cliente le notificamos de que usted a solicitado" . "\r\n";
            $mensaje .= "recuperar su contraseña esta es su clave de acceso a la " . "\r\n";
            $mensaje .= "Platafoma online acurdese de actualizar los datos personales.." . "\r\n";
            $mensaje .= "¡Gracias por ser parte de Sistema de Radiografia Digital!" . "\r\n";
            $mensaje .= "\r\n";
            $mensaje .= "\r\n";
            $mensaje .= "Usuario: " . $user . "\r\n";
            $mensaje .= "Contraseña: " . $pass . "\r\n";
            $mensaje .= "\r\n";
            $mensaje .= "http://www.sistemaradiografiadigital.com/Medico.php"."\r\n";
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


            echo '<script>
swal({
    title:"Mensaje",
    text:"Exito Revisar Correo",
    icon:"success",
    button:true,
    dangerMode:true,
})

.then((willDelete)=>{
if(willDelete){
    location.href="../../index.php";
}
});
</script>';
        } else {
            echo '<script>swal("Mensaje","Correo No Identificado","error")</script>';
        }
    }else{
        echo '<script>swal("Mensaje","Ingresar correo porfavor","warning")</script>';
    }
}
?>

</body>
<footer class="page-footer white z-depth-3 ">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="black-text">Plataforma online <i class="icon-leaf green-text"></i>EcoRadiología</h5>
                <p class="black-text text-lighten-4">
                    ¡Llevando la radiología dental literalmente hacia las nubes!Llegaría 100% virtual con nuestra
                    plataforma. Así ayudarías al planeta a reducir la
                    utilización de insumos altamente contaminante (placas, líquidos, etc.) y reducir papelería excesiva
                    que
                    fomenta a la tala indiscriminada de árboles.
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container black-text">
            © <?php echo date("Y"); ?> Copyrightv Sistema de Radiografia Digital
        </div>
    </div>
</footer>
<script src="../../Catalogo%20Marca/carusel/js/jquery-3.1.0.min.js"></script>
<script src="../../Catalogo%20Marca/carusel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/nuevo.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/personal.js"></script>
</html>