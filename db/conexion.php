<?php

function conecta($tipo)
{
    $server = 'localhost';
    $port = '3306';
    $db = "CEE";
    $user = "root";
    $pass = "pruebasql";
    mysql_connect($server, $user, $pass) or die(mysql_error());
    mysql_select_db($db) or die(mysql_error());
}

function cierra()
{
    mysql_close();
}

function inserta($tabla, $cols, $values)
{
    conecta(3);
    $ins = "insert into $tabla ($cols) values ($values);";
    mysql_query("SET NAMES 'utf8'");
    $res = mysql_query($ins);
    return $ins;
}

function select($campos, $tabla, $cond)
{
    conecta(3);
    $sel = 'select ' . $campos . ' from ' . $tabla . ' where ' . $cond . '';
    mysql_query("SET NAMES 'utf8'");
    $res = mysql_query($sel);
    return $res;
}

function update($tabla, $valor, $cond)
{
    conecta(3);
    mysql_query("SET NAMES 'utf8'");
    $upd = "update $tabla set $valor where $cond;";
    $res = mysql_query($upd);
    return $res;
}

function delete($tabla, $cond)
{
    $del = "delete from $tabla where $cond;";
    $res = mysql_query($del);
    return $res;
}

function num($query)
{
    $res = mysql_num_rows($query);
    return $res;
}

function arreglo($query)
{
    $res = mysql_fetch_array($query);
    return $res;
}

function escape_cara($query)
{
    conecta(3);
    $res = mysql_real_escape_string($query);
    return $res;
}

function error_base()
{
    $res = mysql_error();
    return $res;
}

function row($query)
{
    $res = mysql_fetch_row($query);
    return $res;
}

function query($query)
{
    conecta(3);
    mysql_query("SET NAMES 'utf8'");
    $res = mysql_query($query);
    return $res;
}