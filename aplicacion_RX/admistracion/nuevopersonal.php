<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../img/logo.png"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.. ::EcoRadiología:: .. </title>
    <link rel="stylesheet" href="../../css/carusel/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/carusel/css/bootstrap-theme.min.css">
    <link href="../../css/framework/css.iconos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../icomoon/style.css">
    <link type="text/css" rel="stylesheet" href="../../css/framework/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="../../css/adaptacion_paramobiles.css">
    <link rel="stylesheet" href="../../css/css.index.css">
    <link rel="stylesheet" href="../../css/medico.css">
    <script src="../../css/buscador_applicacion/js/jquery.js"></script>
    <script src="../../css/buscador_applicacion/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../../css/buscador_applicacion/css/estilos.css">
    <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
</head>
<body>
<div class="maximo">
    <nav>
        <div class="fixed navbar-fixed">
            <nav class="nav-color fixed">
                <div class="nav-wrapper tr">
                    <a href="#" class="brand-logo white-text tr pp maximo"> <img
                                src="../../img/logo.png"
                                alt="" class="responsive-img"
                                width="20%">EcoRadiología</a>
                    <a href="../../index.php" class="brand-logo white-text tr minimo">EcoRadiología</a>
                    <ul class="right  maximo">
                        <li><a href="../../publicar.php" class="black-text"><i class="icon-arrow-left2 "></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <br>
    <div class="container white z-depth-1">
        <div class="row ">
            <div class="modal-header">
                <h5><i class=" icon-user-plus" style="font-size: 50px"> </i>Agregar personal admistrativo</h5>
                <p>Solo el personal autirizado debe de ingresar el personal admistrativo</p>
            </div>
            <div class="borde1">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <section class="row">
                        <div class="control-pares col-md-5">
                            <input type="text" name="textnombre" class="form-control"
                                   value="<?php if (!empty($_POST['textnombre'])) {
                                       echo $_POST['textnombre'];
                                   } ?>" placeholder="Nombres"
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;" required>
                        </div>
                        <div class="control-pares col-md-5">
                            <input type="text" name="textapellido" class="form-control"
                                   value="<?php if (!empty($_POST['textapellido'])) {
                                       echo $_POST['textapellido'];
                                   } ?>" placeholder="Apellidos"
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;" required>
                        </div>
                    </section>
                    <br>
                    <section class="row">
                        <div class="control-pares col-md-3">
                            <select name="textsucursal" class="form-control" required
                                    style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; font-size: 18px;">
                                <option class="form-control" value="1">Managua</option>
                                <option class="form-control" value="2">Masaya</option>
                                <option class="form-control" value="3">Chontales</option>
                                <option class="form-control" value="6">Esteli</option>
                                <option class="form-control" value="5">Leon</option>
                                <option class="form-control" value="9">Matagalpa</option>
                                <option class="form-control" value="4">Chinandega</option>
                                <option class="form-control" value="7">Managua Bolonia</option>
                                <option class="form-control" value="8">Managua Villa Fontana</option>
                            </select>
                        </div>
                        <div class="control-pares col-md-3">
                            <input type="text" name="textcedula" class="form-control"
                                   value="<?php if (!empty($_POST['textcedula'])) {
                                       echo $_POST['textcedula'];
                                   } ?>" style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;"
                                   placeholder="No Cedula">
                        </div>
                        <div class="control-pares col-md-3">
                            <input type="text" name="texttelefono"
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;"
                                   placeholder="Telefono" class="form-control"
                                   value="<?php if (!empty($_POST['texttelefono'])) {
                                       echo $_POST['texttelefono'];
                                   } ?>" required>
                        </div>
                    </section>
                    <br>
                    <section class="row">
                        <div class="control-pares col-md-5">
                            <input type="text" name="textdireccion1"
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;"
                                   class="form-control" placeholder="Direccion de domicilio 1"
                                   value="<?php if (!empty($_POST['textdireccion1'])) {
                                       echo $_POST['textdireccion1'];
                                   } ?>" required>
                        </div>
                        <div class="control-pares col-md-5">
                            <input type="text" name="textdireccion2"
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;"
                                   class="form-control" placeholder="Direccion de domicilio 2"
                                   value="<?php if (!empty($_POST['textdireccion2'])) {
                                       echo $_POST['textdireccion2'];
                                   } ?>">
                        </div>
                    </section>
                    <br>
                    <div class="modal-footer">
                        <input type="submit" value="Guardar" class="btn white-text blue-grey borde"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../css/buscador_applicacion/js/buscador.js"></script>
    <footer class="page-footer  z-depth-3" style="background-color: #2B394D">
        <div class="container" style="background-color: #2B394D">
            <div class="row" style="background-color: #2B394D">
                <div class="col l6 s12">
                    <h5 class="white-text"><img src="img/logo.png" alt="" class="responsive-img" style="width: 15%">EcoRadiología
                    </h5>
                    <p class="white-text text-lighten-4">
                        Ecoradiología Nuestra plataforma EcoRadiolgía permite al dentista socio y paciente acceder a las
                        imágenes y diagnósticos: En tiempo real (conforme se va elaborando el estudio) De por vida, los
                        365
                        días del año Desde cualquier dispositivo (móvil, tablet, computadora, laptop).</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="../../css/carusel/js/jquery-3.1.0.min.js"></script>
    <script src="../../css/carusel/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/nuevo.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/personal.js"></script>
</html>3