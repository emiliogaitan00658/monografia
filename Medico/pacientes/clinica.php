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
if(!$_SESSION){
    echo "<script>location.href='../../ingresar.php.php'</script>";
}

include_once '../segurida/datosmedico.php';
$verificar = $row['usuario'];

$_SESSION['user'] = $row['indmedico'];

if (empty($verificar)) {
    header("location:http://www.orthodentalnic.com/index.php");
}

$varte = $row['usuario'];
$varte2 = $row['usuario'];

if (ctype_digit($varte) or  $varte2=="admin") {  
/* echo '<script>
swal({
    title:"Mensaje",
    text:"Debes de Cambiar tu usuario y contraseña",
    icon:"warning",
    button:true,
    dangerMode:true,
})
});
</script>';*/
}
?>


<script>
    function rx1() {
        var div1 = document.getElementById('nn1');
        var div2 = document.getElementById('nn2');
        var div3 = document.getElementById('nn3');
        var div4 = document.getElementById('nn4');
        div1.style.display = 'block';
        div2.style.display = 'none';
        div3.style.display = 'none';
        div4.style.display = 'none';
    }

    function rx2() {
        var div1 = document.getElementById('nn1');
        var div2 = document.getElementById('nn2');
        var div3 = document.getElementById('nn3');
        var div4 = document.getElementById('nn4');
        div1.style.display = 'none';
        div2.style.display = 'block';
        div3.style.display = 'none';
        div4.style.display = 'none';
    }

    function rx3() {
        var div1 = document.getElementById('nn1');
        var div2 = document.getElementById('nn2');
        var div3 = document.getElementById('nn3');
        var div4 = document.getElementById('nn4');
        div1.style.display = 'none';
        div2.style.display = 'none';
        div3.style.display = 'block';
        div4.style.display = 'none';
    }
    function rx4() {
        var div1 = document.getElementById('nn1');
        var div2 = document.getElementById('nn2');
        var div3 = document.getElementById('nn3');
        var div4 = document.getElementById('nn4');
        div1.style.display = 'none';
        div2.style.display = 'none';
        div3.style.display = 'none';
        div4.style.display = 'block';
    }

</script>


<script type="text/javascript">
    smartsupp('email', '<?php echo $row["Correo"];?>');
    smartsupp('name', '<?php echo $row["nombre"] . $row["apellido"];?>');
</script>

<nav class="white">
    <div class="fixed navbar-fixed">
        <nav class="nav-color fixed">
            <div class="nav-wrapper tr">Sistema de Radiografia Digital</a>
                <a href="" class="brand-logo blue-grey-tex tr minimo">Sistema de Radiografia Digital</a>
                <ul class="right  maximo">
                    <li><a href="../../index.php" class="black-text"><i class="icon-cancel-circle small"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="collapsible minimo sao" style="position: relative;" data-collapsible="accordion">
        <li class="container center sao">
            <div class="collapsible-header white-text sa">Menu</div>
            <div class="collapsible-body ">
                <ul class="left sa">
                <a href="#" onclick="rx1();" class="btn"><i class="icon-home"> </i>Inicio</a>
    <a href="#" onclick="rx2();" class="white-text"><i class="icon-info"> </i>Notificación</a>
    <a href="#" onclick="rx3();" class="white-text"><i class="icon-notification "> </i>Ayuda</a>
    <a href="#" onclick="rx4();" class="white-text"><i class="icon-user"> </i>Cuenta</a>
                    <li><a href="../../index.php" class="">Salir</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<div class="minimo row">
    <br class="minimo">
</div>
<div class="center-align center-block center container row maximo">
    <a href="#" onclick="rx1();" class="btn"><i class="icon-home"> </i>Inicio</a>
    <a href="#" onclick="rx2();" class="btn"><i class="icon-info"> </i>Notificación</a>
    <a href="#" onclick="rx3();" class="btn"><i class="icon-notification "> </i>Ayuda</a>
    <a href="#" onclick="rx4();" class="btn"><i class="icon-user"> </i>Cuenta</a>
</div>

