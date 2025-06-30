
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Evaluación Docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./css/logo-white-upeu.svg" alt="" width="120" height="40">
            </a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center fw-bolder text-warning">
            Reporte de Evaluación
            <span style="color:#013e66"> Docente 2025 - 1 
        </h1>

        <?php 
            include 'bd_inter/conexion.php';

            $tabla = "ev_doc";
            $sql = "SELECT   
                ev_doc.id,
                t_programa.programa,
                t_curso.curso,
                t_ciclo.ciclo,
                t_docente.docente,
                ev_doc.score

                FROM $tabla
                    INNER JOIN t_programa
                ON ev_doc.programa = t_programa.id
                    INNER JOIN t_curso
                ON ev_doc.curso = t_curso.id
                    INNER JOIN t_ciclo
                ON ev_doc.ciclo = t_ciclo.id
                    INNER JOIN  t_docente
                ON ev_doc.docente = t_docente.id;
                "
                ;
                $result = mysqli_query($mysqli, $sql);
        ?>
        <div class="table-styled">
        <button class="btn btn-success" id="exportButton">Exportar</button>

        <table id="myTable" class="table table-bordered">
            <thead class="">
                <tr>
                    <th >#</th>
                    <th>Programa</th>
                    <th>Curso</th>
                    <th class="text-center">Ciclo</th>
                    <th>Docente</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <?php 
                foreach($result as $data) {
            ?>
            <tbody >
                <tr >
                    <th><?php echo $data['id'] ?></th>
                    <th><?php echo $data['programa'] ?></th>
                    <th><?php echo $data['curso']?></th>
                    <th id="ciclo" class="text-center"><?php echo $data['ciclo']?> </th>
                    <th><?php echo $data['docente']?> </th>
                    <th class="text-center"><?php echo $data['score'] ?> </th>
                </tr>   
            </tbody>
            <?php }
            mysqli_close($mysqli) ?>   
        </table>
        
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <script>
    document.getElementById('exportButton').addEventListener('click', function() {
        var table = document.getElementById('myTable');
        var workbook = XLSX.utils.table_to_book(table, { sheet: "SheetJS" });
        XLSX.writeFile(workbook, 'reporte_evdoc_2025-1.xlsx');
    });
    </script>
    <!-- 
    <script>
    $(document).ready(function() {
    $("#myTable").tableExport({
        mso: {  type:'xlsx',
        fileName: 'reporte docente',
        fileFormat: 'xlsx',
        worksheetName: 'Reporte Evaluación Docente 2025 - 1 '
    }
    });
    $('#exportButton').click(function(){
        $("#myTable").tableExport();
    });
    });
    </script> -->

</body>
    
</html>