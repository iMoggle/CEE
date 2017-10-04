<?php
/**
 * Created by PhpStorm.
 * User: Francisco Javier Montiel Morán
 * Correo: francisco.montiel@enlace.edu.mx
 * Date: 11/09/2017
 * Time: 04:31 PM
 */
require '../db/conexion.php';

// Selects all the rows in the markers table.
$query = 'SELECT * FROM markers WHERE 1';
$result = mysql_query($query);

if (!$result)
{
    die('Invalid query: ' . mysql_error());
}

// Creates the Document.
$dom = new DOMDocument('1.0', 'UTF-8');

// Creates the root KML element and appends it to the root document.
$node = $dom->createElementNS('http://www.opengis.net/kml/2.2', 'kml');
$parNode = $dom->appendChild($node);

// Creates the two Style elements, one for restaurant and one for bar, and append the elements to the Document element.

// Iterates through the MySQL results, creating one Placemark for each row.
while ($row = @mysql_fetch_assoc($result))
{
    // Creates a Placemark and append it to the Document.

    $node = $dom->createElement('Placemark');
    $placeNode = $docNode->appendChild($node);

    // Creates an id attribute and assign it the value of id column.
    $placeNode->setAttribute('id', 'placemark' . $row['id']);

    // Create name, and description elements and assigns them the values of the name and address columns from the results.
    $nameNode = $dom->createElement('name',htmlentities($row['name']));
    $placeNode->appendChild($nameNode);
    $descNode = $dom->createElement('description', $row['address']);
    $placeNode->appendChild($descNode);
    $styleUrl = $dom->createElement('styleUrl', '#' . $row['type'] . 'Style');
    $placeNode->appendChild($styleUrl);

    // Creates a Point element.
    $pointNode = $dom->createElement('Point');
    $placeNode->appendChild($pointNode);

    // Creates a coordinates element and gives it the value of the lng and lat columns from the results.
    $coorStr = $row['lng'] . ','  . $row['lat'];
    $coorNode = $dom->createElement('coordinates', $coorStr);
    $pointNode->appendChild($coorNode);
}

$kmlOutput = $dom->saveXML();
header('Content-type: application/vnd.google-earth.kml+xml');
echo $kmlOutput;
?>