<div id="nn1">
<div class="no-margenes modal-body">
    <section class="container white jk modal-content">
        <br class="maximo">
        <h5 class="maximo modal-title"><i class="icon-user-check orange-text icontamano"></i>
            Dr. <?php echo $row['nombre'] . "<span> </span>" . $row['apellido'] ?></h5>
        <h5 class="minimo center-align modal-title"><br><br>
            Dr. <?php echo $row['nombre'] . "<span> </span>" . $row['apellido'] ?></h5>
        <hr>
        <p>Exámenes Solicitados: <span class="right tap"><b>Estado:</b> Activo</span> </p>
        <hr>
        <div class="center maximo">
            <div class="imgger z-depth-1">
                <a href="resultados_estudio.php?ip=1"><img src="../img_medico/panoramica1.jpg" alt=""
                                                           class="responsive-img"></a>
            </div>
            <div class="imgger z-depth-1">
                <a href="resultados_estudio.php?ip=2"><img src="../img_medico/atm.jpg" alt=""
                                                           class="responsive-img"></a>
            </div>
            <div class="imgger z-depth-1">
                <a href="resultados_estudio.php?ip=3"><img src="../img_medico/cefalometria.jpg" alt=""
                                                           class="responsive-img"></a>
            </div>
            <div class="imgger z-depth-1">
                <a href="resultados_estudio.php?ip=4"><img src="../img_medico/estudios.jpg" alt=""
                                                           class="responsive-img"></a>
            </div>
            <div class="imgger z-depth-1">
                <a href="resultados_estudio.php?ip=5"><img src="../img_medico/carpal.png" alt="" class="responsive-img"></a>
            </div>
        </div>
        <div class="center minimo container center">
            <div class="modal-content">
                <a href="resultados_estudio.php?ip=1"><img src="../img_medico/panoramica1.jpg" alt=""
                                                           class="responsive-img"
                                                           width="70%"></a>
                <a href="resultados_estudio.php?ip=2"><img src="../img_medico/atm.jpg" alt="" class="responsive-img"
                                                           width="70%"></a>
                <a href="resultados_estudio.php?ip=3"><img src="../img_medico/cefalometria.jpg" alt=""
                                                           class="responsive-img"
                                                           width="70%"></a>
                <a href="resultados_estudio.php?ip=4"><img src="../img_medico/estudios.jpg" alt=""
                                                           class="responsive-img" width="70%"></a>
                <a href="resultados_estudio.php?ip=5"><img src="../img_medico/carpal.png" alt="" class="responsive-img"
                                                           width="70%"></a>
            </div>
        </div>
        <hr>
        <p style="padding:0.5em;" class="center-align">Sucursal de <?php if ($row['Departamento'] == "1") {
                echo $departameto1 = "Managua";
            } else if ($row['Departamento'] == "2") {
                echo $departameto1 = "Masaya";
            } else if ($row['Departamento'] == "3") {
                echo $departameto1 = "Chinandega";
            } else if ($row['Departamento'] == "4") {
                echo $departameto1 = "Esteli";
            } else if ($row['Departamento'] == "5") {
                echo $departameto1 = "León";
            } else if ($row['Departamento'] == "6") {
                echo $departameto1 = "Matagalpa";
            }else if ($row['Departamento'] == "7") {
                echo $departameto1 = "Chontales";
            } ?></p>
        <p class="bg-info" style="padding:0.5em;"> <?php echo $ContSuma['contSuma']; ?> Total de publicación.</p>
        <br>
    </section>
</div>
</div>
<div id="nn2" style="display:none;">
 <div class="no-margenes modal-body" >
    <section class="container white jk modal-content">
    <br class="maximo">
        <div class="container">
            <br class="minimo">
            <h5 class="modal-title"><i class="icon-mail text-primary icontamano"></i>
                Correo de Notificación</h5>
        </div>
        <hr>
        <form action="../segurida/consutas_ayuda.php?indmedico=<?php echo $row['indmedico']; ?>" method="post"
              class="container">
            <section>
            <p>Con este correo usted se le va a estar notificando acerca de actualizaciones o modificiones de su perfil asi
            mismo estaremos enviando todos los tipos de estudios de sus paciente.</p>
                <div>
                    <p>Correo:</p>
                    <input type="text" name="txt1" placeholder="Correo" value="<?php echo $row['Correo']; ?>"
                           required style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>
            </section>
            <br>
            <section class="center center-align">
                <hr class="z-depth-3">
                <div>
                    <input type="submit" value="Update" class="btn black white-text">
                </div>
                <hr class="z-depth-3">
            </section>
            <br>
        </form>
    </section>
