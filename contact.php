<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Aeroporto de Maricá SBMI</title>
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

  <!-- Nav Bar Start -->



  <!-- Contact Start -->
  <div class="contact">
    <div class="container">
      <div class="section-header text-center">
        <p>SBMI</p>
        <h2>Controle de Abastecimento</h2>
      </div>

      <br>
      <br>
      <br>
      <br>


      <table class="table">
        <thead>
          <tr>
            <th scope="col">DATA DO ABASTECIMENTO</th>
            <th scope="col">HORA DO ABASTECIMENTO</th>
            <th scope="col">NÚMERO DO VOO</th>
            <th scope="col">PREFIXO DA AERONAVE</th>
            <th scope="col">TIPO DE AVIAÇÃO</th>
            <th scope="col">QUANTIDADE ABASTECIDA</th>
            <th scope="col">FUNCIONÁRIO SBMI</th>
           
          </tr>





        </thead>




        <?php include 'consulta_abastecimento.php'; ?>







      </table>



    </div>
  </div>

  <div class="card-body">
    <div class="col-md-12 mb-3 mt-3">
      <div class="float-right-center">

        <a type="button" value="Imprimir" onClick="window.print()" class="btn btn-danger mb-2 mt-2 ml-2 float-right">Gerar PDF </a>

      </div>
    </div>
  </div>

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