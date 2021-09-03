<?php
session_start();
include "../modelo/header.php";
if (!$_SESSION) {
    echo "<script>location.href='../../ingresar.php'</script>";
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
                            <li><a href="buscarmedico.php?ip=<?php echo $_SESSION['ip']; ?>" class="black-text"><i
                                            class="icon-arrow-left2 "></i></a>
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
                        <a href="../../mcdcm/mviewer.html" target="_blank" class="btn"><i class="icon-profile"> </i>Tomografia</a>
                        <a href="#" onclick="rx2();" class="white-text"><i class="icon-info"> </i>Notificación</a>
                        <a href="#" onclick="rx3();" class="white-text"><i class="icon-notification "> </i>Ayuda</a>
                        <a href="#" onclick="rx4();" class="white-text"><i class="icon-user"> </i>Cuenta</a>
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
        <a href="../../mcdcm/mviewer.html" target="_blank" class="btn"><i class="icon-profile"> </i>Tomografia</a>
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
                    } else if ($row['Departamento'] == "7") {
                        echo $departameto1 = "Chontales";
                    } ?></p>
                <p class="bg-info" style="padding:0.5em;"> <?php echo $ContSuma['contSuma']; ?> Total de
                    publicación.</p>
                <br>
                <div class="container">
                    <div class="center-block">
                        <label for="file" class="control-label" style="font-size: 18px;">Limite de Memoria:</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
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
                    <?php
                    $dir = "../subir/161809360/";
                          echo "Total : " . Fsize($dir);
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
                        return "PESO OBTENIDO: ".formatBytes($cont, $precision = 2);
                    }

                    function formatBytes($bytes, $precision = 2) {
                        $unit = ["B", "KB", "MB", "GB"];
                        $exp = floor(log($bytes, 1024)) | 0;
                        return round($bytes / (pow(1024, $exp)), $precision).$unit[$exp];
                    }
                    ?>


                </div>
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
                                   required
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>
                        <div>
                            <p>Asunto:</p>
                            <input type="text" name="txt2" placeholder="Asunto"
                                   required
                                   style="border-radius: 6px;width:70%;border: 1px solid #2e6da4;padding-left:1em;">
                        </div>
                        <div>
                            <p>Mensaje:</p>
                            <textarea name="txt3" id="" cols="1000" rows="10"></textarea>
                        </div>

                    </section>
                    <br>
                    <section class="center center-align">
                        <hr class="z-depth-3">
                        <div>
                            <input type="submit" value="Enviar a soporte" class="btn black white-text">
                        </div>
                        <hr class="z-depth-3">
                    </section>
                    <br>
                </form>
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
<?php include "../../model/footer.php"; ?>