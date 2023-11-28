<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin SBMI SHELL</title>
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


                <a class="card-link no-underline text-dark" data-toggle="collapse" href="#relatorios" arial-controls="relatorios">
                    <div class="card-header">
                        <h5><i class="fa fa-arrow-down arrow-red nav-link active"></i> Relatório de Abastecimento<h5>

                    </div>

                </a>


                <!-- inicio do formulario    -->
                <form action="abastecimento.php" method="post" class="row g-2">
                    <div class="col-md-3">
                        <label for="a" class="form-label">DATA DO ABASTECIMENTO</label>
                        <input type="date" class="form-control" id="a" name="a">
                    </div>
                    
                     
                    
                    <div class="col-md-3">
                            <label for="empresa" class="form-label">EMPRESA</label>
                            <select class="form-control" id="empresa" name="empresa">
                                <option value="---------">----------</option>
                                <option value="lider_aviacao">LIDER AVIAÇÃO</option>
                                <option value="omni_taxi_aereo">OMNI TAXI AEREO</option>
                            </select>
                    </div>
                        
                    <div class="col-md-3">
                            <label for="aaaaa" class="form-label">TIPO DE AVIAÇÃO</label>
                            <input type="text" class="form-control" id="aaaaa" name="aaaaa">
                    </div>
                        
                     <script>
                            const empresaSelect = document.getElementById("empresa");
                            const tipoAviacaoInput = document.getElementById("aaaaa");
                        
                            empresaSelect.addEventListener("change", function () {
                                const selectedOption = empresaSelect.value;
                                if (selectedOption === "lider_aviacao" || selectedOption === "omni_taxi_aereo") {
                                    tipoAviacaoInput.value = "OFFSHORE";
                                } else {
                                    tipoAviacaoInput.value = "";
                                }
                            });
                    </script>

                    
                    <div class="col-md-3">
                        <label for="aa" class="form-label">HORA DO ABASTECIMENTO</label>
                        <input type="time" class="form-control" id="aa" name="aa">
                    </div>
                    <div class="col-md-3">
                        <label for="aaa" class="form-label">PREFIXO DA AERONAVE</label>
                        <input type="text" class="form-control" id="aaa" name="aaa">
                    </div>
                    <br>

                    <div class="col-md-3">
                        <label for="aaaaaa" class="form-label">QUANTIDADE ABASTECIDA</label>
                        <input type="text" class="form-control" id="aaaaaa" name="aaaaaa">
                    </div>


                   
                    
                    <div class="col-md-3">
                        <label for="observacao" class="form-label">OBSERVAÇÕES </label>
                        <input type="text" class="form-control" id="observacao" name="observacao">
                    </div>
                    <div class="col-md-3">
                        <label for="funcionario" class="form-label">FUNCIONÁRIO SBMI</label>
                        <input type="name" class="form-control" id="funcionario" name="funcionario" value="<?php echo isset($nomeUsuario) ? $nomeUsuario : ''; ?>" readonly>
                    </div>
                   

                    <br>
                    <br>
                    <br>
                    <div class="col-md-12">

                        <button type="submit" class="btn btn-danger"> <i class="fa fa-arrow-right "></i> Enviar</button>

                    </div>
                </form>

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
    <br>
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