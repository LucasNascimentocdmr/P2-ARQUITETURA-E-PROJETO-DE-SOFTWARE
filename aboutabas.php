<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aeroporto de Maricá SBMI</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.2/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap.min.css">

    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">





    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <div class="ml d-flex">


                    <a class="btn btn-custom ml-auto" href="select.php">inicio</a>
                </div>


            </nav>
        </div>
    </div>

  
    <div class="section-header text-center">
        <p>SBMI</p>
        <h2>Controle de Abastecimento</h2>


    </div>


    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>

                <th scope="col">DATA DO ABASTECIMENTO</th>
                <th scope="col">HORA DO ABASTECIMENTO</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">PREFIXO DA AERONAVE</th>
                <th scope="col">TIPO DE AVIAÇÃO</th>
                <th scope="col">QUANTIDADE ABASTECIDA</th>
                <th scope="col">OBSERVAÇÕES</th>
                <th scope="col">FUNCIONARIO SBMI</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>


        <?php include 'consulta_abastecimento.php'; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.b*ootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
    </script>




</body>

</html>