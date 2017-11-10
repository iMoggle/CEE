<?php

class Conexion
{
    var $conexion;
    var $db;

    function Conexion($database)
    {
        $this->db = $database;
        $this->conecta();
    }

    function conecta()
    {
        $server = 'localhost';
        $port = '3306';
        switch ($this->db) {
            case "base_cee":
                $user = "root";
                $pass = "pruebasql";
                break;
            case "web_cee":
                $user = "root";
                $pass = "pruebasql";
                break;
        }

        $con = mysqli_connect($server, $user, $pass, $this->db);

        if (mysqli_connect_errno()) {
            echo "Error de base de datos. <br>Intente m&aacute;s tarde o consulte al administrador." . mysqli_connect_error();
        } else {
            $this->conexion = $con;
        }
    }

    function cierra()
    {
        if (isset($this->conexion))
            mysqli_close($this->conexion);
    }

    function inserta($tabla, $cols, $values)
    {
        $ins = "insert into $tabla ($cols) values ($values);";
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        $res = mysqli_query($this->conexion, $ins);
        return $ins;
    }

    function select($campos, $tabla, $cond)
    {
        $sel = 'select ' . $campos . ' from ' . $tabla . ' where ' . $cond . '';
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        $res = mysqli_query($this->conexion, $sel);
        return $res;
    }

    function update($tabla, $valor, $cond)
    {
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        $upd = "update $tabla set $valor where $cond;";
        // $res=  pg_query($upd);
        $res = mysqli_query($this->conexion, $upd);
        return $res;
    }

    function delete($tabla, $cond)
    {
        $del = "delete from $tabla where $cond;";
        $res = mysqli_query($this->conexion, $del);
        return $res;
    }

    function num($query)
    {
        $res = mysqli_num_rows($query);
        return $res;
    }

    function arreglo($query)
    {
        $res = mysqli_fetch_array($query, MYSQLI_BOTH);
        return $res;
    }

    function escape_cara($query)
    {
        $res = mysqli_real_escape_string($this->conexion, $query);
        return $res;
    }

    function error_base()
    {
        $res = mysqli_error();
        return $res;
    }

    function row($query)
    {
        $res = mysqli_fetch_row($query);
        return $res;
    }

    function query($query)
    {
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        $res = mysqli_query($this->conexion, $query);
        return $res;
    }
}

?>