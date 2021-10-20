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
        }else{
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
        }else{
            return 0;
        }
    }
    public static function entregar_matariales_bandera($indfactura,$bandera, $mysqli)
    {
        $insert = "UPDATE `factura` SET `bandera` = '$bandera' WHERE `factura`.`indfactura` = '$indfactura'";
        $query = mysqli_query($mysqli, $insert);
        return true;
    }

 public static function registro_webtranfer($nombre,$edad,$url,$id,$mysqli)
    {
        $fecha=self::fecha_get_pc_MYSQL();
        $hora=self::hora_get_pc();
        $insert = "INSERT INTO `webtranfer` (`indtraferencia`, `url_tranferencia`, `nombre_paciente`, `indmedico`, `edad`, `fecha`, `hora`)
 VALUES (NULL, '$url', '$nombre', '$id', '$edad', '$fecha', '$hora');";
        $query = mysqli_query($mysqli, $insert);
        return true;
    }

    public static function eliminar_datos($eliminar,$mysqli)
    {
        $insert = "DELETE FROM `pedido` WHERE `pedido`.`ind` = '$eliminar'";
        $query = mysqli_query($mysqli, $insert);
        return true;
    }


}
