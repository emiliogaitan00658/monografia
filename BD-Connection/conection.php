<?php
/**
 * Created by PhpStorm.
 * User: Emilio-Gaitan
 * Date: 05/03/2020
 * Time: 03:38 PM
 */
$mysqli = new mysqli("localhost", "root", "", "bookdentdatabase");
//$mysqli = new mysqli("mysql.hostinger.com", "u893429626_pacie", "*.*@NTONIO1997", "u893429626_medic");
if (mysqli_connect_errno()) {
    die("Error al conectar: " . mysqli_connect_error());
}
$mysqli->set_charset("utf8"); //Estableciendo utf8




