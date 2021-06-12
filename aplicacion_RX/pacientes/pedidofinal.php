<?php
include_once "model/footer.php";
session_start();
include_once '../segurida/conexion.php';
include_once '../segurida/pedido.php';
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}
?>
<body>
<div class="maximo">
    <nav>
        <div class="fixed navbar-fixed">
            <nav class="nav-color fixed">
                <div class="nav-wrapper tr">
                    <a href="../../index.php" class="brand-logo white-text tr pp maximo"> Sistema de Radiografia Digital</a>
                    <a href="../../index.php" class="brand-logo white-text tr minimo">Sistema de Radiografia Digital</a>
                    <ul class="right  maximo">
                        <li><a href="../pacientes/buscarmedico.php" class="black-text">Cancelar Pedido</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <section class="container">
        <form action="pedidofinal.php?paciente=<?php echo $pedidopaciente; ?>" method="post"
              enctype="multipart/form-data">
            <h5>Datos medico</h5>
            <hr class="z-depth-3">
            <div class="row pedido">
                <p>Nombre:<?php echo $row['nombre']; ?></p>
                <input type="hidden" value="<?php echo $row['indmedico']; ?>" name="medico">
            </div>
            <div class="row pedido">
                <p>Apellido:<?php echo $row['apellido']; ?></p>
            </div>
            <div class="row pedido">
                <p>Correo:<?php echo $row['Correo']; ?></p>
            </div>
            <h5>Datos paciente:</h5>
            <hr class="z-depth-3">
            <div class="row pedido">
                <p>Nombre:<?php echo $row2['nombre']; ?></p>
                <input type="hidden" value="<?php echo $row2['indpaciente']; ?>" name="paciente">
            </div>
            <div class="row pedido">
                <p>Apellido:<?php echo $row2['apellido']; ?></p>
            </div>
            <div class="row pedido">
                <input type="text" placeholder="Edad" name="edad" required>
            </div>
            <h5>Tipo de Estudio</h5>
            <hr class="z-depth-3">
            <div class="row fo">
                <select class="browser-default blue-grey white-text container" name="estudio">
                    <option value="" disabled="" selected="">Opcion Estudio</option>
                    <option value="1" class="estudio">Radiografía Panoramica</option>
                    <option value="2" class="estudio">Radiografía ATM</option>
                    <option value="3" class="estudio">Radiografía Cefalometrica</option>
                </select>
            </div>
            <div class="row pedido">
                <p class="red-text">Nu.Pedido:<?php echo $sec = rand(100, 22000); ?></p>
                <input type="hidden" name="pedido" value="<?php echo $sec; ?>">
            </div>
            <div class="row pedido">
                <p>Fecha:<?php echo $hoy = date("j-n-Y"); ?></p>
                <input type="hidden" name="fecha" value="<?php echo date("j-n-Y") ?>">
            </div>
            <h5>Subir Imagen</h5>
            <hr class="z-depth-3">
            <div class="row pedido">
                <input type="file" value="Subir Archivo" name="subir">
            </div>
            <p>Solo Personal Autorizado!!</p>
            <hr>
            <div class="row center">
                <input type="submit" value="Guardar" class="btn">
            </div>
            <hr>
        </form>
    </section>
    <script src="../../css/buscador_applicacion/js/buscador.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96584217-1"></script>
<?php include_once "model/footer.php"; ?>