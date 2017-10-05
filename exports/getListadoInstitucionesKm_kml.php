<?php
/**
 * Created by PhpStorm.
 * User: Francisco Javier Montiel Morán
 * Correo: francisco.montiel@enlace.edu.mx
 * Date: 11/09/2017
 * Time: 04:31 PM
 */
require '../db/conexion.php';

function getData()
{
    $nombre_archivo = "ListadoInstitucionRadio_" . date("Y-m-d_h:i");

    header('Content-type: application/vnd.google-earth.kml+xml');
    header('Content-Disposition: attachment;filename="' . $nombre_archivo . '".kml"');
    header('Cache-Control: max-age=0');

    $params = $_POST["params"];
    $db_query = 'call web_listado_instituciones_km' . $params . ';';

    // Creates the Document.
    $dom = new DOMDocument('1.0', 'UTF-8');

// Creates the root KML element and appends it to the root document.
    $node = $dom->createElementNS('http://earth.google.com/kml/2.2', 'kml');
    $parNode = $dom->appendChild($node);

// Creates a KML Document element and append it to the KML element.
    $dnode = $dom->createElement('Document');
    $docNode = $parNode->appendChild($dnode);

// Iterates through the MySQL results, creating one Placemark for each row.
    $db_result = query($db_query);
    if (num($db_result) > 0) {
        for ($indice = 0; $indice < num($db_result); $indice++) {
            $row = arreglo($db_result);

            // Creates a Placemark and append it to the Document.

            $node = $dom->createElement('Placemark');
            $placeNode = $docNode->appendChild($node);

            // Create name, and description elements and assigns them the values of the name and address columns from the results.
            $claveNode = $dom->createElement('clave', htmlentities($row['CV_ESCUELA']));
            $placeNode->appendChild($claveNode);
            $nombreNode = $dom->createElement('nombre', htmlentities($row['NM_ESC_SEP']));
            $placeNode->appendChild($nombreNode);
            $descNode = $dom->createElement('descripcion', $row['NM_ESC_SEP']);
            $placeNode->appendChild($descNode);

            // Creates a Point element.
            $pointNode = $dom->createElement('Point');
            $placeNode->appendChild($pointNode);

            // Creates a coordinates element and gives it the value of the lng and lat columns from the results.
            $coorStr = $row['LONG_CEE'] . ',' . $row['LAT_CEE'];
            $coorNode = $dom->createElement('coordinates', $coorStr);
            $pointNode->appendChild($coorNode);

        }
    }
    $kmlOutput = $dom->saveXML();
    return $kmlOutput;
}

echo getData(); ?>