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
    $p_ciclo = isset($_POST["op1-ciclo"]) ? $_POST["op1-ciclo"] : '2016';
    $p_nombreClave = isset($_POST["op1-nomins"]) ? $_POST["op1-nomins"] : '';

    $p_entidad = isset($_POST["op1_entidad"]) ? $_POST["op1_entidad"] : '';
    $p_control = isset($_POST["op1_control"]) ? $_POST["op1_control"] : '';
    $p_nivel = isset($_POST["op1_nivel"]) ? $_POST["op1_nivel"] : '';
    $p_limite = isset($_POST["op1_limite"]) ? $_POST["op1_limite"] : '0';

    $db_param = "('$p_ciclo', '$p_nombreClave', '$p_entidad', '$p_control', '$p_nivel',$p_limite)";
    $db_query = "CALL web_listado_instituciones_met" . $db_param;
    $db_param_export = "('$p_ciclo', '$p_nombreClave', '$p_entidad', '$p_control', '$p_nivel',0)";

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
    } else {
        $fila = "<tr>";
        $fila .= "<td colspan='12'>No hay resultados a mostrar con los parámetros indicados</td>";
        $fila .= "</tr>";
    }
    $cadena .= "</tbody></table><div><input id='op2_param' type='hidden' value=\"" . $db_param_export . "\"/></div>";
    echo $cadena;
}