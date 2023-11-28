<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin SBMI OMNI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
session_start();




// para preencher o nome do funcionário automarico


// Verifica se o nome do usuário está armazenado na sessão
if (isset($_SESSION['nomeUsuario'])) {
    $nomeUsuario = $_SESSION['nomeUsuario'];
}

?> 
<body>
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <div class="ml">
                    <img src="img/logo aeroporto (1).png" alt="some text" width=140 height=85>
                </div>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="ml-auto">

                        <a class="btn btn-custom" href="select.php">inicio</a>
                        <a class="btn btn-custom" href="index.html">Sair</a>

                    </div>
                </div>
            </nav>
        </div>
    </div>


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">


            <!-- formulário de inserção de dados-->

            <style>
                @media(max-width: 575px) {
                    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
                        justify-content: center;
                        flex-wrap: wrap;
                    }

                    div.dataTables_wrapper .dataTables_info {
                        white-space: normal !important;
                    }

                    div.dataTables_wrapper div.dataTables_filter input {
                        width: 140px;
                    }
                }
            </style>

            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">

                            <a class="nav-link active" aria-current="true" href="entrada.php">Embarques</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="entradade.php">Desembarques</a>
                        </li>
                      

                    </ul>
                </div>


                <!-- <div class="container-fluid">-->

                <!-- <div class = card>-->
                <a class="card-link no-underline text-dark" data-toggle="collapse" href="#relatorios" arial-controls="relatorios">
                    <div class="card-header">
                        <h5><i class="fa fa-arrow-down arrow-red nav-link active"></i> Relatório de Movimentação de Embarques<h5>

                    </div>

                </a>


                <!-- inicio do formulario    -->

                <form action="embarque.php" method="post" class="row g-2">

                    <div class="col-md-3">
                        <label for="data" class="form-label">DATA DAS INFORMAÇÕES</label>
                        <input type="date" class="form-control" id="data" name="data">
                    </div>
                    
                    <div class="col-md-3">
                        <label for="empresa" class="form-label">EMPRESA</label>
                        <select class="form-control" id="empresa" name="empresa">
                            <option value="---------">----------</option>
                            <option value="lider_aviacao">LIDER AVIAÇÃO</option>
                            <option value="omni_taxi_aereo">OMNI TAXI AÉREO</option>
                        </select>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <label for="horap" class="form-label">HORÁRIO PREVISTO</label>
                        <input type="time" class="form-control" id="horap" name="horap">
                    </div>
                    <div class="col-md-3">
                        <label for="horar" class="form-label">HORÁRIO REAL</label>
                        <input type="time" class="form-control" id="horar" name="horar">
                    </div>
                    <!-- MENUSINHO-->
                    <div class="col-md-3">
                        <label for="origem" class="form-label">ORIGEM</label>
                        <input type="text" class="form-control" id="origem" name="origem">
                    </div>
                    <div class="col-md-3">
                        <label for="destino" class="form-label">DESTINO</label>
                        <input type="text" class="form-control" id="destino" name="destino">
                    </div>



                    <div class="col-md-3">
                        <label for="voon" class="form-label">VOO Nº</label>
                        <input type="text" class="form-control" id="voon" name="voon">
                    </div>
                    <div class="col-md-3">
                        <label for="prefixo" class="form-label">PREFIXO DA AERONAVE</label>
                        <input type="text" class="form-control" id="prefixo" name="prefixo">
                    </div>
                    <div class="col-md-3">
                        <label for="embarques" class="form-label">EMBARQUES</label>
                        <input type="number" class="form-control" id="embarques" name="embarques">
                    </div>

                    <div class="col-md-6">
                        <label for="observacoes" class="form-label">OBSERVAÇÕES</label>
                        <input type="text" class="form-control" id="observacoes" name="observacoes">
                    </div>

                    <div class="col-md-6">
                        <label for="funcionario" class="form-label">FUNCIONARIO SBMI</label>
                        <input type="name" class="form-control" id="funcionario" name="funcionario" value="<?php echo isset($nomeUsuario) ? $nomeUsuario : ''; ?>" readonly>
                    </div>


                    <br>
                    <br>
                    <br>
                    <br>




                    <div class="col-md-12">

                        <button type="submit" class="btn btn-danger"> <i class="fa fa-arrow-right "></i> Enviar</button>

                    </div>

                </form>

            </div>
            <!-- fim do formulario -->
        </div>







    </div>


    </div>
    </div>
    <!-- Contact End -->




    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <br>
    <BR>
    <br>
    <br>

    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 SBMI - AEROPORTO DE MARICÁ
            <!--<a class="text-dark" href="https://mdbootstrap.com/"></a>-->
        </div>
        <!-- Copyright -->



    </footer>
</body>

</html>