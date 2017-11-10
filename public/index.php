<?php

require "../assets/config.php";
require __URL_EDUCAR__ . '/db/conexion.php';

?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>CEE</title>

<head>
    <script src="../assets/jquery/jquery-3.2.1.min.js"></script>
    <script src="../assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/bootstrap-slider/bootstrap-slider.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-slider/css/bootstrap-slider.min.css"/>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Estudiantes e Investigadores</h1>
        <p>Es esta seccion, podras seleccionar consultas compiladas desde nuestro dataset.</p>
        <p>Toda la informacion de esta seccion corresponde al levantamiento estadistico de inicio de cursos 2016</p>
    </div>

    <!--Informacion de matricula, egresados y titulados -->
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <a data-toggle="collapse" href="#collapse3">Informacion de Matricula, Egresados y Nuevo Ingreso de
                        Educacion Media Superior y Superior</a>
                </h2>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h2 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse3_1">Informacion por centro de
                                                trabajo</a>
                                        </h2>
                                    </div>
                                    <div id="collapse3_1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form id="op1_formClave" method="post"
                                                  action="<?= __URL_EDUCAR__ ?>/db/getListadoInstitucionesMET.php">
                                                <div class="form-group">
                                                    <label for="op1-nomins">Ingresa el nombre o clave de la
                                                        institución</label>
                                                    <input type="text" class="form-control" id="op1-nomins"
                                                           name="op1-nomins"/>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Buscar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive" id="op1_tbody">
                            </div>
                            <button style="display: none" id="op1_btnExcel" type="button" class="btn btn-primary">
                                Exportar a Excel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Informacion de Escuelas por radio km -->
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Infomación de Escuelas de Media Superior y Superior por
                        radio (km)</a>
                </h2>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form id="op2_formAvanzado" method="post"
                                  action="<?= __URL_EDUCAR__ ?>/db/getListadoInstitucionesKm.php">
                                <!-- Nombre de la institucion -->
                                <div class="form-group">
                                    <label for="op2-nomins">Clave o Nombre de la institucion</label>
                                    <input type="text" class="form-control" name="op2_nomins" id="op2_nomins">
                                </div>
                                <!-- Rangos -->
                                <div class="form-group">
                                    <label for="op2_radio">Selecciona el radio en kilometros</label>
                                    <input class="form-control" type="text" name="op2_radio" id="op2_radio"/>
                                </div>
                                <!-- Control -->
                                <div class="form-group">
                                    <label for="op2_control">Control: </label>
                                    <select readonly="readonly" class="form-control" id="op2_control"
                                            name="op2_control">
                                        <option selected value="0">Todos</option>
                                    </select>
                                </div>
                                <!-- Niveles -->
                                <div class="form-group">
                                    <label for="op2_nivel">Nivel Educativo: </label>
                                    <select readonly="readonly" class="form-control" id="op2_nivel" name="op2_nivel">
                                        <option selected value="5">Licenciatura</option>
                                    </select>
                                </div>
                                <input type="hidden" id="op2_limite" name="op2_limite" value="1">
                                <button type="submit" class="btn btn-default">Buscar</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive" id="op2_tbody">
                            </div>
                            <button style="display: none;" type="button" class="btn btn-primary" id="op2_btnExcel">
                                Exportar a Excel
                            </button>
                            <button style="display: none;" type="button" class="btn btn-primary" id="op2_btnKml">
                                Exportar en KML
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Informacion de Catalogo de Carreras -->
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <a data-toggle="collapse" href="#collapse4">Catalogo de Carreras</a>
                </h2>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form id="op4_formAvanzado" method="post" action="getListadoInstitucionesCarrera.php">
                                <div class="form-group">
                                    <label for="op4_entidad">Por Nivel Educativo: </label>
                                    <select class="form-control" id="op4_entidad">
                                        <option value="0">Selecciona un nivel</option>
                                        <option value="1,2,3,4,5,6,7">Todos</option>
                                        <option value="1">Formacion para el trabajo</option>
                                        <option value="2">Profesional Tecnico</option>
                                        <option value="3">Bachillerato Tecnologico</option>
                                        <option value="5">Licenciatura</option>
                                        <option value="6">Especialidad</option>
                                        <option value="7">Maestria</option>
                                        <option value="8">Doctorado</option>
                                    </select>
                                </div>
                                <input type="hidden" id="op4_limite" name="op4_limite" value="1">
                                <button type="submit" class="btn btn-default">Buscar</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td>Institucion</td>
                                    <td>Escuela</td>
                                    <td>Carrera</td>
                                    <td>Matricula</td>
                                    <td>Control</td>
                                    <td>Sostenimiento</td>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary">Exportar a Excel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Solicitudes de consulta -->
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <a data-toggle="collapse" href="#collapse5">Solicitudes de consultas</a>
                </h2>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group">
                                    <p>Si necesitas mas informacion, por favor llena el siguiente apartado</p>
                                    <textarea class="form-control">
                                    </textarea>
                                </div>
                                <button type="button" data-toggle="modal" data-target="#myModal"
                                        class="btn btn-default">Solicitar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¡Solicitud aceptada!</h4>
            </div>
            <div class="modal-body">
                <p>Te enviamos un correo con el folio de tu solicitud para futuras referencias.</p>
                <p>En breve nos comunicaremos contigo, para mandarte la cotización.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function () {
        $('#ex1').slider({
            formatter: function (value) {
                return 'Current value: ' + value;
            }
        });

        var options_op1Clave = {
            target: '#op1_tbody',
            success: function () {
                $("#op1_btnExcel").show();
            }
        };
        $('#op1_formClave').ajaxForm(options_op1Clave);
        $('#op1_btnExcel').click(function () {
            var param = $("#op1_param").val();
            $.redirect('<?=__URL_EDUCAR__?>/exports/getListadoInstitucionesMET_xls.php', {'params': param});
        });

        var options_op2Clave = {
            target: '#op2_tbody',
            success: function () {
                $("#op2_btnExcel").show();
                $("#op2_btnKml").show();
            }
        };
        $('#op2_formClave, #op2_formAvanzado').ajaxForm(options_op2Clave);
        $('#op2_btnExcel').click(function () {
            var param = $("#op2_param").val();
            $.redirect('<?=__URL_EDUCAR__?>/exports/getListadoInstitucionesKm_xls.php', {'params': param});
        });
        $('#op2_btnKml').click(function () {
            var param = $("#op2_param").val();
            $.redirect('<?=__URL_EDUCAR__?>/exports/getListadoInstitucionesKm_kml.php', {'params': param});
        });


    });
</script>
</body>
</html>