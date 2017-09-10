<?php
/**
 * Created by PhpStorm.
 * User: MAEUSOGO
 * Date: 01/09/2017
 * Time: 02:25 AM
 */

include '../db/conexion.php';

function getData()
{
    $nombre_archivo = "Matricula_demo";

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $nombre_archivo . '".xls"');
    header('Cache-Control: max-age=0');

    $params = $_POST["params"];
    $db_query = 'call listado_instituciones_met_sup' . $params . ';';

    echo $db_query;

    $db_result = query($db_query);

    $cadena = '<table class="table table-bordered table-striped">
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
    }
    return $cadena .= "</tbody></table>";
}

?>
<html>
<head>
</head>
<body>
<div class="container">
    <?php echo getData(); ?>
</div>
</body>
</html>