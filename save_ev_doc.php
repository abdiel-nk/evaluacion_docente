<?php 
$usuario = "root";
$contrasena = ""; 
$servidor = "localhost";
$basededatos = "ev_docente";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
if ($conexion->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conexion->connect_error);
  } 

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta property="og:url"           content="http://upgsalud.posgradoupeu.edu.pe/jornada.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Bienvenido a la entrevista del proceso de admisión 2025 - I" />
  <meta property="og:description"   content="Bienvenido a la entrevista del proceso de admisión 2025 - I" />
  <meta property="og:image"         content="http://upgsalud.posgradoupeu.edu.pe/jornada.jpg" />
<title>Encuesta</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="http://upgsalud.posgradoupeu.edu.pe/all.min.css" >

	<style>
        .fondoDiv{
            padding:10px;
            margin-top:20px;
            color: white;
            background-color: #000000;
            border-radius: 20px 20px 20px 20px;
            -moz-border-radius: 20px 20px 20px 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            border: 0px solid #000000;
            -webkit-box-shadow: 10px 14px 27px 13px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 14px 27px 13px rgba(0,0,0,0.75);
            box-shadow: 10px 14px 27px 13px rgba(0,0,0,0.75);
        }
        img{
            border-radius: 20px 20px 20px 20px;
            -moz-border-radius: 20px 20px 20px 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            border: 0px solid #000000;
        }
        .boton{
            margin-top:35px;
            margin-left:10px;
        }
        .h1willy{
            text-shadow: 2px 2px 3px #ececec;
            margin:20px;
            font-family: "Arial Black", Gadget, sans-serif;
        }
        .tooltip-inner {
            max-width: 350px;
            width: 350px;
        }
        .separadorwilly{
            border-radius: 15px 15px 15px 15px;
            -moz-border-radius: 15px 15px 15px 15px;
            -webkit-border-radius: 15px 15px 15px 15px;
            border: 10px solid #ececec;
        }




	</style>
</head>

<body style="background-color: #ececec;">

<?php
$_Dni = $_POST['dni'];
$_Programa=$_POST['programa'];
$_Ciclo=$_POST['ciclo'];
$_Curso=$_POST['curso'];
$_Docente=$_POST['docente'];
$_P1=$_POST["P1"];
$_P2=$_POST["P2"];
$_P3=$_POST["P3"];
$_P4=$_POST["P4"];
$_P5=$_POST["P5"];
$_P6=$_POST["P6"];
$_P7=$_POST["P7"];
$_P8=$_POST["P8"];
$_P9=$_POST["P9"];
$_P10=$_POST["P10"];
$_P11=$_POST["P11"];
$_P12=$_POST["P12"];
$_P13=$_POST["P13"];
$_P14=$_POST["P14"];
$_P15=$_POST["P15"];
$_P16=$_POST["P16"];
$_P17=$_POST["P17"];
$_P18=$_POST["P18"];
$_score=$_POST["suma"];



/*==================================================================================
SI NO ESTÁ EL DNI REGISTRADO SE INSERTA EL REGISTRO EN LA BASE DE DATOS
==================================================================================*/
$sql = "INSERT INTO ev_doc (dni, programa, ciclo, curso, docente, P1, P2, P3, P4, P5, P6, P7, P8, P9, P10, P11, P12, P13, P14, P15, P16, P17, P18, score, fecha)
VALUES ('$_Dni', '$_Programa','$_Ciclo','$_Curso','$_Docente','$_P1','$_P2','$_P3','$_P4','$_P5','$_P6','$_P7','$_P8','$_P9','$_P10','$_P11','$_P12','$_P13','$_P14','$_P15','$_P16','$_P17','$_P18','$_score', DATE_SUB(NOW(),INTERVAL 0 HOUR))";


mysqli_query($conexion, $sql);

$conexion->close();

?>

<html>
<head>
    <style>
		div{
			background-color: black;
			width: 60%;
			height: auto;
			margin: auto;
			margin-top: 20px;
			padding-top: 35px;
			border-radius: 15px 15px 15px 15px;
		}
		p{
			color: aliceblue;
			font-size: 100px;
			width: 100%;
		}
		h1{
			color: aliceblue;
			font-size: 60px;
			width: 100%;
		}

	</style>

	<script language="JavaScript">

    /* Determinamos el tiempo total en segundos */
    var totalTiempo=4;
    /* Determinamos la url donde redireccionar */
    var url="jornada.php?registro=255";

    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = totalTiempo;

        if(totalTiempo==0)
        {
            document.getElementById('CuentaAtras').innerHTML = '<center><p style="color:green;font-size: 50px;">Muchas gracias!!!</p></center>';
            document.getElementById('guardar').innerHTML = 'Entrevista guardada';
            location.href ="index.php";
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }

    window.onload=updateReloj;

    </script>




</head>

<div align="center">
<h1 id='guardar'>Guardando datos</h1>
<hr/>
<p id='CuentaAtras' align="center">
</p></div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


$('.alert').alert();

$('.custom-file-input').on('change', function(event) {
    var inputFile = event.currentTarget;
    $(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
}); 
</script>


</body>
</html>