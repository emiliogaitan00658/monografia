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
<body class="poner2018">
<?php
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
                    <li><a href="../../Medico/pacientes/clinica.php" class="black-text">Regresar</a></li>
                    <li><a href="../../Medico/pacientes/clinica.php" class="black-text">Cancelar</a></li>
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
<footer class="page-footer white z-depth-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="black-text">Plataforma online <i class="icon-leaf green-text"></i>EcoRadiología</h5>                <p class="black-text text-lighten-4">
                    ¡Llevando la radiología dental literalmente hacia las nubes!Llegaría 100% virtual con nuestra
                    plataforma. Así ayudarías al planeta a reducir la
                    utilización de insumos altamente contaminante (placas, líquidos, etc.) y reducir papelería excesiva
                    que
                    fomenta a la tala indiscriminada de árboles.
                </p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="black-text">Contacto</h5>
                <ul>
                    <li><a class="black-text text-lighten-3" href="#!"> <i class="icon-profile small"></i> Tel:
                            2220-6871</a></li>
                    <br>
                    <li><a class="black-text text-lighten-3" href="mailto:ortho_dental@hotmail.com"> <i
                                    class="icon-mail4 small"></i>soporte_medico@sistemaradiografiadigital.com</a>
                    </li>
                    <br>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container black-text">
            © <?php echo date("Y"); ?> Copyrightv Sistema de Radiografia Digital
        </div>
    </div>
</footer>
</body>
<script src="../../Catalogo%20Marca/carusel/js/jquery-3.1.0.min.js"></script>
<script src="../../Catalogo%20Marca/carusel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/nuevo.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/personal.js"></script>
</html>