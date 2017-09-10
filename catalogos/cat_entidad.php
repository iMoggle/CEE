<?php
/**
 * Created by PhpStorm.
 * User: Francisco Javier Montiel Morán
 * Correo: francisco.montiel@enlace.edu.mx
 * Date: 10/09/2017
 * Time: 10:14 AM
 */

$db_query = select('distinct entidad.CV_ENT as CV_ENTIDAD, entidad.NM_ENTIDAD AS N_ENTIDAD', 'cat_geografico as entidad', '1');

for ($x = 0; $x < num($db_query); $x++) {
    $db_result = arreglo($db_query);
    echo '<option value="'.$db_result["CV_ENTIDAD"].'">'.$db_result["N_ENTIDAD"].'</option>';
}