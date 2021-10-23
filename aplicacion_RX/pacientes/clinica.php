<?php
session_start();
include "../modelo/header.php";
if (!$_SESSION) {
    echo "<script>location.href='../../index.php'</script>";
}

include_once '../segurida/datosmedico.php';
$verificar = $row['usuario'];

$_SESSION['user'] = $row['indmedico'];

if (empty($verificar)) {
    echo '<script>location.href = "../../ingresar.php</script>';

}

$varte = $row['usuario'];
$varte2 = $row['usuario'];

if (ctype_digit($varte) or $varte2 == "admin") {
    echo '<script>
    swal({
        title:"Mensaje",
        text:"Debes de Cambiar tu usuario y contraseña",
        icon:"warning",
        button:true,
        dangerMode:true,
    })
    });
    </script>';
}
?>
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="../css/animateprogress.js"></script>

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
        <nav>
            <div class="fixed navbar-fixed">
                <nav class="nav-color fixed">
                    <div class="nav-wrapper tr">
                        <a href="#" class="brand-logo white-text tr pp maximo"> <img
                                    src="../../img/logo.png"
                                    alt="" class="responsive-img"
                                    width="20%">EcoRadiología</a>
                        <a href="../../" class="brand-logo white-text tr minimo">EcoRadiología</a>
                        <ul class="right  maximo">
                            <li><a href="cerrar_seccion.php?close=<?php echo $_SESSION['user']; ?>"
                                   class="black-text"><i
                                            class="icon-cancel-circle "></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <ul class="collapsible minimo sao" style="position: relative;" data-collapsible="accordion">
            <li class="container center sao">
                <div class="collapsible-header white-text sa">Menu</div>
                <div class="collapsible-body ">
                    <ul class="left sa">
                        <a href="#" onclick="rx1();" class="btn"><i class="icon-home"> </i>Inicio</a>
                        <a href="#" onclick="rx3();" class="btn"><i class="icon-folder-upload"> Webtranfer 3D</i></a>
                        <a href="../../mcdcm/mviewer.html" target="_blank" class="btn"><i class="icon-profile"> </i>Tomografia
                            Softwares</a>
                        <a href="#" onclick="rx2();" class="btn"><i class="icon-info"> </i>Informaciòn</a>
                        <a href="#" onclick="rx4();" class="btn"><i class="icon-user"> </i>Cuenta</a>
                        <li><a href="../../index.php" class="">X</a></li>
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
        <a href="#" onclick="rx3();" class="btn"><i class="icon-folder-upload"> Webtranfer 3D</i></a>
        <a href="../../mcdcm/mviewer.html" target="_blank" class="btn"><i class="icon-profile"> </i>Tomografia Softwares</a>
        <a href="#" onclick="rx2();" class="btn"><i class="icon-info"> </i>Informaciòn</a>
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
                <p>Exámenes Solicitados: <span class="right tap"><b>Estado:</b> Activo</span></p>
                <hr>
                <div class="center maximo">
                    <div class="imgger z-depth-1">
                        <a href="resultados_estudio.php?ip=1"><img src="../img_medico/panoramica1.jpg" alt=""
                                                                   class="responsive-img"></a>
                    </div>
                    <div class="imgger z-depth-1">
                        <a href="resultados_estudio.php?ip=2"><img src="../img_medico/atm.png" alt=""
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
                        <a href="resultados_estudio.php?ip=5"><img src="../img_medico/carpal.png" alt=""
                                                                   class="responsive-img"></a>
                    </div>
                </div>
                <div class="center minimo container center">
                    <div class="modal-content">
                        <a href="resultados_estudio.php?ip=1"><img src="../img_medico/panoramica1.jpg" alt=""
                                                                   class="responsive-img"
                                                                   width="70%"></a>
                        <a href="resultados_estudio.php?ip=2"><img src="../img_medico/atm.jpg" alt=""
                                                                   class="responsive-img"
                                                                   width="70%"></a>
                        <a href="resultados_estudio.php?ip=3"><img src="../img_medico/cefalometria.jpg" alt=""
                                                                   class="responsive-img"
                                                                   width="70%"></a>
                        <a href="resultados_estudio.php?ip=4"><img src="../img_medico/estudios.jpg" alt=""
                                                                   class="responsive-img" width="70%"></a>
                        <a href="resultados_estudio.php?ip=5"><img src="../img_medico/carpal.png" alt=""
                                                                   class="responsive-img"
                                                                   width="70%"></a>
                    </div>
                </div>
                <hr>
                <p style="padding:0.5em;" class="center-align">Sucursal de <?php if ($row['indsucursal'] == "1") {
                        echo $departameto1 = "Managua";
                    } else if ($row['indsucursal'] == "2") {
                        echo $departameto1 = "Masaya";
                    } else if ($row['indsucursal'] == "3") {
                        echo $departameto1 = "Chinandega";
                    } else if ($row['indsucursal'] == "4") {
                        echo $departameto1 = "Esteli";
                    } else if ($row['indsucursal'] == "5") {
                        echo $departameto1 = "León";
                    } else if ($row['indsucursal'] == "6") {
                        echo $departameto1 = "Matagalpa";
                    } else if ($row['indsucursal'] == "7") {
                        echo $departameto1 = "Chontales";
                    } ?></p>
                <p class="bg-info" style="padding:0.5em;"> <?php echo $ContSuma['contSuma']; ?> Total de
                    publicación.</p>
                <!--                <br>-->
                <!--                <div class="container">-->
                <!--                    <div class="center-block">-->
                <!--                        <label for="file" class="control-label" style="font-size: 18px;">Limite de Memoria:</label>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"-->
                <!--                                 aria-valuemin="0" aria-valuemax="100"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
            </section>
        </div>
    </div>
    <div id="nn2" style="display:none;">
        <div class="no-margenes modal-body">
            <section class="container white jk modal-content">
                <br class="maximo">
                <div class="container">
                    <br class="minimo">
                    <span><i class="icon-info text-primary icontamano"></i></span><h5 class="modal-title">
                        Informaciòn</h5>
                </div>
                <hr>
                <div>

                </div>
                <div>
                    <p>Los limites de almacemaniento de su repositorio es equivalente, 15 Gb de almacenamiento </p>
                    <p><?php
                        $dir = "../subir/" . $_SESSION['user'] . "/";
                        echo "Total Archivo : " . Fsize($dir);
                        function Fsize($dir)
                        {
                            clearstatcache();
                            $cont = 0;
                            if (is_dir($dir)) {
                                if ($gd = opendir($dir)) {
                                    while (($archivo = readdir($gd)) !== false) {
                                        if ($archivo != "." && $archivo != "..") {
                                            if (is_dir($archivo)) {
                                                $cont += Fsize($dir . "/" . $archivo);
                                            } else {
                                                $cont += sprintf("%u", filesize($dir . "/" . $archivo));
                                                //echo  "archivo : " . $dir . "/" . $archivo . "&nbsp;&nbsp;" . filesize($dir . "/" . $archivo) . "<br />";
                                            }
                                        }
                                    }
                                    closedir($gd);
                                }
                            }
                            return formatBytes($cont, $precision = 2);
                        }

                        function formatBytes($bytes, $precision = 2)
                        {
                            $unit = ["B", "KB", "MB", "GB"];
                            $exp = floor(log($bytes, 1024)) | 0;
                            return round($bytes / (pow(1024, $exp)), $precision) . $unit[$exp];
                        }
                        function Fsize2($dir)
                        {
                            clearstatcache();
                            $cont = 0;
                            if (is_dir($dir)) {
                                if ($gd = opendir($dir)) {
                                    while (($archivo = readdir($gd)) !== false) {
                                        if ($archivo != "." && $archivo != "..") {
                                            if (is_dir($archivo)) {
                                                $cont += Fsize($dir . "/" . $archivo);
                                            } else {
                                                $cont += sprintf("%u", filesize($dir . "/" . $archivo));
                                                //echo  "archivo : " . $dir . "/" . $archivo . "&nbsp;&nbsp;" . filesize($dir . "/" . $archivo) . "<br />";
                                            }
                                        }
                                    }
                                    closedir($gd);
                                }
                            }
                            return formatBytes2($cont, $precision = 2);
                        }

                        function formatBytes2($bytes, $precision = 2)
                        {
                            $resutado=0;
                            $unit = ["B", "KB", "MB", "GB"];
                            $exp = floor(log($bytes, 1024)) | 0;
                            $valores= round($bytes / (pow(1024, $exp)), $precision);
                            if ($unit[$exp]="GB"){
                                $resutado=$valores*1024;
                            }
                            return $resutado;
                        }
                        ?></p>
                </div>

                <div class="row">
                    <div class="container">
                        <div class="center">
                            <h5>Limite almacenamiento</h5>
                            <hr>
                            <progress id="html5" max="15360" value="0"></progress>
                            <span></span>
                        </div>
                        <input type="button" class="btn btn-link " id="boton" value="Recargar"/>
                    </div>
                </div>
                <br>
        </div>

        <script type="text/javascript">
            total_bultos = parseInt('<?php echo Fsize2($dir) ?>');
            total=total_bultos/100
            window.onload = function () {
                animateprogress("#html5", total);
            }
            document.querySelector('#boton').addEventListener('click', function () {
                animateprogress("#html5", total );
            });
        </script>

        <br>
        <br>
        </section>
    </div>
    </div>

    <div id="nn3" style="display: none;">
        <div class="no-margenes modal-body">
            <section class="container white jk">
                <br class="maximo">
                <br class="minimo">
                <h5 class="modal-title"><i class="icon-folder-upload text-primary icontamano"></i>
                    Listado de trasferencia tomogragìa dìgitales</h5>
                <hr>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Completo</th>
                        <th>Edad</th>
                        <th>Descargar</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        $result4 = $mysqli->query("SELECT * FROM webtranfer  WHERE indmedico=" . $_SESSION['user']);
                        while ($pedido = $result4->fetch_assoc()) { ?>
                    <tr>
                        <td style="width: 10px !important;"><?php echo $pedido['indtraferencia']; ?></td>
                        <td style="width: 50% !important;"><?php echo $pedido['nombre_paciente']; ?></td>
                        <td style="width: 10px !important;"><?php echo $pedido['edad']; ?></td>
                        <td style="width: 5px !important;"><a href="<?php echo $pedido['url_tranferencia']; ?>"
                                                              class="btn btn-link"
                                                              style="border-radius:12px !important;" target="_blank"><i
                                        class="icon-link white-text"></i></a></td>
                        <td style="width: 30px !important;"><?php echo $pedido['fecha']; ?></td>
                        <td style="width: 10px !important;"><?php echo $pedido['edad']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <div id="nn4" style="display:none;">
        <div class="no-margenes modal-body">
            <section class="white modal-content center-block" style="width: 85%">
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
                        <p style="font-size: 18px">ID_Medico: <b><?php echo $row['indmedico']; ?></b></p>
                        <hr class="z-depth-3">
                    </div>
                    <section class="row" style="margin: 0%;">
                        <div class="control-pares col-md-6">
                            <p>Nombres:</p>
                            <input type="text" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']; ?>"
                                   required
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>
                        <div class="control-pares col-md-6" style="margin: 0%;">
                            <p>Apellidos:</p>
                            <input type="text" name="apellido" placeholder="Apellido"
                                   value="<?php echo $row['apellido']; ?>"
                                   required
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>
                        <hr>
                        <div class="control-pares col-md-6">
                            <p>Usuario:</p>
                            <input type="text" name="user" placeholder="Modificar Usuario"
                                   value="<?php echo $row['usuario']; ?>" required
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>
                        <div class="control-pares col-md-6">
                            <p>Contraseña:</p>
                            <input type="password" name="pass" placeholder="Contraseña"
                                   value="<?php echo $row['contrasena']; ?>"
                                   required
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>
                        <div class="control-pares col-md-12">
                            <p>***Desea recupera contraseña o cambiar</p>
                        </div>
                        <hr>
                    </section>
                    <section class="row" style="margin: 0%;">
                        <div class="control-pares col-md-6">
                            <p>Nombre de Clinicas:</p>
                            <input type="text" name="clinica" placeholder="Nombre de Clinica"
                                   value="<?php echo $row['clinica']; ?>"
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>
                        <div class="control-pares col-md-6">
                            <p>Correo:</p>
                            <input type="email" name="correo" placeholder="Correo" value="<?php echo $row['Correo']; ?>"
                                   required
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>

                    </section>
                    <section class="row" style="margin: 0%;">
                        <div class="control-pares col-md-6">
                            <p>Telefono:</p>
                            <input type="text" name="telefono" placeholder="Telefono"
                                   value="<?php echo $row['Telefono']; ?>"
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>
                        <div class="control-pares col-md-6">
                            <p>Fecha de Nacimiento:</p>
                            <input type="date" name="fecha" placeholder="Ejemplo:02/02/2018"
                                   value="<?php echo $row['FechaNac']; ?>"
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>
                    </section>
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
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'edbaa8ec138f6f5a7a5c9505363528488dad2a6e';
        window.smartsupp || (function (d) {
            var s, c, o = smartsupp = function () {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <script>
        smartsupp('name', '<?php echo $row['nombre'] . "" . $row['apellido']; ?>');
        smartsupp('email', '<?php echo $row['Correo']; ?>');
        smartsupp('phone', '<?php echo $row['telefono']; ?>');
    </script>
<?php include "../../model/footer.php"; ?>