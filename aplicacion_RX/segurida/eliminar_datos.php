<?php
include_once "../../BD-Connection/conection.php";
include_once "../../BD-Connection/datos_clientes.php";
//DELETE FROM `pedido` WHERE `pedido`.`ind` = 3
$eliminar=$_GET['eliminar'];
datos_clientes::eliminar_datos($eliminar,$mysqli);

echo "<script>location.href='../pacientes/buscarpaciente.php'</script>";

