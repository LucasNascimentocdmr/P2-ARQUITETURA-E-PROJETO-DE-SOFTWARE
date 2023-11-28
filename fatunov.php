<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Comercial - Faturamento</title>

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

<body>


    <!-- Contact Start -->

    <div class="card text-center">

        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <nav class="navbar bg-body-tertiary">
                        <div class="container">
                            <a class="navbar-brand" href="indexfatura.php">
                                <img src="img/omni2.png" alt="Bootstrap" width="200" height="100">
                            </a>
                            <a class="navbar-brand" href="#">
                                <img src="img/logo aeroporto (1).png" alt="Bootstrap" width="150" height="75">
                            </a>

                        </div>
                    </nav>
                    <h2>CONTROLE DE FATURAMENTO MENSAL</h2>
                    <p>NOVEMBRO</p>
                </div>
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">

                            <a class="nav-link " aria-current="true" href="faturamento.php">JAN</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link " href="fatufev.php">FEV</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="fatumar.php">MAR</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link " href="fatuabr.php">ABR</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="fatumai.php">MAI</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="fatujun.php">JUN</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="fatujul.php">JUL</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="fatuago.php">AGO</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="fatuset.php">SET</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="fatuout.php">OUT</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link active" href="fatunov.php">NOV</a>
                        <li class="nav-item">

                            <a class="nav-link" href="fatude.php">DEZ</a>
                        </li>
                        </li>

                    </ul>
                </div>



                <div class="row">


                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">TOTAL DE EMBARQUES</th>
                                <th scope="col"><?php include('total_valores/t_emb.nov.php'); ?></th></br>
                                <th scope="col">TOTAL DE DESEMBARQUES</th>
                                <th scope="col"><?php include('total_valores/t_desem.nov.php'); ?></th>
                                </th>
                                <th scope="col">TOTAL ABASTECIDO</th>
                                <th scope="col"><?php include('total_valores/t_abas.nov.php'); ?></th>
                                </th>
                                <th scope="col">TOTAL DE VOOS</th>
                                <th scope="col"><?php include('total_valores/t_voo.nov.php'); ?></th>

                            </tr>
                            <tr>
                                <th scope="col">VALOR FATURADO R$</th>
                                <th scope="col"><?php include('faturamento_soma/v_emb.nov.php'); ?></th></br>
                                <th scope="col">VALOR FATURADO R$</th>
                                <th scope="col"><?php include('faturamento_soma/v_desem.nov.php'); ?></th></br>
                                <th scope="col">VALOR ABASTECIMENTO R$</th>
                                <th scope="col"><?php include('faturamento_soma/v_abas.nov.php'); ?></th></br>
                            </tr>





                        </thead>











                    </table>

                </div>
            </div>
        </div>
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


</body>

</html>