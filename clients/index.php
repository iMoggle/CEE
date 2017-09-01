<?php
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>CEE</title>

<head>
    <script src="../assets/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"
            integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i"
            crossorigin="anonymous"></script>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/slider/js/bootstrap-slider.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-slider/css/bootstrap-slider.min.css"/>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>[Nombre del Cliente]</h1>
        <p>Es esta seccion, podras seleccionar consultas compiladas desde nuestro dataset.</p>
    </div>
    <!--Informacion de matricula, egresados y titulados-->
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <a data-toggle="collapse" href="#collapse3">Informacion de Matricula, Egresados y Titulados de
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
                                                  action="../db/getListadoInstitucionesMET.php">
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

                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h2 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse3_2">Busqueda Avanzada</a>
                                        </h2>
                                    </div>
                                    <div id="collapse3_2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form id="op1_formAvanzado" method="post"
                                                  action="../db/getListadoInstitucionesMET.php">
                                                <div class="form-group">
                                                    <label for="op1_ciclo">Año</label>
                                                    <select class="form-control" name="op1_ciclo" id="op1_ciclo">
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                    </select>
                                                </div>
                                                <!-- Entidad -->
                                                <div class="form-group">
                                                    <label for="op1_entidad">Entidad: </label>
                                                    <select class="form-control" name="op1_entidad" id="op1_entidad">
                                                        <option value="0">Selecciona una opción</option>
                                                        <option value="01"> Aguascalientes</option>
                                                        <option value="02"> Baja California</option>
                                                        <option value="03"> Baja California Sur</option>
                                                        <option value="04"> Campeche</option>
                                                        <option value="05"> Coahuila De Zaragoza</option>
                                                        <option value="06"> Colima</option>
                                                        <option value="07"> Chiapas</option>
                                                        <option value="08"> Chihuahua</option>
                                                        <option value="09"> Ciudad De México</option>
                                                        <option value="10"> Durango</option>
                                                        <option value="11"> Guanajuato</option>
                                                        <option value="12"> Guerrero</option>
                                                        <option value="13"> Hidalgo</option>
                                                        <option value="14"> Jalisco</option>
                                                        <option value="15"> México</option>
                                                        <option value="16"> Michoacán De Ocampo</option>
                                                        <option value="17"> Morelos</option>
                                                        <option value="18"> Nayarit</option>
                                                        <option value="19"> Nuevo León</option>
                                                        <option value="20"> Oaxaca</option>
                                                        <option value="21"> Puebla</option>
                                                        <option value="22"> Querétaro</option>
                                                        <option value="23"> Quintana Roo</option>
                                                        <option value="24"> San Luis Potosí</option>
                                                        <option value="25"> Sinaloa</option>
                                                        <option value="26"> Sonora</option>
                                                        <option value="27"> Tabasco</option>
                                                        <option value="28"> Tamaulipas</option>
                                                        <option value="29"> Tlaxcala</option>
                                                        <option value="30"> Veracruz De Ignacio De La Llave</option>
                                                        <option value="31"> Yucatán</option>
                                                        <option value="32"> Zacatecas</option>
                                                        <option value="33">Nacional</option>
                                                    </select>
                                                </div>
                                                <!-- Control -->
                                                <div class="form-group">
                                                    <label for="op1_control">Control: </label>
                                                    <select class="form-control" id="op1_control" name="op1_control">
                                                        <option value="0">Todos</option>
                                                        <option value="PUBLICO">Publico</option>
                                                        <option value="PRIVADO">Privado</option>
                                                    </select>
                                                </div>
                                                <!-- Niveles -->
                                                <div class="form-group">
                                                    <label for="op1_control">Nivel Educativo: </label>
                                                    <select class="form-control" id="op1_nivel" name="op1_nivel">
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
                                                <!--  -->
                                                <div class="checkbox">
                                                    <h5><b>Selecciona las variables que tendra esta consulta</b></h5>
                                                    <label><input type="checkbox" id="op1_matricula"
                                                                  name="op1_matricula" value="1">Matricula</label>
                                                    <label><input type="checkbox" id="op1_egresado" name="op1_egresado"
                                                                  value="2">Egresados</label>
                                                    <label><input type="checkbox" id="op1_titulado" name="op1_titulado"
                                                                  value="3">Titulados</label>
                                                </div>
                                                <input type="hidden" id="op1_limite" name="op1_limite" value="1">
                                                <button type="submit" class="btn btn-default">Buscar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" style="font-size: small">
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
                                        <td>Titulados</td>
                                    </tr>
                                    </thead>
                                    <tbody id="op1_tbody">
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-primary">Exportar a Excel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Informacion de Escuelas por radio km-->
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
                            <form id="op2_formAvanzado" method="post" action="getListadoInstitucionesKm.php">
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
                                    <select class="form-control" id="op2_control" name="op2_control">
                                        <option value="0">Todos</option>
                                        <option value="PUBLICO">Publico</option>
                                        <option value="PRIVADO">Privado</option>
                                    </select>
                                </div>
                                <!-- Niveles -->
                                <div class="form-group">
                                    <label for="op2_nivel">Nivel Educativo: </label>
                                    <select class="form-control" id="op2_nivel" name="op2_nivel">
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
                                <!--Variables -->
                                <div class="checkbox">
                                    <h5><b>Selecciona las variables que tendra esta consulta</b></h5>
                                    <label><input type="checkbox" id="op2_matricula"
                                                  name="op2_matricula" value="1">Matricula</label>
                                    <label><input type="checkbox" id="op2_egresado" name="op2_egresado"
                                                  value="2">Egresados</label>
                                    <label><input type="checkbox" id="op2_titulado" name="op2_titulado"
                                                  value="3">Titulados</label>
                                </div>
                                <input type="hidden" id="op2_limite" name="op2_limite" value="1">
                                <button type="submit" class="btn btn-default">Buscar</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-bordered">
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
                                        <td>Distancia</td>
                                        <td>Latitud</td>
                                        <td>Longitud</td>
                                    </tr>
                                    </thead>
                                    <tbody id="op2_tbody">
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-primary">Exportar a Excel</button>
                            <button type="button" class="btn btn-primary">Exportar en KML</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Informacion de Escuelas por rango de precios-->
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
                            <form id="op3_formAvanzado" method="post" action="getListadoInstitucionesPrecio.php">
                                <div class="form-group">
                                    <label for="op3_entidad">Entidad</label>
                                    <select class="form-control" name="op3_entidad" id="op3_entidad">
                                        <option value="01"> Aguascalientes</option>
                                        <option value="02"> Baja California</option>
                                        <option value="03"> Baja California Sur</option>
                                        <option value="04"> Campeche</option>
                                        <option value="05"> Coahuila De Zaragoza</option>
                                        <option value="06"> Colima</option>
                                        <option value="07"> Chiapas</option>
                                        <option value="08"> Chihuahua</option>
                                        <option value="09"> Ciudad De México</option>
                                        <option value="10"> Durango</option>
                                        <option value="11"> Guanajuato</option>
                                        <option value="12"> Guerrero</option>
                                        <option value="13"> Hidalgo</option>
                                        <option value="14"> Jalisco</option>
                                        <option value="15"> México</option>
                                        <option value="16"> Michoacán De Ocampo</option>
                                        <option value="17"> Morelos</option>
                                        <option value="18"> Nayarit</option>
                                        <option value="19"> Nuevo León</option>
                                        <option value="20"> Oaxaca</option>
                                        <option value="21"> Puebla</option>
                                        <option value="22"> Querétaro</option>
                                        <option value="23"> Quintana Roo</option>
                                        <option value="24"> San Luis Potosí</option>
                                        <option value="25"> Sinaloa</option>
                                        <option value="26"> Sonora</option>
                                        <option value="27"> Tabasco</option>
                                        <option value="28"> Tamaulipas</option>
                                        <option value="29"> Tlaxcala</option>
                                        <option value="30"> Veracruz De Ignacio De La Llave</option>
                                        <option value="31"> Yucatán</option>
                                        <option value="32"> Zacatecas</option>
                                        <option value="33">Nacional</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="op3_precio">Rango de precios</label>
                                    <input name="op3_precio" id="op3_precio" type="text" class="form-control"/>
                                </div>
                                <!-- Niveles -->
                                <div class="form-group">
                                    <label for="op3_control">Nivel Educativo: </label>
                                    <select class="form-control" id="op3_control" name="op3_control">
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
                                <!--  -->
                                <div class="checkbox">
                                    <h5><b>Selecciona las variables que tendra esta consulta</b></h5>
                                    <label><input type="checkbox" id="op3_matricula"
                                                  name="op3_matricula" value="1">Matricula</label>
                                    <label><input type="checkbox" id="op3_egresado" name="op3_egresado"
                                                  value="2">Egresados</label>
                                    <label><input type="checkbox" id="op3_titulado" name="op3_titulado"
                                                  value="3">Titulados</label>
                                </div>
                                <input type="hidden" id="op3_limite" name="op3_limite" value="1">
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
                                <tbody id="op3_tbody">
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
</div>

<script>
    $(document).ready(function () {
        var options_op1Clave = {
            target: '#op1_tbody',
        };
        $('#op1_formClave, #op1_formAvanzado').ajaxForm(options_op1Clave);
    });
</script>
</body>
</html>