</div>
 </div>
<div id="nn3" style="display: none;">
<div class="no-margenes modal-body">
    <section class="container white jk modal-content">
    <br class="maximo">
        <div class="container">
            <br class="minimo">
            <h5 class="modal-title"><i class="icon-info text-primary icontamano"></i>
                Consultas o Ayuda</h5>
        </div>
        <hr>
        <form action="../segurida/consutas_ayuda.php?indmedico=<?php echo $row['indmedico']; ?>" method="post"
              class="container">
            <section>
                <div>
                    <p>Correo:</p>
                    <input type="text" name="txt1" placeholder="Correo" value="<?php echo $row['Correo']; ?>"
                           required style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>
                <div>
                    <p>Asunto:</p>
                    <input type="text" name="txt2" placeholder="Asunto"
                           required style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>
                <div>
                    <p>Mensaje:</p>
                    <textarea name="txt3" id="" cols="100" rows="10"></textarea>
                </div>

            </section>
            <br>
            <section class="center center-align">
                <hr class="z-depth-3">
                <div>
                    <input type="submit" value="Actualizar" class="btn black white-text">
                </div>
                <hr class="z-depth-3">
            </section>
            <br>
        </form>
    </section>
</div>
</div>

<div id="nn4" style="display:none;">

<div class="no-margenes modal-body" >
    <section class="container white jk modal-content">
        <br class="maximo">
        <div class="container">
            <br class="minimo">
            <h5 class="modal-title"><i class="icon-user-plus text-primary icontamano"></i>
                Actualizar datos personales</h5>
        </div>
        <hr>
        <form action="../segurida/datosmedico.php?indmedico=<?php echo $row['indmedico']; ?>" method="post"
              class="container">
            <div>
                <p>ID_Medico:<?php echo $row['indmedico']; ?></p>
                <hr class="z-depth-3">
            </div>
            <section>
                <div>
                    <p>Nombres:</p>
                    <input type="text" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']; ?>"
                           required style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>
                <div>
                    <p>Apellidos:</p>
                    <input type="text" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']; ?>"
                           required style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>

                <div style="boder:1px solid red;">
                <div>
                    <p>Usuario:</p>
                    <input type="text" name="user" placeholder="Modificar Usuario"
                           value="<?php echo $row['usuario']; ?>" required
                           style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>
                <div>
                    <p>Contraseña:</p>
                    <input type="text" name="pass" placeholder="Contraseña" value="<?php echo $row['contrasena']; ?>"
                           required style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>
                
                </div>
                <div>
                    <p>Nombre de Clinicas:</p>
                    <input type="text" name="clinica" placeholder="Nombre de Clinica"
                           value="<?php echo $row['clinica']; ?>"
                           style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>
                <div>
                    <p>Correo:</p>
                    <input type="email" name="correo" placeholder="Correo" value="<?php echo $row['Correo']; ?>"
                           required style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>

                <div>
                    <p>Telefono:</p>
                    <input type="text" name="telefono" placeholder="Telefono" value="<?php echo $row['Telefono']; ?>"
                           style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>
                <div>
                    <p>Fecha de Nacimiento:</p>
                    <input type="text" name="fecha" placeholder="Ejemplo:02/02/2018"
                           value="<?php echo $row['FechaNac']; ?>"
                           style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                </div>
            </section>
            <br>
            <section class="center center-align">
                <hr class="z-depth-3">
                <div>
                    <input type="submit" value="Actualizar" class="btn black white-text">
                </div>
                <hr class="z-depth-3">
            </section>
            <br>
        </form>
    </section>
</div>

</div>

<footer class="page-footer white z-depth-3 ">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="black-text">Plataforma online <i class="icon-leaf green-text"></i>EcoRadiología</h5>
                <p class="black-text text-lighten-4">
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
                    <li><a class="black-text text-lighten-3" href="mailto:emiliogaitan00658@gmail.com"> <i
                                    class="icon-mail4 small"></i>Atencion Personalizado</a>
                    </li>
                    <br>
                    <li><a class="black-text text-lighten-3" href="#!">Terminos y
                            Condiciones <?php echo date("Y"); ?></a>
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