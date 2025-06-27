<?php
require 'bd_inter/conexion.php';
$programas = $mysqli->query("SELECT id, programa FROM t_programa");

// $ciclo = $mysqli->query("SELECT id, ciclo  FROM t_ciclo");
// $curso = $mysqli->query("SELECT id, curso FROM t_curso");
// $docente = $mysqli->query("SELECT id, docente FROM t_docente");
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
                </div>
                <div class="card-body">
                    <form method="post" class="needs-validation"  action="save_ev_doc.php" enctype="multipart/form-data" novalidate>
                        <!-- DNI del alumno  -->
                        <div class="m-3 row text-left"><b> Datos del alumno</b></div>
                        <div class = "form-group row col-sm-12 col-md-12">
                            <label class="col-sm-2 col-form-label text-left">Ingrese DNI</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="validationCustom00" value="" name="dni" required  maxlength="8" >
                                <div class="valid-feedback">
                                    Correcto
                                </div>
                                <div class="invalid-feedback">Ingrese sus datos</div>
                            </div>
                        </div>
                        <!-- Sección del Programa / Ciclo / Curso / Docente -->
                        <div class="m-3 row text-left" ><b> Datos del programa</b></div>  
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
                            </div>
                        </div>
                        <!-- Datos del Ciclo -->
                        <div class="form-group row col-sm-12 col-md-12">  
                            <!-- <label class="col-sm-2 col-form-label text-left" for="validationCustom01">Ciclo:</label> -->
                            <label class="col-sm-2 col-form-label text-left" for="validationCustom00">Ciclo:</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="ciclo" id="ciclo" required>                                  
                                    <option value="">Seleccionar</option>
                                </select>
                            </div>
                        </div>
                        <!-- Datos del Curso -->
                        <div class="form-group row col-sm-12 col-md-12">
                            <!-- <label class="col-sm-2 col-form-label text-left" for="validationCustom01">Curso:</label> -->
                            <label class="col-sm-2 col-form-label text-left" for="curso">Curso:</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="curso" id="curso" required>                                  
                                    <option value="">Seleccionar</option>
                                </select>
                            </div>
                        </div>

                        
                        <!-- Datos del Docente -->
                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-2 col-form-label text-left" for="docente">Docente:</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="docente" id="docente" required>                                  
                                    <option value="">Seleccionar</option>
                                </select>
                            </div>
                        </div>
                        


                        <div class="m-3 row text-left"><b>Instrucciones </b></div>
                        <p class="m-3 text-left">
                           El presente instrumento tiene como objetivo evaluar al docente en las diferentes áreas del ámbito académico. Escriba en el casillero el número (X) que considere conveniente teniendo en cuenta la siguiente escala de evaluación: <br>
                            1 &rarr; Malo<br>
                            2 &rarr; Regular<br>
                            3 &rarr; Bueno <br>
                            4 &rarr; Muy Bueno <br>
                            5 &rarr; Excelente <br>
                        </p>
                        <br>
                        <div class="m-3 row text-left"><b>Área Ético Social</b></div>

                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio1">
                                1. Utiliza un lenguaje educado y respetuoso en sus interacciones.                            
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="1" required>
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="2" required>
                                    <label class="form-check-label" for="inlineRadio1">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="3" required>
                                    <label class="form-check-label" for="inlineRadio1">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="4" required>
                                    <label class="form-check-label" for="inlineRadio1">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="5" required>
                                    <label class="form-check-label" for="inlineRadio1">5</label>
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
                                2. Asiste  puntualmente a las sesiones programadas según horario.
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="1" required>
                                    <label class="form-check-label" for="inlineRadio2">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="2" required>
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="3" required>
                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="4" required>
                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="5" required>
                                    <label class="form-check-label" for="inlineRadio2">5</label>
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
                                3. Propicia un clima de confianza con los estudiantes.
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="1" required>
                                    <label class="form-check-label" for="inlineRadio3">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="2" required>
                                    <label class="form-check-label" for="inlineRadio3">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="3" required>
                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="4" required>
                                    <label class="form-check-label" for="inlineRadio3">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="5" required>
                                    <label class="form-check-label" for="inlineRadio3">5</label>
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
                                4. Demuestra preocupación  y comprensión por los problemas de los alumnos.
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="1" required>
                                    <label class="form-check-label" for="inlineRadio4">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="2" required>
                                    <label class="form-check-label" for="inlineRadio4">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="3" required>
                                    <label class="form-check-label" for="inlineRadio4">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="4" required>
                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="5" required>
                                    <label class="form-check-label" for="inlineRadio4">5</label>
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
                                5. Aplica medidas correctivas personales en privado.
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="1" required>
                                    <label class="form-check-label" for="inlineRadio5">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="2" required>
                                    <label class="form-check-label" for="inlineRadio5">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="3" required>
                                    <label class="form-check-label" for="inlineRadio5">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="4" required>
                                    <label class="form-check-label" for="inlineRadio5">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="5" required>
                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>


                        <!-- sección 2 -->
                        <div class="m-3 row text-left"><b>Área de Desempeño Profesional</b></div>

                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio6">
                                1.  Entrega oportunamente el sílabo y orienta el desarrollo del curso.
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="1" required>
                                    <label class="form-check-label" for="inlineRadio6">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="2" required>
                                    <label class="form-check-label" for="inlineRadio6">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="3" required>
                                    <label class="form-check-label" for="inlineRadio6">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="4" required>
                                    <label class="form-check-label" for="inlineRadio6">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="5" required>
                                    <label class="form-check-label" for="inlineRadio6">5</label>
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
                                2.  Desarrolla la asignatura según lo planificado.
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="1" required>
                                    <label class="form-check-label" for="inlineRadio7">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="2" required>
                                    <label class="form-check-label" for="inlineRadio7">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="3" required>
                                    <label class="form-check-label" for="inlineRadio7">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="4" required>
                                    <label class="form-check-label" for="inlineRadio7">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="5" required>
                                    <label class="form-check-label" for="inlineRadio7">5</label>
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
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio8">
                                3.  Demuestra dominio de los contenidos.
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="1" required>
                                    <label class="form-check-label" for="inlineRadio8">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="2" required>
                                    <label class="form-check-label" for="inlineRadio8">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="3" required>
                                    <label class="form-check-label" for="inlineRadio8">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="4" required>
                                    <label class="form-check-label" for="inlineRadio8">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="5" required>
                                    <label class="form-check-label" for="inlineRadio8">5</label>
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
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio9">
                                4.  Utiliza metodologías que favorecen el aprendizaje significativo y colaborativo
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="1" required>
                                    <label class="form-check-label" for="inlineRadio9">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="2" required>
                                    <label class="form-check-label" for="inlineRadio9">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="3" required>
                                    <label class="form-check-label" for="inlineRadio9">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="4" required>
                                    <label class="form-check-label" for="inlineRadio9">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="5" required>
                                    <label class="form-check-label" for="inlineRadio9">5</label>
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
                        
                        <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio10">
                                ¿Qué estrategias aplica para regular el estrés?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P11" id="inlineRadio11" value="0" required>
                                    <label class="form-check-label" for="inlineRadio11">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P11" id="inlineRadio11" value="1" required>
                                    <label class="form-check-label" for="inlineRadio11">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P11" id="inlineRadio11" value="2" required>
                                    <label class="form-check-label" for="inlineRadio11">2</label>
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
                                    <input class="form-check-input" type="radio" name="P12" id="inlineRadio12" value="0" required>
                                    <label class="form-check-label" for="inlineRadio12">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P12" id="inlineRadio12" value="1" required>
                                    <label class="form-check-label" for="inlineRadio12">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P12" id="inlineRadio12" value="2" required>
                                    <label class="form-check-label" for="inlineRadio12">2</label>
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
                                    <input class="form-check-input" type="radio" name="P13" id="inlineRadio13" value="0" required>
                                    <label class="form-check-label" for="inlineRadio13">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P13" id="inlineRadio13" value="1" required>
                                    <label class="form-check-label" for="inlineRadio13">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P13" id="inlineRadio13" value="2" required>
                                    <label class="form-check-label" for="inlineRadio13">2</label>
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
                                    <input class="form-check-input" type="radio" name="P14" id="inlineRadio14" value="0" required>
                                    <label class="form-check-label" for="inlineRadio14">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P14" id="inlineRadio14" value="1" required>
                                    <label class="form-check-label" for="inlineRadio14">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P14" id="inlineRadio14" value="2" required>
                                    <label class="form-check-label" for="inlineRadio14">2</label>
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
                                    <input class="form-check-input" type="radio" name="P15" id="inlineRadio15" value="0" required>
                                    <label class="form-check-label" for="inlineRadio15">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P15" id="inlineRadio15" value="1" required>
                                    <label class="form-check-label" for="inlineRadio15">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P15" id="inlineRadio15" value="2" required>
                                    <label class="form-check-label" for="inlineRadio15">2</label>
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
                                    <input class="form-check-input" type="radio" name="P16" id="inlineRadio16" value="0" required>
                                    <label class="form-check-label" for="inlineRadio16">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P16" id="inlineRadio16" value="1" required>
                                    <label class="form-check-label" for="inlineRadio16">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P16" id="inlineRadio16" value="2" required>
                                    <label class="form-check-label" for="inlineRadio16">2</label>
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
                                    <input class="form-check-input" type="radio" name="P17" id="inlineRadio17" value="0" required>
                                    <label class="form-check-label" for="inlineRadio17">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P17" id="inlineRadio17" value="1" required>
                                    <label class="form-check-label" for="inlineRadio17">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P17" id="inlineRadio17" value="2" required>
                                    <label class="form-check-label" for="inlineRadio17">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>

                        <!-- <div class="form-group row col-sm-12 col-md-12">
                            <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio10">
                                ¿Qué estrategias aplica para regular el estrés?
                            </label>
                                
                            <div class="col-sm-4 text-right">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P18" id="inlineRadio18" value="0" required>
                                    <label class="form-check-label" for="inlineRadio18">0</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P18" id="inlineRadio18" value="1" required>
                                    <label class="form-check-label" for="inlineRadio18">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="P18" id="inlineRadio18" value="2" required>
                                    <label class="form-check-label" for="inlineRadio18">2</label>
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback">
                                    Seleccione uno.
                                </div>
                            </div>
                        </div>                        -->


                        <div class="m-3 row text-left"><b>III. Observaciones</b></div>
                        <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-10 col-form-label text-left" for="validationCustom03">Escriba las observaciones que tenga:</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="3" name="P18" id="validationCustom03" required></textarea>
                                <div class="valid-feedback">
                                    Muchas gracias por ingresar una respuesta!
                                </div>
                                <div class="invalid-feedback">
                                    Debe escribir una respuesta válida.
                                </div>
                            </div>
                        </div>







                        <strong><i>Puntaje Global: </i><strong><input id="scor" type="text" name="suma"  />        

                <div class="card-footer bg-transparent ">
                    <div class="input-group row">
                        <button class="btn btn-primary boton" type="submit">Guardar</button>
                    </div>
                </div>


                </form>
            </div>
        </div>
    </div>


    <!-- Some scripts -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Script para peticionies y validaciones -->
    <script src="js/peticiones.js"></script>
    <script>    

                                                
        // let id_curso = document
        
        (function () {
        'use strict'

        // Get all forms that we want to validate
        var forms = document.querySelectorAll('.needs-validation')

        // Loop que previene el submit
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        //Calcula el score
        function calcscore(){
            var score = 0;
            $(".form-check-input:checked").each(function(){
                score+=parseInt($(this).val(),10);
            });
            $("input[name=suma]").val(score)
        }
        $().ready(function(){
            $(".form-check-input").change(function(){
                calcscore()
            });
        });


    </script>


</body>
</html>