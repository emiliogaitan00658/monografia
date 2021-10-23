<?php
include "../modelo/header.php";
include_once '../../BD-Connection/conection.php';
include_once '../../BD-Connection/datos_clientes.php';
?>
    <link rel="stylesheet" href="../css/style.css" xmlns="http://www.w3.org/1999/html"/>
    <script src="../css/animateprogress.js"></script>

    <p style="display: none;">
        <?php
        session_start();
        include_once "aplicacion_RX/modelo/header.php";
        $id = $_SESSION['id'];

        $medico = datos_clientes::datos_medico($id, $mysqli);
        $result = $mysqli->query("SELECT `medico`.*, `medico`.`indmedico` FROM `medico` WHERE (`medico`.`indmedico` ='$id')");
        $medico = $result->fetch_array(MYSQLI_ASSOC);
        if ($_POST) {
            if (isset($_POST['nombre_completo'])) {
                include_once '../segurida/subir_paciente.php';

            } else {
                $nombre = $_POST['textnombre'];
                $edad = $_POST['textedad'];
                $url = $_POST['texturl'];
                datos_clientes::registro_webtranfer($nombre, $edad, $url, $id, $mysqli);

                 echo '<script>swal({
                title: "Dato Guardado con exito?",
                text: "Seguro de Eliminar Factura",
                icon: "success",
                buttons: true,

            })
                .then((willDelete) => {
                    if (willDelete) {
                        location.href = "buscarpaciente.php";
                    } else {
                        location.href = "buscarpaciente.php";
                    }
                });</script>';

            }

        }
        if (!$_SESSION) {
            echo "<script>location.href='../../ingresar.php.php'</script>";
        }
        if ($_GET) {
            $_SESSION['id'] = $_GET['medico'];
            $id = $_SESSION['id'];
            //echo "<script>location.href='buscarpaciente.php'</script>";
        } else {
            $_SESSION['id'] = $_SESSION['id'];
            $id = $_SESSION['id'];
        }


        $nombre_fichero = '../subir/' . $id;
        if (file_exists($nombre_fichero)) {
        } else {
            $estructura = '../subir/' . $id;

            if (!mkdir($estructura, 705, true)) {
                die('Fallo al crear las carpetas...');
            }
        }

        ?>
    </p>
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
            div3.style.display = 'none';
            div2.style.display = 'block';
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

        function eliminardefinitiviminete() {
            swal({
                title: "Mensaje",
                text: "Deseas eliminar por completo este Doctor ?",
                icon: "warning",
                button: true,
                dangerMode: true,
            })

                .then((willDelete) => {
                    if (willDelete == true) {
                        location.href = "eliminar_datos_doctor_todos.php?eliminar=<?php echo $id; ?>";
                    }
                });
        }
    </script>
    <div class="maximo">
        <nav>
            <div class="fixed navbar-fixed">
                <nav class="nav-color fixed">
                    <div class="nav-wrapper tr">
                        <a href="../../publico/publicar.php" class="brand-logo white-text tr pp maximo"> <img
                                    src="../../img/logo.png"
                                    alt="" class="responsive-img"
                                    width="20%">EcoRadiología</a>
                        <a href="../../" class="brand-logo white-text tr minimo">EcoRadiología</a>
                        <ul class="right  maximo">
                            <li><a href="buscarmedico.php?ip=1" class="black-text"><i
                                            class="icon-arrow-left2 "></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <div class="center-align center-block center container">
            <a href="#!" class="btn" onclick="rx1();">Publicar RX</a>
            <a href="#!" class="btn" onclick="rx4();">Webtranfer 3D</a>
            <a href="#!" class="btn" onclick="rx3();">Datos Publicado</a>
            <a href="#!" class="btn" onclick="rx2();">Editar Cuenta</a>
            <a href="#!" class="btn" onclick="eliminardefinitiviminete();">Eliminar</a>
        </div>
        <br>
        <div id="nn1">
            <section class="container modal-content">
                <br>
                <p style="padding: 1em;border-radius: 6px;border: 1px solid #2b2d2f" class="modal-title container">
                    Exámenes Solicitados: DR.
                    <b><?php echo $medico['nombre'] . " " . $medico['apellido']; ?></b> <span class="right right-align">Fecha:<?php echo $fecha = $hoy = date("j/n/Y"); ?></span>
                </p>
                <form action="buscarpaciente.php?medico=<?php echo $id; ?>" class="container" method="post"
                      enctype="multipart/form-data">
                    <br>
                    <br>
                    <h5>Completar campos Solicitado:</h5>
                    <section class="row">
                        <div class="control-pares col-md-8">
                            <input type="text" name="nombre_completo" placeholder="Nombre Completo" class="form-control"
                                   required
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;">
                        </div>
                        <div class="control-pares col-md-3">
                            <input type="number" name="edad" placeholder="Edad Paciente" required
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;"
                                   class="form-control">
                        </div>
                    </section>
                    <p class="control-label">Tipos de Estudio:</p>
                    <hr>
                    <div class="container">
                        <select class="left left-align browser-default black white-text" style="font-size: 18px" size=""
                                name="estudio" required>
                            <option value="" disabled="" selected="" style="font-size: 18px">Opcion Estudio</option>
                            <option value="1">Radiografía Panoramica</option>
                            <option value="2">Radiografía ATM</option>
                            <option value="3">Radiografía Cefalometrica</option>
                            <option value="5">Radiografía Carpal</option>
                            <option value="4">Otro Estudio</option>
                        </select>
                    </div>
                    <hr>
                    <div>
                        <p>Archivo de la imagen o estudio PDF:</p>
                        <span>Si el documento es un PDF o RAR debes de poner como otro estudio. <hr
                                    style="padding: 0;margin: 0;"></span>
                        <br>
                        <br>
                        <input type="file" value="Subir Archivo" name="subir" class="btn" required>
                    </div>
                    <br>
                    <br>
                    <hr>
                    <div class="center center-align">
                        <input type="submit" value="Guardar Cambios"
                               class="btn center-align orange white-text waves-effect">
                    </div>
                </form>
                <hr>
                <section class="container center-block">
                    <p>Nota: Todos los datos Guardados en esta pagina seran enviado automaticamente por un correo
                        notificando de
                        que su estudio
                        o radiografia en su plataforma web.</p>
                </section>
            </section>
        </div>
        <div id="nn2" style="display: none;">
            <section class="container modal-content">
                <br>
                <br>
                <div class="container">
                    <p>Editar datos personales: DR.
                        <b><?php echo $medico['nombre'] . " " . $medico['apellido']; ?></b></span>
                    </p>
                    <hr class="z-depth-3 red">
                    <p>Nota : Si dispone de los datos del doctor puede ingresar en el formulario (Solo Personal
                        Autorizado).</p>
                    <form action="editar_doctor_datos_personales.php" method="post" enctype="multipart/form-data">

                        <span style="width:15%!important; padding: 1em;">Codigo Unico:</span>
                        <input type="text" name="id" placeholder="indmedico" required
                               style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; width: 10%"
                               value="<?php echo $medico['indmedico']; ?>">
                        <br>

                        <span style="width:15%!important; padding: 1em;">Nombre:</span>
                        <input type="text" name="nombre" placeholder="Nombres" required
                               style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; width: 50%"
                               value="<?php echo $medico['nombre']; ?>">
                        <br>
                        <span style="width:15%!important; padding: 1em;">Apellido:</span>
                        <input type="text" name="apellido" placeholder="Apellidos" required
                               style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; width: 50%"
                               value="<?php echo $medico['apellido']; ?>">
                        <br>
                        <span><b>Estos datos esta bloqueados solo el doctor puede modificar el usuario y contraseña.</b></span>
                        <hr>
                        <span style="width:15%!important; padding: 1em;"><b>Codigo Minsa:</b></span>
                        <input type="text" name="user" placeholder="usuario" required
                               style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; width: 50%"
                               value="<?php echo $medico['usuario']; ?>">
                        <br>

                        <span style="width:15%!important; padding: 1em;"><b>Contraseña:</b></span>
                        <input type="password" name="pass" placeholder="Contraseña" required
                               style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; width: 50%"
                               value="<?php echo $medico['contrasena']; ?>" readonly=readonly>
                        <button class="btn danger" onclick="" style="border-radius: 6px" readonly>Restablecer
                            contraseña
                        </button>
                        <br>
                        <hr>
                        <span style="width:15%!important; padding: 1em;">Correo:</span>
                        <input type="email" name="correo" placeholder="Correo" required
                               style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; width: 50%"
                               value="<?php echo $medico['Correo']; ?>">
                        <br>
                        <span style="width:15%!important; padding: 1em;">Direccion de la Clinica:</span>
                        <input type="text" name="clinica" placeholder="Direccion de Clinica"
                               style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; width: 50%"
                               value="<?php echo $medico['clinica']; ?>">
                        <br>
                        <span style="width:15%!important; padding: 1em;">Telefono:</span>
                        <input type="number" name="telefono" placeholder="Numero de Telefono"
                               style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; width: 50%"
                               value="<?php echo $medico['Telefono']; ?>">
                        <br>
                        <br>
                        <span style="width:15%!important; padding: 1em;">Fecha de Nacimiento:</span>
                        <input type="date" name="fecha" placeholder="Fecha Nacimiento"
                               style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em; width: 50%"
                               value="<?php echo $medico['FechaNac']; ?>">
                        <hr>
                        <div>
                            <input type="submit" value="Guardar Cambios"
                                   class="btn center-align blue white-text waves-effect">
                        </div>
                    </form>
                    <hr>
                </div>
                <section class="container center-block">
                    <p>Nota:Recuerda de que al registar un doctor y debes de omitir poner le al inicio DR en su nombre
                        ya que el sistema solo recupera los datos personales y problamenente pueda dar errores.</p>
                </section>
            </section>

        </div>

        <div id="nn4" style="display: none;">
            <section class="container modal-content">
                <br>
                <p style="padding: 1em;border-radius: 6px;border: 1px solid #2b2d2f" class="modal-title container">
                    Exámenes Solicitados: DR.
                    <b><?php echo $medico['nombre'] . " " . $medico['apellido']; ?></b> <span class="right right-align">Fecha:<?php echo $fecha = $hoy = date("j/n/Y"); ?></span>
                </p>
                <form action="buscarpaciente.php?medico=<?php echo $id; ?>" class="container" method="post"
                      enctype="multipart/form-data">
                    <br>
                    <br>
                    <h5>Completar campos Solicitado:</h5>
                    <section class="row">
                        <div class="control-pares col-md-8">
                            <input type="text" name="textnombre" placeholder="Nombre Completo"
                                   class="form-control"
                                   required
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;">
                        </div>
                        <div class="control-pares col-md-3">
                            <input type="number" name="textedad" placeholder="Edad Paciente" required
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;"
                                   class="form-control">
                        </div>
                    </section>
                    <section class="row">
                        <div class="control-pares col-md-8">
                            <p><i class="icon-link black-text"></i>URL del la tomografìa: </p>
                            <input type="url" name="texturl" placeholder="url direccion" class="form-control"
                                   required
                                   style="border-radius: 6px; border: 1px solid #2e6da4; padding-left: 1em;">
                        </div>
                    </section>
                    <br>
                    <br>
                    <hr>
                    <div class="center center-align">
                        <input type="submit" value="Guardar Cambios"
                               class="btn center-align orange white-text waves-effect">
                    </div>
                </form>
                <hr>
                <section class="container center-block">
                    <p>Nota: Todos los datos Guardados en esta pagina seran enviado automaticamente por un correo
                        notificando de
                        que su estudio
                        o radiografia en su plataforma web.</p>
                </section>
            </section>
        </div>


        <div id="nn3" style="display: none">
            <section class="container modal-content">
                <br>
                <br>
                <br>
                <h5>Informenes radiologico 2D</h5>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Completo</th>
                        <th>Edad</th>
                        <th>Estudio</th>
                        <th>Fecha</th>
                        <th>Descargar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        $result4 = $mysqli->query("SELECT * FROM pedido WHERE indmedico='$id' ORDER BY ind DESC");

                        while ($pedido = $result4->fetch_assoc()) {
                        $valores = $pedido['tipo_estudio'];
                        $p = "No reconocido";
                        if ($valores == '1') {
                            $p = 'PANORAMICA';
                        }
                        if ($valores == '2') {
                            $p = 'ATM';
                        }
                        if ($valores == '3') {
                            $p = 'CEFALOMETRICA';
                        }
                        if ($valores == '4') {
                            $p = 'ESTUDIO';
                        }
                        if ($valores == '5') {
                            $p = 'CARPAL';
                        }
                        ?>
                    <tr>
                        <td style="width: 10px !important;"><?php echo $pedido['ind']; ?></td>
                        <td style="width: 50% !important;"><?php echo $pedido['nombre_completo']; ?></td>
                        <td style="width: 10px !important;"><?php echo $pedido['edad']; ?></td>
                        <td><?php echo $p; ?></td>
                        <td><?php echo $pedido['Fecha']; ?></td>

                        <td><a href="<?php echo $pedido['archivo_url'] ?>"
                               download="<?php echo $pedido['archivo_url'] ?>"><i
                                        class="icon-files-empty green white-text"
                                        style="font-size: 18px;padding: 12px;border-radius: 6px"></i></a></td>

                        <td><a href="../segurida/eliminar_datos.php?eliminar=<?php echo $pedido['ind']; ?>"><i
                                        class="icon-bin red white-text"
                                        style="font-size: 18px;padding: 12px;border-radius: 6px"></i></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tr>
                    </tbody>
                </table>

                <hr>
                <h5>Webtraner enviado para descargas</h5>
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
                        $result4 = $mysqli->query("SELECT * FROM webtranfer  WHERE indmedico='$id'");
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
                        <td style="width: 10px !important;"><?php echo $pedido['hora']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <div class="container z-depth-1" style="padding: 2em; border-color: #0c5460!important;">
                    <p style="font-size: 18px">Los limites de almacemaniento de su repositorio es equivalente,
                        15 Gb de almacenamiento </p>
                    <p><b><?php
                    $dir = "../subir/" . $id . "/";
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

                    ?></b></p>

                </div>
                <br>
            </section>
        </div>
        <script src="../../css/buscador_applicacion/js/buscador.js"></script>
<?php include_once "../modelo/footer.php"; ?>