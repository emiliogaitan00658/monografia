<?php
/**
 * Created by PhpStorm.
 * User: Emilio Gaitan
 * Date: 22/01/2018
 * Time: 9:16
 */

$cadena_de_texto = 'kooooooooo';
$cadena_buscada   = '.zip';
$posicion_coincidencia = strrpos($cadena_de_texto, $cadena_buscada);

//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    echo "NO se ha encontrado la palabra deseada!!!!";
} else {
    echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia;
}

