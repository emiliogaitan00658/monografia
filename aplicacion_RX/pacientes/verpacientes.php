<?php
include_once "model/header.php";
include_once '../segurida/conexion.php';
include_once '../segurida/verpaciente.php';
session_start();
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}

?>
<div class="container">
    <section class="container ">
        <h2 class="header">Estudios</h2>
        <hr>
        <ul class="collapsible" data-collapsible="accordion">
            <?php
            while ($f = $result->fetch_assoc()) {
                ?>
                <li>
                    <div class="collapsible-header"><?php echo $f['nombre'].$f['apellido'] ?></div>
                    <div class="collapsible-body">
                        <img src="<?php echo $f['imagen'] ?>" alt="">
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
    </section>

</div>
<?php include_once "model/footer.php"; ?>
