<?php
include_once "model/header.php";
session_start();
include_once '../segurida/datosmedico.php';
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}
?>
<nav class="white">
    <div class="fixed navbar-fixed">
        <nav class="nav-color fixed">
            <div class="nav-wrapper tr">
                <a href="clinica.php" class="brand-logo white-text tr pp maximo">Sistema de Radiografia Digital</a>
                <a href="clinica.php" class="brand-logo white-text tr minimo">Sistema de Radiografia Digital</a>
                <ul class="right  maximo">
                    <li><a href="../pacientes/clinica.php" class="black-text">Regresar</a></li>
                    <li><a href="../pacientes/clinica.php" class="black-text">Cancelar</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="collapsible minimo sao" data-collapsible="accordion">
        <li class="container center sao">
            <div class="collapsible-header white-text sa">Menu</div>
            <div class="collapsible-body ">
                <ul class="left sa">
                    <li><a href="clinica.php" class="white-text">Inicio</a></li>
                    <li><a href="clinica.php" class="white-text">Regresar</a></li>
                    <li><a href="clinica.php" class="white-text">Cancelar</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

<section style="position: fixed;border: 1px #0f0f0f;margin-left: 6px;width: 13%;margin-top: 1em;border-radius: 8px;" class="z-depth-2">
    <div style="padding: 1em;">
        <p class="red-text">Nota:</p>
        <p>
            Si has ingresado por primera vez
            debes de cambiar tu usuario o contraseña.
            Por que estos son generados por de fectos.
        </p>
    </div>
</section>

<section class="perfil_medico">
    <!--Datos personales del medico-->
    <div class="container white">
        <br>
        <br>
        <div class="container green coool white-text center">
            <h5>Editar Dato Personales</h5>
        </div>
        <hr class="z-depth-3">
        <form action="PerfilMedico.php" method="post">
            <div class="container">
                <p>ID_Medico:<?php echo $row['indmedico']; ?></p>
                <i class="red-text"><i class="icon-warning red-text small"><span>   </span></i><span>   </span>Llenar todos los campos porfavor!!</i>
                <hr class="z-depth-3">
            </div>
            <section class="marco00658 center-align">
                <div>
                    <p>Nombres:</p>
                    <input type="text" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']; ?>"
                           required>
                </div>
                <div>
                    <p>Apellidos:</p>
                    <input type="text" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']; ?>"
                           required>
                </div>
            </section>
            <section class="marco00658 center-align">
                <div>
                    <p>Usuario:</p>
                    <input type="text" name="user" placeholder="Modificar Usuario"
                           value="<?php echo $row['usuario']; ?>" required>
                </div>
                <div>
                    <p>Contraseña:</p>
                    <input type="text" name="pass" placeholder="Contraseña" value="<?php echo $row['contrasena']; ?>"
                           required>
                </div>
            </section>
            <section class="marco00658 center-align">
                <div>
                    <p>Nombre de Clinicas:</p>
                    <input type="text" name="clinica" placeholder="Nombre de Clinica"
                           value="<?php echo $row['clinica']; ?>">
                </div>
                <div>
                    <p>Correo:</p>
                    <input type="email" name="correo" placeholder="Correo" value="<?php echo $row['Correo']; ?>"
                           required>
                </div>
            </section>
            <section class="center-align marco00658">
                <div>
                    <p>Telefono:</p>
                    <input type="text" name="telefono" placeholder="Telefono" value="<?php echo $row['Telefono']; ?>">
                </div>
                <div>
                    <p>Fecha de Nacimiento:</p>
                    <input type="text" name="fecha" placeholder="Ejemplo:02/02/2018" value="<?php echo $row['FechaNac']; ?>">
                </div>
            </section>
            <br>
            <section class="center center-align">
                <hr class="z-depth-3">
                <div>
                    <input type="submit" value="Guardar" class="btn black white-text">
                </div>
                <hr class="z-depth-3">
            </section>
            <br>
        </form>
    </div>
</section>
<?php include_once "model/footer.php"; ?>
