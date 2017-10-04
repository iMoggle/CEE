<?php
/**
 * Created by PhpStorm.
 * User: Francisco Javier Montiel Morán
 * Correo: francisco.montiel@enlace.edu.mx
 * Date: 04/10/2017
 * Time: 04:18 PM
 */
require 'conexion.php';

if (count($_POST) > 0) {

    $p_ciclo = isset($_POST["op2-ciclo"]) ? $_POST["op2-ciclo"] : '2016';
    $p_nombreClave = isset($_POST["op2-nomins"]) ? $_POST["op2-nomins"] : '';

    $p_radio = isset($_POST["op2_radio"]) ? $_POST["op2_radio"] : '';
    $p_control = isset($_POST["op2_control"]) ? $_POST["op2_control"] : '';
    $p_nivel = isset($_POST["op2_nivel"]) ? $_POST["op2_nivel"] : '';
    $p_limite = isset($_POST["op2_limite"]) ? $_POST["op2_limite"] : '0';

    $db_param = "('$p_nombreClave', '$p_control', '$p_nivel', '$p_ciclo', '$p_radio','0')";
    $db_query = "CALL web_listado_instituciones_km" . $db_param;
    $db_result = query($db_query);

    $cadena = '<table class="table table-bordered table-striped" style="font-size: 10px;">
                                    <thead style="font-weight: bold;">
                                    <tr>
                                        <td>Institucion</td>
                                        <td>Nombre Institucion</td>
                                        <td>Escuela</td>
                                        <td>Nombre Escuela</td>
                                        <td>Carrera</td>
                                        <td>Nombre de Carrera</td>
                                        <td>Control</td>
                                        <td>Subcontrol</td>
                                        <td>Sostenimiento</td>
                                        <td>Matricula</td>
                                        <td>Egresados</td>
                                        <td>Nuevo Ingreso</td>
                                        <td>Distancia</td> 
                                        <td>Latitud</td>
                                        <td>Longitud</td>
                                    </tr>
                                    </thead>
                                    <tbody>';

    if (num($db_result) > 0) {
        for ($indice = 0; $indice < num($db_result); $indice++) {
            $row = arreglo($db_result);
            $fila = "<tr>";
            $fila .= "<td>" . $row["CV_INSTITUCION"] . "</td><td>" . $row["NM_INSTITUCION"] . "</td><td>" . $row["CV_ESCUELA"] . "</td>";
            $fila .= "<td>" . $row["NM_ESC_SEP"] . "</td><td>" . $row["CV_CARRERA"] . "</td><td>" . $row["NM_CARRERA"] . "</td>";
            $fila .= "<td>" . $row["CONTROL"] . "</td><td>" . $row["SUBCONTROL"] . "</td><td>" . $row["SOSTENIMIENTO"] . "</td>";
            $fila .= "<td>" . $row["MATRICULA"] . "</td><td>" . $row["EGRESADOS"] . "</td><td>" . $row["NVOINGRESO"] . "</td>";
            $fila .= "</tr>";
            $cadena .= $fila;
        }
    }
    $cadena .= "</tbody></table><div><input id='op2_param' type='hidden' value=\"" . $db_param . "\"/></div>";
    echo $cadena;
}