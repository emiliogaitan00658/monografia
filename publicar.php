<?php
include_once "model/header.php";
?>
    <nav>
        <div class="fixed navbar-fixed">
            <nav class="nav-color fixed">
                <div class="nav-wrapper tr">
                    <a href="#" class="brand-logo white-text tr pp maximo"> <img
                                src="img/logo.png"
                                alt="" class="responsive-img"
                                width="20%">EcoRadiología</a>
                    <a href="index.php" class="brand-logo white-text tr minimo">EcoRadiología</a>
                    <ul class="right  maximo">
                        <li><a href="ingresar.php" class="black-text"><i class="icon-cancel-circle small"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
<?php
session_start();
if (!$_SESSION) {
    echo "<script>location.href='ingresar.php'</script>";
}
include_once 'aplicacion_RX/segurida/conexion.php';

$ind = $_SESSION['sucursal'];
$_SESSION['sucursal'] = $_SESSION['sucursal'];
$result = $mysqli->query("SELECT * FROM `sucursales` WHERE `indsucursal` LIKE '$ind'");
$rows = $result->fetch_array(MYSQLI_ASSOC);

$resul = $mysqli->query("SELECT medico.indsucursal, COUNT(pedido.tipo_estudio) as contSuma FROM medico LEFT JOIN pedido ON pedido.indmedico = medico.indmedico WHERE medico.indsucursal='$ind'");
$conteo = $resul->fetch_array(MYSQLI_ASSOC);

?>
    <br>
    <br>
    <br>
    <br>
    <div class="container center-align">
        <h5 class="left-align"><i class="icon-compass2 modal-title red-text"> </i>Bienvenido
            Sucursal <?php echo $rows["nombre_sucursal"]; ?></h5>
        <h5 class="padii text-info" style="border-bottom: 1px solid black">Menu Principal</h5>

        <div class="lk">
            <a href="aplicacion_RX/pacientes/sucursales.php" class="btn-link">Publicar Estudio</a>
        </div>
        <div class="lk">
            <a href="aplicacion_RX/pacientes/sucursales.php" class="btn-link">Lista de clientes</a>
        </div>
        <div class="lk">
            <a href="aplicacion_RX/admistracion/nuevopersonal.php" class="btn-link">Agregar Personal</a>
        </div>
        <hr>
        <p><?php echo $conteo['contSuma']; ?> publicaciones total.</p>
        <hr>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php include_once "model/footer.php" ?>