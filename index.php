<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/093b747.png"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.. ::Sistema de Radiografia Digital:: .. </title>
    <link rel="stylesheet" href="Catalogo%20Marca/carusel/css/bootstrap.min.css">
    <link rel="stylesheet" href="Catalogo%20Marca/carusel/css/bootstrap-theme.min.css">
    <link href="framework/css.iconos.css" rel="stylesheet">
    <link rel="stylesheet" href="icomoon/style.css">
    <link type="text/css" rel="stylesheet" href="framework/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="css/adaptacion_paramobiles.css">
    <link rel="stylesheet" href="css/css.index.css">
    <link rel="stylesheet" href="css/medico.css">
    <script type="text/javascript" src="js/sweetalert.min.js"></script>

</head>
<body class="perfil_medico">
<?php include_once 'MVS/menu_principal.php'?>
<?php
include_once 'Medico/segurida/seguridadlogin.php';
?>
<div class="container ">
    <p class="white-text center-align red no-margenes">Atención el uso de mascarilla es obligtorio al ingresar a nuestras sucursales (YO TE PROTEJO, TÚ ME PROTEGES).</p>
</div>
<div class="maximo">
    <div class="marco2 right">
        <div class="medic">
            <form action="index.php" method="post" class="wr center-block center ">
                <p class="pe center z-depth-1">INGRESAR</p>
                <p>Usuario:</p>
                <input type="text" name="usuario" placeholder="Usuario" required  style="padding-left: 1em; border: 1px solid #00acc1;border-radius: 6px;">
                <p>Contraseña:</p>
                <input type="password" name="pass" placeholder="Contraseña" required style="padding-left: 1em; border: 1px solid #00acc1;border-radius: 6px;">
                <input type="submit" value="Ingresar" class="btn z-depth-3" style="background-color: #5270A2">
                <p><a href="Medico/pacientes/recuperar_contrasena_doctor.php" class="btn-link red-text">Olvidaste la contraseña?</a></p>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <img src="Medico/img_medico/image.png" alt="" class="center-block">
    <div class="marco center-block" ALIGN="justify">
        <h5>Adquiere una cuenta en nuestra plataforma online  <i class="icon-leaf green-text"></i>EcoRadiología</h5>
        <p>¡Llevando la radiología dental literalmente hacia las nubes!.No esperes que tu paciente te lleve su estudio
            radiográfico. Accede a éste antes y así podrás preparar con anticipación su plan de tratamiento y
            presupuesto.
            Está probado que una buena presentación de su diagnóstico influirá en su decisión de compra, ¿te imaginas que
            pasaría si le enseñas sus resultados desde EcoRadiología con una laptop, tablet o smartphone? ¡Tú pones el
            límite!</p>
        <p>Ecoradiología
            Nuestra plataforma EcoRadiolgía permite al dentista socio y paciente acceder a las imágenes y diagnósticos:

            En tiempo real (conforme se va elaborando el estudio)
            De por vida, los 365 días del año
            Desde cualquier dispositivo (móvil, tablet, computadora, laptop).
        </p>
        <p>Llegaría 100% virtual con nuestra plataforma. Así ayudarías al planeta a reducir la utilización de insumos
            altamente contaminante (placas, líquidos, etc.) y reducir papelería excesiva que fomenta a la tala
            indiscriminada de árboles. </p>
    </div>
    <section class="container">
        <img src="img/banner2.jpg" class="center-block z-depth-3 img-responsive" alt="">
    </section>
</div>
<div class="minimo">
    <br>
    <div class="center">
        <div class="medic">
            <form action="index.php" method="post" class="wr center-block center ">
                <p class="pe center">Ingresar</p>
                <p>Usuario:</p>
                <input type="text" name="usuario" placeholder="Usuario" required  style="padding-left: 1em; border: 1px solid #00acc1;border-radius: 6px;">
                <p>Contraseña:</p>
                <input type="password" name="pass" placeholder="Contraseña" required  style="padding-left: 1em; border: 1px solid #00acc1;border-radius: 6px;">
                <input type="submit" value="Ingresar" class="btn">
            </form>
        </div>
    </div>
    <img src="Medico/img_medico/image.png" alt="" class="center center-align center-block">
    <div class="center-block container" ALIGN="justify">
        <h5>Adquiere una cuenta en nuestra plataforma online  <i class="icon-leaf green-text"></i>EcoRadiología</h5>
        <hr>
        <p>¡Llevando la radiología dental literalmente hacia las nubes!.No esperes que tu paciente te lleve su estudio
            radiográfico. Accede a éste antes y así podrás preparar con anticipación su plan de tratamiento y
            presupuesto.
            Está probado que una buena presentación de su diagnóstico influirá en su decisión de compra, ¿te imaginas que
            pasaría si le enseñas sus resultados desde EcoRadiología con una laptop, tablet o smartphone? ¡Tú pones el
            límite!</p>
        <p>Ecoradiología
            Nuestra plataforma EcoRadiolgía permite al dentista socio y paciente acceder a las imágenes y diagnósticos:

            En tiempo real (conforme se va elaborando el estudio)
            De por vida, los 365 días del año
            Desde cualquier dispositivo (móvil, tablet, computadora, laptop).
        </p>
        <p>Además, te damos la opción de marcar en nuestra orden radiográfica el "NO recibir el estudio impreso"...este
            llegaría 100% virtual con nuestra plataforma. Así ayudarías al planeta a reducir la utilización de insumos
            altamente contaminante (placas, líquidos, etc.) y reducir papelería excesiva que fomenta a la tala
            indiscriminada de árboles. </p>
    </div>
</div>

<?php
include_once 'MVS/footer.php';
?>
</body>
<script src="Catalogo%20Marca/carusel/js/jquery-3.1.0.min.js"></script>
<script src="Catalogo%20Marca/carusel/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/nuevo.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/personal.js"></script>
</html>