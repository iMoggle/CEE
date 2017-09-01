<?php
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>CEE</title>

<head>
    <script src="../assets/jquery/jquery-3.2.1.min.js"></script>
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
                                            <form>
                                                <div class="form-group">
                                                    <label for="op3_institucion">Ingresa el nombre o clave de la
                                                        institución</label>
                                                    <input type="text" class="form-control" id="op1_institucion"
                                                           name="op1_institucion"/>
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
                                            <form>
                                                <!-- Año -->
                                                <div class="form-group">
                                                    <label for="">Año</label>
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
                                                    <label for="op3_entidad">Entidad: </label>
                                                    <select class="form-control" name="op1_entidad" id="op1_entidad">
                                                        <option value="1"> Aguascalientes</option>
                                                        <option value="2"> Baja California</option>
                                                        <option value="3"> Baja California Sur</option>
                                                        <option value="4"> Campeche</option>
                                                        <option value="5"> Coahuila De Zaragoza</option>
                                                        <option value="6"> Colima</option>
                                                        <option value="7"> Chiapas</option>
                                                        <option value="8"> Chihuahua</option>
                                                        <option value="9"> Ciudad De México</option>
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
                                                    <label for="op3_control">Control: </label>
                                                    <select class="form-control" id="op1_control" name="op1_control">
                                                        <option value="0">Todos</option>
                                                        <option value="1">Publico</option>
                                                        <option value="2">Privado</option>
                                                    </select>
                                                </div>
                                                <!-- Niveles -->
                                                <div class="form-group">
                                                    <label for="op3_control">Nivel Educativo: </label>
                                                    <select class="form-control" id="op1_nivel" name="op1_nivel">
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
                                                <!--  -->
                                                <div class="checkbox">
                                                    <h5><b>Selecciona las variables que tendra esta consulta</b></h5>
                                                    <label><input type="checkbox" value="1">Matricula</label>
                                                    <label><input type="checkbox" value="2">Egresados</label>
                                                    <label><input type="checkbox" value="3">Titulados</label>
                                                </div>
                                                <button type="submit" class="btn btn-default">Buscar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive" id="divTableOp1">
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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>09MSU</td>
                                        <td>Instituto</td>
                                        <td>09PSU</td>
                                        <td>Escuela</td>
                                        <td>5123450001</td>
                                        <td>Licenciatura en Educacion</td>
                                        <td>Publico</td>
                                        <td>Federal</td>
                                        <td>5,000</td>
                                        <td>1000</td>
                                        <td>800</td>
                                    </tr>
                                    <tr>
                                        <td>09MSU</td>
                                        <td>Instituto</td>
                                        <td>09PSU</td>
                                        <td>Escuela</td>
                                        <td>5123450001</td>
                                        <td>Licenciatura en Educacion</td>
                                        <td>Publico</td>
                                        <td>Federal</td>
                                        <td>5,000</td>
                                        <td>1000</td>
                                        <td>800</td>
                                    </tr>
                                    <tr>
                                        <td>09MSU</td>
                                        <td>Instituto</td>
                                        <td>09PSU</td>
                                        <td>Escuela</td>
                                        <td>5123450001</td>
                                        <td>Licenciatura en Educacion</td>
                                        <td>Publico</td>
                                        <td>Federal</td>
                                        <td>5,000</td>
                                        <td>1000</td>
                                        <td>800</td>
                                    </tr>
                                    <tr>
                                        <td>09MSU</td>
                                        <td>Instituto</td>
                                        <td>09PSU</td>
                                        <td>Escuela</td>
                                        <td>5123450001</td>
                                        <td>Licenciatura en Educacion</td>
                                        <td>Publico</td>
                                        <td>Federal</td>
                                        <td>5,000</td>
                                        <td>1000</td>
                                        <td>800</td>
                                    </tr>
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
                            <form>
                                <!-- Nombre de la institucion -->
                                <div class="form-group">
                                    <label for="op1-nomins">Clave o Nombre de la institucion</label>
                                    <input type="text" class="form-control" name="op1-nomins" id="op1-nomins">
                                </div>
                                <!-- Rangos -->
                                <div class="form-group">
                                    <label for="op1-rango">Selecciona el radio en kilometros</label>
                                    <input class="form-control" type="text" name="op1-name" id="op1-name"/>
                                </div>
                                <!-- Control -->
                                <div class="form-group">
                                    <label for="op3_control">Control: </label>
                                    <select class="form-control" id="op3_control">
                                        <option value="0">Todos</option>
                                        <option value="1">Publico</option>
                                        <option value="2">Privado</option>
                                    </select>
                                </div>
                                <!-- Niveles -->
                                <div class="form-group">
                                    <label for="op3_control">Nivel Educativo: </label>
                                    <select class="form-control" id="op3_nivel" name="op3_nivel">
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
                                <!--Variables -->
                                <div class="checkbox">
                                    <h5><b>Selecciona las variables que tendra esta consulta</b></h5>
                                    <label><input type="checkbox" value="1">Matricula</label>
                                    <label><input type="checkbox" value="2">Egresados</label>
                                    <label><input type="checkbox" value="3">Titulados</label>
                                </div>
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
                                    <tbody>
                                    <tr>
                                        <td>09MSU</td>
                                        <td>Instituto</td>
                                        <td>09PSU</td>
                                        <td>Escuela</td>
                                        <td>5123450001</td>
                                        <td>Licenciatura en Educacion</td>
                                        <td>Publico</td>
                                        <td>Federal</td>
                                        <td>5,000</td>
                                        <td>1000</td>
                                        <td>800</td>
                                        <td>4.8</td>
                                        <td>19.303481</td>
                                        <td>-99.198329</td>
                                    </tr>
                                    <tr>
                                        <td>09MSU</td>
                                        <td>Instituto</td>
                                        <td>09PSU</td>
                                        <td>Escuela</td>
                                        <td>5123450001</td>
                                        <td>Licenciatura en Educacion</td>
                                        <td>Publico</td>
                                        <td>Federal</td>
                                        <td>5,000</td>
                                        <td>1000</td>
                                        <td>800</td>
                                        <td>4.8</td>
                                        <td>19.303481</td>
                                        <td>-99.198329</td>
                                    </tr>
                                    <tr>
                                        <td>09MSU</td>
                                        <td>Instituto</td>
                                        <td>09PSU</td>
                                        <td>Escuela</td>
                                        <td>5123450001</td>
                                        <td>Licenciatura en Educacion</td>
                                        <td>Publico</td>
                                        <td>Federal</td>
                                        <td>5,000</td>
                                        <td>1000</td>
                                        <td>800</td>
                                        <td>4.8</td>
                                        <td>19.303481</td>
                                        <td>-99.198329</td>
                                    </tr>
                                    <tr>
                                        <td>09MSU</td>
                                        <td>Instituto</td>
                                        <td>09PSU</td>
                                        <td>Escuela</td>
                                        <td>5123450001</td>
                                        <td>Licenciatura en Educacion</td>
                                        <td>Publico</td>
                                        <td>Federal</td>
                                        <td>5,000</td>
                                        <td>1000</td>
                                        <td>800</td>
                                        <td>4.8</td>
                                        <td>19.303481</td>
                                        <td>-99.198329</td>
                                    </tr>
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
                            <form>
                                <div class="form-group">
                                    <label for="op2_entidad">Entidad</label>
                                    <select class="form-control" name="op2_entidad" id="op2_entidad">
                                        <option value="1"> Aguascalientes</option>
                                        <option value="2"> Baja California</option>
                                        <option value="3"> Baja California Sur</option>
                                        <option value="4"> Campeche</option>
                                        <option value="5"> Coahuila De Zaragoza</option>
                                        <option value="6"> Colima</option>
                                        <option value="7"> Chiapas</option>
                                        <option value="8"> Chihuahua</option>
                                        <option value="9"> Ciudad De México</option>
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
                                    <label for="op2-rango">Rango de precios</label>
                                    <input name="op2-rango" id="op2-rango" type="text" class="form-control"/>
                                </div>
                                <!-- Niveles -->
                                <div class="form-group">
                                    <label for="op3_control">Nivel Educativo: </label>
                                    <select class="form-control" id="op3_nivel" name="op3_nivel">
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
                                <!--  -->
                                <div class="checkbox">
                                    <h5><b>Selecciona las variables que tendra esta consulta</b></h5>
                                    <label><input type="checkbox" value="1">Matricula</label>
                                    <label><input type="checkbox" value="2">Egresados</label>
                                    <label><input type="checkbox" value="3">Titulados</label>
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
</div>

<script>
    $(document).ready(function () {
    });
</script>
</body>
</html>