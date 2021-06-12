<?php
if ($_GET){
    $ver=$_GET['indmedico'];
    $_SESSION['user']=$ver;
}
  $uno=$_POST['txt1'];
  $dos=$_POST['txt2'];
  $tres=$_POST['txt3'];

  //notfifcar de consultas y ayudas los datos
  date_default_timezone_set('America/Managua');
  $fechaa = $hoy = date("Y-n-j");
  $hora = $hoy = date("h:i:s");

  $telefono = " Tel: 2220-6871---2277-0288";
  $correoreceptor = $medico['Correo'];
  $asunto = "Plataforma Online Sistema de Radiografia Digital";

  $mensaje = "Notificacion de Sistema de Radiografia Digital: \r\n";
  $mensaje .= "Hola DR.: " . $medico['nombre'] . $medico['apellido'] . "\r\n";
  $mensaje .= "Pronto le reponderemos su ayuda o consulta sobre la plataforma online." . "\r\n";
  $mensaje .= "!Gracias por se parte de Sistema de Radiografia Digital!" . "\r\n";
  $mensaje .= "\r\n";
  $mensaje .= "\r\n";
  $mensaje .= "http://www.sistemadadiografiadigital.com/index.php" . "\r\n";
  $mensaje .= "\r\n";
  $mensaje .= "\r\n";
  $mensaje .= "Telefono de Oficina:" . $telefono . "\r\n";
  $mensaje .= "Fecha:" . $fechaa . "\r\n";
  $mensaje .= "Hora:" . $hora . "\r\n";

  $cabeceras = 'From: sistemaradiografiadigital@hotmail.com' . "\r\n" .
      'Reply-To: sistemaradiografiadigital@hotmail.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
  mail($correoreceptor, $asunto, $mensaje, $cabeceras);

  if (!empty($nombre)) {
      $insert = "INSERT INTO `consulta` (`indconsulta`, `correo`, `asunto`, `mensaje`, `fecha`, `hora`) VALUES (NULL, '"+$uno+"', '"+$dos+"', '"+$tres+"', '"+$fechaa+"', '"+$hora+"');";
      $query = mysqli_query($mysqli, $insert);
      echo "<script>location.href='../pacientes/clinica.php?indmedico=".$row['indmedico']."'</script>";
      echo '<script>swal("Exito Datos Guardados"); </script>';
  }
?>