<?php
/**
 * Created by PhpStorm.
 * User: fuentes
 * Date: 13/10/2018
 * Time: 12:36 PM
 */
include_once '../segurida/conexion.php';
if ($_POST) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $clinica = $_POST['clinica'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];

    if (!empty($nombre)) {

        $insert = "UPDATE `medico` SET `nombre` = '$nombre', `apellido` = '$apellido', `usuario` = '$user', `contrasena` = '$pass', `clinica` = '$clinica', `Telefono` = '$telefono', `FechaNac` = '$fecha', `sexo` = '' WHERE `medico`.`indmedico` = $id; ";
        $query = mysqli_query($mysqli, $insert);
        ?>
        <script>location.href = "../pacientes/buscarpaciente.php?medico=<?php echo $id?>";
            alert("Exito Datos Guardados");
        </script>

        <?php
    }

} else {
    ?>
    <script>location.href = "../pacientes/buscarpaciente.php?medico=<?php echo $id?>";</script>
    <?php
}
?>


