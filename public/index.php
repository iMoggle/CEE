<?php
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
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Escuelas de Media Superior y Superior por radio (km)</a>
                </h2>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="email">Nombre de la institucion</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary">Exportar a Excel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2">Escuelas de Media Superior y Superior por rango de
                        precios</a>
                </h2>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <label for="op2_entidad">Entidad</label>
                                    <select class="form-control" id="op2_entidad">
                                        <option value="0">Selecciona una entidad</option>
                                        <option value="1">Aguascalientes</option>
                                        <option value="2">Baja California</option>
                                        <option value="3">Baja California Sur</option>
                                        <option value="4">Ciudad de México</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ex1">Rango de precios</label>
                                    <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                                </div>
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary">Exportar a Excel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <a data-toggle="collapse" href="#collapse3">Matricula de Educacion Media Superior y Superior</a>
                </h2>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <label for="op2_entidad">Entidad: </label>
                                    <select class="form-control" id="op2_entidad">
                                        <option value="0">Selecciona una entidad</option>
                                        <option value="1">Aguascalientes</option>
                                        <option value="2">Baja California</option>
                                        <option value="3">Baja California Sur</option>
                                        <option value="4">Ciudad de México</option>
                                        <option value="33">Nacional</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="op3_control">Control: </label>
                                    <select class="form-control" id="op3_control">
                                        <option value="0">Todos</option>
                                        <option value="1">Publico</option>
                                        <option value="2">Privado</option>
                                    </select>
                                </div>
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
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                    <td>Publico</td>
                                    <td>Federal</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                    <td>Publico</td>
                                    <td>Estatal</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                    <td>Publico</td>
                                    <td>Autonomo</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                    <td>Privado</td>
                                    <td>Particular</td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary">Exportar a Excel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <form>
                                <div class="form-group">
                                    <label for="op2_entidad">Por Nivel Educativo: </label>
                                    <select class="form-control" id="op2_entidad">
                                        <option value="0">Selecciona un nivel</option>
                                        <option value="1">Formacion para el trabajo</option>
                                        <option value="2">Profesional Tecnico</option>
                                        <option value="3">Bachillerato Tecnologico</option>
                                        <option value="4">Licenciatura</option>
                                        <option value="33">Maestria</option>
                                        <option value="33">Doctorado</option>
                                        <option value="33">Todos</option>
                                    </select>
                                </div>
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
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                    <td>Publico</td>
                                    <td>Federal</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                    <td>Publico</td>
                                    <td>Estatal</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                    <td>Publico</td>
                                    <td>Autonomo</td>
                                </tr>
                                <tr>
                                    <td>09MSU</td>
                                    <td>09PSU</td>
                                    <td>5123450001</td>
                                    <td>5,000</td>
                                    <td>Privado</td>
                                    <td>Particular</td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary">Exportar a Excel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default">Solicitar</button>
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
    $(document).ready(function(){
        $('#ex1').slider({
            formatter: function(value) {
                return 'Current value: ' + value;
            }
        });
    });
</script>
</body>
</html>