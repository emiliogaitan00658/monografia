<?php
$estudio = $_GET['ip'];
session_start();
$medico = $_SESSION['user'];

if (mysqli_connect_errno()) {
    die("Error al conectar: " . mysqli_connect_error());
}

$result = $mysqli->query("SELECT pedido.*, paciente.* FROM admistracion LEFT JOIN pedido ON pedido.indmedico = admistracion.indmedico LEFT JOIN paciente ON pedido.indpaciente = paciente.indpaciente WHERE (admistracion.indmedico ='3' and pedido.tipo='3') ");

?>