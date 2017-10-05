<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>CEE</title>
<head>
    <head>
        <script src="../assets/jquery/jquery-3.2.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css"/>
    </head>
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <?php
        /**
         * Created by PhpStorm.
         * User: Francisco Javier Montiel Morán
         * Correo: francisco.montiel@enlace.edu.mx
         * Date: 04/08/2017
         * Time: 02:40 PM
         */

        if (count($_POST) > 0)
        {
            include '../db/conexion.php';

            //$db_query = query(call auten)

            if ($_POST["username"] == "admin") {
                header("Location: ../clients/index.php");
            } else {
                ?>
                <div class="alert alert-danger">
                    <p>El usuario y contraseña no es correcto, intente de nuevo.</p>
                </div>
                <?php
                sleep(5);
                header("Location: ../login.php");
            }
        }
        else {
            ?>
            <div class="alert alert-danger">
                <p>El usuario y contraseña no es correcto, intente de nuevo.</p>
            </div>
            <?php
            sleep(5);
            header("Location: ../login.php");
        }
        ?>
    </div>
</div>
</body>
<?php
?>
</html>