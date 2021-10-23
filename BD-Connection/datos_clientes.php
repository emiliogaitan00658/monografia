<?php

class Password
{
    const SALT = 'EstoEsUnSalt';

    public static function hash($password)
    {
        return hash('sha512', self::SALT . $password);
    }

    public static function verify($password, $hash)
    {
        return ($hash == self::hash($password));
    }
}


class incriptar
{
    public static function hash_inscriptar($valor)
    {
        $clave = 'Una cadena, muy, muy larga para mejorar la encriptacion';
        $method = 'aes-256-cbc';
        $iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");

        return openssl_encrypt($valor, $method, $clave, false, $iv);
    }

    public static function hash_desencriptar($valor)
    {
        $clave = 'Una cadena, muy, muy larga para mejorar la encriptacion';
        $method = 'aes-256-cbc';
        $iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
        $encrypted_data = base64_decode($valor);
        return openssl_decrypt($valor, $method, $clave, false, $iv);

    }
}


class datos_clientes
{
    public static function fecha_get_pc()
    {
        date_default_timezone_set('America/Managua');
        $fecha = date("j-n-Y");
        return $fecha;
    }

    public static function fecha_get_pc_formulario()
    {
        date_default_timezone_set('America/Managua');
        $fecha = date("j/n/Y");
        return $fecha;
    }

    public static function fecha_get_pc_MYSQL()
    {
        date_default_timezone_set('America/Managua');
        $fecha = date("Y-n-j");
        return $fecha;
    }

    public static function hora_get_pc()
    {
        date_default_timezone_set('America/Managua');
        $hora = date("h:i:s");
        return $hora;
    }


    public static function generador_codigo($mysqli)
    {
        $longitud = 6;
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern) - 1;
        for ($i = 0; $i < $longitud; $i++) $key .= $pattern{mt_rand(0, $max)};

        $result = $mysqli->query("SELECT * FROM `medico` WHERE medico.contrasena='$key'");
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (!empty($row)) {
            return "true";
            self::generador_codigo($mysqli);
        } else {
            return $key;
        }
    }


    public static function datos_clientes_generales_dadd($indcliente, $mysqli)
    {
        $result = $mysqli->query("SELECT * FROM `clientes` WHERE indcliente='$indcliente'");
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (!empty($row)) {
            return $row;
        }
        return false;
    }

    public static function correo_exites($correo, $mysqli)
    {
        $result = $mysqli->query("SELECT * FROM `medico` WHERE Correo='$correo'");
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (!empty($row)) {
            return 1;
        } else {
            return 0;
        }
        return 0;
    }

    public static function datos_medico($id, $mysqli)
    {
        $result = $mysqli->query("SELECT `medico`.*, `medico`.`indmedico` FROM `medico` WHERE (`medico`.`indmedico` ='$id')");
        $medico2 = $result->fetch_array(MYSQLI_ASSOC);
        if (!empty($row)) {
            return $medico2;
        } else {
            return 0;
        }
    }
    public static function datos_medico_generales2($ind, $mysqli)
    {
        $result = $mysqli->query("SELECT * FROM `medico` WHERE indmedico='$ind'");
        $me = $result->fetch_array(MYSQLI_ASSOC);
        if (!empty($row)) {
            return $me;
        } else {
            return 0;
        }
    }

    public static function entregar_matariales_bandera($indfactura, $bandera, $mysqli)
    {
        $insert = "UPDATE `factura` SET `bandera` = '$bandera' WHERE `factura`.`indfactura` = '$indfactura'";
        $query = mysqli_query($mysqli, $insert);
        return true;
    }

    public static function cambiar_contrasena($contrasena_inscriptada, $indmedico, $mysqli)
    {
        $insert = "UPDATE `medico` SET `contrasena` = '$contrasena_inscriptada'
WHERE `medico`.`indmedico` = '$indmedico'; ";
        $query = mysqli_query($mysqli, $insert);
        return true;
    }

    public static function registro_webtranfer($nombre, $edad, $url, $id, $mysqli)
    {
        $result = $mysqli->query("SELECT `medico`.*, `medico`.`indmedico` FROM `medico` WHERE (`medico`.`indmedico` ='$id')");
        $medico = $result->fetch_array(MYSQLI_ASSOC);


        $fecha = self::fecha_get_pc_MYSQL();
        $hora = self::hora_get_pc();
        $insert = "INSERT INTO `webtranfer` (`indtraferencia`, `url_tranferencia`, `nombre_paciente`, `indmedico`, `edad`, `fecha`, `hora`)
 VALUES (NULL, '$url', '$nombre', '$id', '$edad', '$fecha', '$hora');";
        $query = mysqli_query($mysqli, $insert);

        $telefono = " Tel: 2220-6871---2277-0288";
        $correoreceptor = $medico['Correo'];
        $asunto = "Plataforma Online EcoRadiología";

        $mensaje = "Notificacion de Sistema de EcoRadiología: \r\n";
        $mensaje .= "Hola Dr. " . $medico['nombre'] . $medico['apellido'] . "\r\n";
        $mensaje .= "Estimado usuario la radiografía de su paciente: " . $nombre . "\r\n";
        $mensaje .= "Ya puede descargar la tomografía digital." . "\r\n";
        $mensaje .= "\r\n";
        $mensaje .= "¡Gracias por se parte de Sistema de EcoRadiología!" . "\r\n";
        $mensaje .= "\r\n";
        $mensaje .= "\r\n";
        $mensaje .= "Webtranfer: " . $url;
        $mensaje .= "Este link es valido por 15 dias .";
        $mensaje .= "\r\n";
        $mensaje .= "\r\n";
        $mensaje .= "Telefono de Oficina:" . $telefono . "\r\n";
        $mensaje .= "Fecha:" . $fecha . "\r\n";
        $mensaje .= "Hora:" . $hora . "\r\n";

        $cabeceras = 'From: ecoradiología@hotmail.com' . "\r\n" .
            'Reply-To: ecoradiología@hotmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($correoreceptor, $asunto, $mensaje, $cabeceras);


        return true;
    }

    public static function eliminar_datos($eliminar, $mysqli)
    {
        $insert = "DELETE FROM `pedido` WHERE `pedido`.`ind` = '$eliminar'";
        $query = mysqli_query($mysqli, $insert);
        return true;
    }


}
