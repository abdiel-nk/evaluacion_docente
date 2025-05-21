<?php
require 'bd_inter/conexion.php';
$programas = $mysqli->query("SELECT id, programa FROM t_programa");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta docente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="navbar navbar-dark shadow-sm" style="background-color: #222b45; font-size: 0.92857rem;">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="https://raw.githubusercontent.com/abdiel-nk/Public-SVG/refs/heads/main/img_upeu_posgrado_white_bc.png" width="220" ></img>
                    <strong></strong>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>          
                </button>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row text-center">
            <div class="card col-sm-12 m-0 p-0 separadorwilly">
                <div class="card-header">
                    <h3 class="h1willy">Formulario de evaluación Docente: UPG Ciencias de la Salud</h3>
                    <center><h3 class="my-0 font-weight-normal h1willy">Sede - Lima</h3></center>
                </div>
                <div class="card-body">
                    <p class="m-3 text-left">
                        El candidato a estudiar un programa de la UPG Ciencias de la Salud Maestría de Nutrición Humana con mención en Alimentación basada en Plantas, es el licenciado que muestra el interés en su perfeccionamiento profesional en el área de Nutrición Humana.  
                    </p>

                    <form method="post" class="needs-validation"  action="guardar_entrevista_nutricion_2025_1.php" enctype="multipart/form-data" novalidate>
                        <!-- DNI del alumno  -->
                        <div class="m-3 row text-left"><b> Datos del alumno</b></div>
                        <div class = "form-group row col-sm-12 col-md-12">
                            <label class="col-sm-2 col-form-label text-left">Ingrese su número de DNI</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="validationCustom00" minlength="5" name="Entrevistador" required value="">
                                <div class="valid-feedback">
                                    Correcto
                                </div>
                                <div class="invalid-feedback">Ingrese sus datos</div>
                            </div>
                        </div>
                        <!-- Sección del Programa / Ciclo / Curso / Docente -->
                        <div class="m-3 row text-left" ><b>I. Datos del programa</b></div>  
                        <!-- Datos del Programa  -->            
                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-2 col-form-label text-left" for="validationCustom00">Programa:</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="programa" id="programa" required>                                  
                                        <option value="">Seleccionar</option>
                                            <?php while ($row = $programas->fetch_assoc()) { ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['programa']; ?></option>
                                            <?php } ?>
                                </select>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Ingrese el nombre correcto.
                                </div>
                            </div>
                        </div>
                        <!-- Datos del Ciclo -->
                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-2 col-form-label text-left" for="validationCustom01">Ciclo:</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="ciclo" id="ciclo" required>                                  
                                        <option value="">Seleccionar</option>
                                </select>
                            </div>
                        </div>

                        <!-- Datos del Curso -->
                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-2 col-form-label text-left" for="validationCustom02">Curso:</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="curso" id="validationCustom02" required>                                  
                                    <option value="">Seleccionar</option>
                                </select>
                                <!-- <input type="text" class="form-control" id="validationCustom02" minlength="2" name="Apellidos" required> -->
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Ingrese el apellido correcto.
                                </div>
                            </div>
                        </div>
                        <!-- Datos del Docente -->
                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-2 col-form-label text-left" for="validationCustom02">Docente:</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="docente" id="validationCustom02" required>                                  
                                    <option value="">Seleccionar</option>
                                </select>
                                <!-- <input type="text" class="form-control" id="validationCustom02" minlength="2" name="dni" required> -->
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Datos incorrectos.
                                </div>
                            </div>
                        </div>
                        


                        <div class="m-3 row text-left"><b>II. Guía de entrevista de admisión</b></div>
                        <p class="m-3 text-left">
                            Marque el casillero que considere conveniente teniendo en cuenta la siguiente valoración: <br>
                            0 &rarr; Responde de una manera muy difusa o no responde<br>
                            1 &rarr; Responde pero no hay mucha seguridad o claridad<br>
                            2 &rarr; Responde con mucha claridad.  
                        </p>
                        <br>
                        <div class="m-3 row text-left"><b>Motivación para el estudio, conocimientos básicos e interés por desarrollar habilidades.</b></div>

                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio1">
                                ¿Qué le motiva a estudiar la esta maestría?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="0" required>
                                    <label class="form-check-label" for="inlineRadio1">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="1" required>
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="2" required>
                                    <label class="form-check-label" for="inlineRadio1">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio2">
                                ¿Qué herramientas y aplicaciones de nutrición conoce?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="0" required>
                                    <label class="form-check-label" for="inlineRadio2">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="1" required>
                                    <label class="form-check-label" for="inlineRadio2">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="2" required>
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio3">
                                ¿Qué habilidad espera desarrollar, al formarse como Maestro en nutrición Humana?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="0" required>
                                    <label class="form-check-label" for="inlineRadio3">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="1" required>
                                    <label class="form-check-label" for="inlineRadio3">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="2" required>
                                    <label class="form-check-label" for="inlineRadio3">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>

                        <div class="m-3 row text-left"><b>Interés por la investigación</b></div>

                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio4">
                                ¿Ha realizado algún trabajo de investigación?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="0" required>
                                    <label class="form-check-label" for="inlineRadio4">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="1" required>
                                    <label class="form-check-label" for="inlineRadio4">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="2" required>
                                    <label class="form-check-label" for="inlineRadio4">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio5">
                                ¿Qué buscadores de información en la web utiliza?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="0" required>
                                    <label class="form-check-label" for="inlineRadio5">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="1" required>
                                    <label class="form-check-label" for="inlineRadio5">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="2" required>
                                    <label class="form-check-label" for="inlineRadio5">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>

                        <div class="m-3 row text-left"><b>Habilidades sociales y de comunicación aceptables</b></div>
                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio6">
                                ¿Qué estrategias conoce para solucionar un problema?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="0" required>
                                    <label class="form-check-label" for="inlineRadio6">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="1" required>
                                    <label class="form-check-label" for="inlineRadio6">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="2" required>
                                    <label class="form-check-label" for="inlineRadio6">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio7">
                                ¿Cuáles son los elementos claves para una buena comunicación?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="0" required>
                                    <label class="form-check-label" for="inlineRadio7">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="1" required>
                                    <label class="form-check-label" for="inlineRadio7">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="2" required>
                                    <label class="form-check-label" for="inlineRadio7">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>

                        <div class="m-3 row text-left"><b>Práctica de valores cristianos, vocación de servicio y empatía</b></div>
                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio8">
                                ¿Qué significa para usted "Práctica de valores cristianos"? ¿Cómo lo aplica? ¿Qué valores lo identifican?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="0" required>
                                    <label class="form-check-label" for="inlineRadio8">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="1" required>
                                    <label class="form-check-label" for="inlineRadio8">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="2" required>
                                    <label class="form-check-label" for="inlineRadio8">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>
                        <div class="m-3 row text-left"><b>Salud física y mental</b></div>
                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio9">
                                ¿Qué actividades realiza para conservar su salud física?¿Controla el estado de su salud cada año?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="0" required>
                                    <label class="form-check-label" for="inlineRadio9">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="1" required>
                                    <label class="form-check-label" for="inlineRadio9">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="2" required>
                                    <label class="form-check-label" for="inlineRadio9">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio10">
                                ¿Qué estrategias aplica para regular el estrés?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P10" id="inlineRadio10" value="0" required>
                                    <label class="form-check-label" for="inlineRadio10">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P10" id="inlineRadio10" value="1" required>
                                    <label class="form-check-label" for="inlineRadio10">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P10" id="inlineRadio10" value="2" required>
                                    <label class="form-check-label" for="inlineRadio10">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>
                        
                        <div class="m-3 row text-left"><b>III. Observaciones</b></div>
                        <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-10 col-form-label text-left" for="validationCustom03">Escriba las observaciones que tenga:</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="3" name="P11" id="validationCustom03" required></textarea>
                                <div class="valid-feedback">
                                    Muchas gracias por ingresar una respuesta!
                                </div>
                                <div class="invalid-feedback">
                                    Debe escribir una respuesta válida.
                                </div>
                            </div>
                        </div>







                        <strong><i>Puntaje Global: </i><strong><input id="scor" type="text" name="suma"  / >        

                <div class="card-footer bg-transparent ">
                    <div class="input-group row">
                        <button class="btn btn-primary boton" type="submit">Guardar entrevista</button>
                    </div>
                </div>


                </form>
            </div>
        </div>
    </div>


    <script src="js/peticiones.js"></script>


</body>
</html>