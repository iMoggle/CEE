<?php
/**
 * Created by PhpStorm.
 * User: MAEUSOGO
 * Date: 31/08/2017
 * Time: 11:58 PM
 */
require 'conexion.php';
if (count($_POST) > 0) {
    $p_ciclo = isset($_POST["op1-ciclo"]) ? $_POST["op1-ciclo"] : '2016';
    $p_nombreClave = isset($_POST["op1-nomins"]) ? $_POST["op1-nomins"] : '';

    $p_entidad = isset($_POST["op1_entidad"]) ? $_POST["op1_entidad"] : '';
    $p_control = isset($_POST["op1_control"]) ? $_POST["op1_control"] : '';
    $p_nivel = isset($_POST["op1_nivel"]) ? $_POST["op1_nivel"] : '';
    $p_limite = isset($_POST["op1_limite"]) ? $_POST["op1_limite"] : '0';

    $db_query = "CALL listado_instituciones_met_sup('$p_ciclo', '$p_nombreClave', $p_entidad, $p_control, $p_nivel, $p_limite)";
    $db_result = query($db_query);

    $cadena = '<table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td>Institucion</td>
                                        <td>Nombre Institucion</td>
                                        <td>Escuela</td>
                                        <td>Nombre Escuela</td>
                                        <td>Carrera</td>
                                        <td>Nombre de Carrera</td>
                                        <td>Control</td>
                                        <td>Sostenimiento</td>
                                        <td>Matricula</td>
                                        <td>Egresados</td>
                                        <td>Titulados</td>
                                    </tr>
                                    </thead>
                                    <tbody>';

    if (num($db_query) > 0) {
        for ($indice = 0; $indice < num($db_query); $indice++) {
            $row = arreglo($db_result);
            $fila = "<tr>";
            $fila .= "<td>" . $row["CV_INSTITUCION"] . "</td><td>" . $row["NM_INSTITUCION"] . "</td><td>" . $row["CV_ESCUELA"] . "</td>";
            $fila .= "<td>" . $row["NM_ESC_SEP"] . "</td><td>" . $row["CV_CARRERA"] . "</td><td>" . $row["NM_CARRERA"] . "</td>";
            $fila .= "<td>" . $row["CONTROL"] . "</td><td>" . $row["SUBCONTROL"] . "</td><td>" . $row["SOSTENIMIENTO"] . "</td>";
            $fila .= "<td>" . $row["MATRICULA"] . "</td><td>" . $row["EGRESADOS"] . "</td><td>" . $row["TITULADOS"] . "</td>";
            $fila .= "</tr>";
            $cadena .= $fila;
        }
    }
    $cadena = "</tbody></table>";
    echo $cadena;
}