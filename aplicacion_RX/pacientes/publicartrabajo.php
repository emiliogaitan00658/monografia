<?php
include_once "model/header.php";
session_start();
include_once '../segurida/datosmedico.php';
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}
?>
<nav>
    <div class="fixed navbar-fixed">
        <nav class="nav-color fixed">
            <div class="nav-wrapper tr">
                <a href="../../index.php" class="brand-logo white-text tr pp maximo"> <img src="../../img/093b747.png"
                                                                                           alt="" class="responsive-img"
                                                                                           width="20%">Ortho Dental</a>
                <a href="../../index.php" class="brand-logo white-text tr minimo">Ortho Dental</a>
                <ul class="right  maximo">
                    <li><a href="clinica.php" class="black-text">Inicio</a></li>
                    <li><a class="waves-effect waves-light modal-trigger black-text" href="#modal5">Perfil Medico</a>
                    </li>
                    <li><a href="../../index.php" class="black-text">Salir</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="collapsible minimo" data-collapsible="accordion">
        <li class="sa container center">
            <div class="collapsible-header black-text sa">Menu</div>
            <div class="collapsible-body ">
                <ul class="right black">
                    <li><a href="../../index.php" class="white-text">Inicio</a></li>
                    <li><a class="waves-effect waves-light modal-trigger white-text" href="#modal5">Perfil Medico</a>
                    <li><a href="../../index.php" class="white-text">Salir</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<br>
<?php include_once "model/footer.php"; ?>