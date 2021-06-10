<?php
$estudio = $_GET['ip'];
session_start();
$medico = $_SESSION['user'];

if (mysqli_connect_errno()) {
    die("Error al conectar: " . mysqli_connect_error());
}

$result = $mysqli->query("SELECT pedido.*, paciente.* FROM medico LEFT JOIN pedido ON pedido.indmedico = medico.indmedico LEFT JOIN paciente ON pedido.indpaciente = paciente.indpaciente WHERE (medico.indmedico ='3' and pedido.tipo='3') ");

?>