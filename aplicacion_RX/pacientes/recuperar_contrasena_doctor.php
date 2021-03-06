<?php include_once "../modelo/header.php";
include_once "../../BD-Connection/datos_clientes.php";
include_once "../../BD-Connection/conection.php";
?>
    <nav>
        <div class="fixed navbar-fixed">
            <nav class="nav-color fixed">
                <div class="nav-wrapper tr">
                    <a href="../../index.php" class="brand-logo white-text tr pp maximo"><img src="../../img/logo.png"
                                                                                              style="width: 20%" alt="">EcoRadiologíal</a>
                    <a href="../../index.php" class="brand-logo white-text tr minimo">EcoRadiología</a>
                    <ul class="right  maximo">
                        <li><a href="../../index.php" class="black-text"><i class="icon-arrow-left2"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <br>
    <section style="position: fixed;background-color:white;border-radius: 6px;width: 15%;margin: 6px;padding: 6px"
             class="z-depth-1">
        <p>Nota:</p>
        <p>El correo que debes de ingresar es el que enviaste con tu paciente.</p>
    </section>
    <br><br>
    <div class="container center">
        <h5 style="border-bottom:1px solid black;">Recuperar cuenta</h5>
    </div>
    <br>
    <br>
    <div class="container center center-align white">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="container"
              style="padding: 3em">
            <input type="email" name="correo" placeholder="Correo" value="<?php ?>" required
                   style="padding-left: 1em; border: 1px solid #00acc1;border-radius: 6px;">
            <input type="submit" class="btn orange" value="Recuperar">
        </form>
    </div>
    <br><br>
    <br>
<?php
session_start();
if ($_POST) {
    $recuperar = $_POST['correo'];
    if (!empty($recuperar)) {
        if (mysqli_connect_errno()) {
            die("Error al conectar: " . mysqli_connect_error());
        }
        $result = $mysqli->query("SELECT * FROM `medico` WHERE Correo= '$recuperar'");
        $row = $result->fetch_array(MYSQLI_ASSOC);

        $contrasena_generico = datos_clientes::generador_codigo($mysqli);
        $contrasena_inscriptada=incriptar::hash_inscriptar($contrasena_generico);

        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $user = $row['usuario'];
        $pass = $row['contrasena'];
        $correo = $row['Correo'];
        $indmedico = $row['indmedico'];

        datos_clientes::cambiar_contrasena($contrasena_inscriptada,$indmedico,$mysqli);
        if (!empty($row)) {



            date_default_timezone_set('America/Managua');
            $fecha = $hoy = date("Y-n-j");
            $hora = $hoy = date("h:i:s");

            $telefono = " Tel: 2220-6871---2277-0288";
            $correoreceptor = $correo;
            $asunto = "Plataforma Online EcoRadiología";

            $mensaje = "Notificacion de EcoRadiología: \r\n";
            $mensaje .= "Hola DR.: " . $nombre . $apellido . "\r\n";

            $mensaje .= "Estimado cliente le notificamos de que usted a solicitado" . "\r\n";
            $mensaje .= "recuperar su contraseña esta es su clave de acceso a la " . "\r\n";
            $mensaje .= "Platafoma online acurdese de actualizar los datos personales.." . "\r\n";
            $mensaje .= "¡Gracias por ser parte de EcoRadiología!" . "\r\n";
            $mensaje .= "\r\n";
            $mensaje .= "\r\n";
            $mensaje .= "Usuario: " . $user . "\r\n";
            $mensaje .= "Contraseña: " . $contrasena_generico . "\r\n";
            $mensaje .= "\r\n";
            $mensaje .= "http://www.ecoradiologia.com/aplicacion_RX.php" . "\r\n";
            $mensaje .= "\r\n";
            $mensaje .= "\r\n";
            $mensaje .= "Recuerda de Cambiar las Contraseña y usuario" . "\r\n";
            $mensaje .= "Telefono de Oficina: " . $telefono . "\r\n";
            $mensaje .= "Fecha: " . $fecha . "\r\n";
            $mensaje .= "Hora: " . $hora . "\r\n";


            $cabeceras = 'From: ecoradiología@hotmail.com' . "\r\n" .
                'Reply-To: ecoradiología@hotmail.com' . "\r\n" .
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
    } else {
        echo '<script>swal("Mensaje","Ingresar correo porfavor","warning")</script>';
    }
}
?>

<?php include_once "../modelo/footer.php"; ?>