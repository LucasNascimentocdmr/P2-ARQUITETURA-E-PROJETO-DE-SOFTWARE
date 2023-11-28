<?php
include 'dados.php';

// Verifica se o ID do passageiro foi fornecido na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta os dados do passageiro com base no ID
    $consulta = "SELECT * FROM abastecimento WHERE ID_ABAST = $id";
    $resultado = mysqli_query($mysqli, $consulta);

    if ($resultado) {
        $dados = mysqli_fetch_assoc($resultado);
        // Restante do código de edição do funcioinário
    } else {
        echo "Erro na consulta: " . mysqli_error($mysqli);
    }

    // Verifica se o formulário foi enviado
    if (isset($_POST['submit'])) {
        
     $da         = date('Y-m-d', strtotime(str_replace("/", "-", $_POST['a'])));
$ho         = $_POST['aa'];
$pref       = $_POST['aaa'];
$tipo       = $_POST['aaaaa'];
$qtd        = $_POST['aaaaaa'];
$func       = $_POST['funcionario'];
$observacao = $_POST['observacao'];
$empresa    = $_POST['empresa'];

// Atualiza os dados do passageiro no banco de dados
$atualizacao = "UPDATE abastecimento SET DATA_ABAST = '$da', HORA_ABAST = '$ho', PREFIXO = '$pref', TIPO_AVIACAO = '$tipo', NUM_VOO = '$voon', PREFIXO = '$pref', QTD_LITRO = '$qtd', observacoes = '$observacao', FUNCIONARIO = '$func', empresa = '$empresa' WHERE ID_ABAST = $id ";



        mysqli_query($mysqli, $atualizacao);

        // Redireciona para a página de visualização dos funcionários
        header('Location: aboutabas.php');
        exit;
    }
} else {
    // ID não fornecido, redireciona para a página de seleção de ação
    header('Location: select.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Editar Informações</title>
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
</head>
<header>
    <style>
        /* Estilos gerais para o formulário */
        form {
            margin-top: 20px;
        }

        .col-3 {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }
    </style>

</header>

<body>
    <h2>Editar Informações</h2>
    <form method="post" action="">
        <div class="row">

           <div class="col-md-3">
                        <label for="a" class="form-label">DATA DO ABASTECIMENTO</label>
                        <input type="date" class="form-control" id="a" name="a" value="<?php echo $dados['DATA_ABAST']; ?>">
                    </div>
                    
                     
                    
                   <div class="col-md-3">
                        <label for="empresa" class="form-label">EMPRESA</label>
                        <select class="form-control" id="empresa" name="empresa">
                            <option value="-------" <?php echo ($dados['empresa'] == '-------') ? 'selected' : ''; ?>>-------</option>
                            <option value="lider_aviacao" <?php echo ($dados['empresa'] == 'lider_aviacao') ? 'selected' : ''; ?>>LIDER AVIAÇÃO</option>
                            <option value="omni_taxi_aereo" <?php echo ($dados['empresa'] == 'omni_taxi_aereo') ? 'selected' : ''; ?>>OMNI TAXI AÉREO</option>
                        </select>
                    </div>
                        
                    <div class="col-md-3">
                            <label for="aaaaa" class="form-label">TIPO DE AVIAÇÃO</label>
                            <input type="text" class="form-control" id="aaaaa" name="aaaaa" value="<?php echo $dados['TIPO_AVIACAO']; ?>">
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
                        <input type="time" class="form-control" id="aa" name="aa" value="<?php echo $dados['HORA_ABAST']; ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="aaa" class="form-label">PREFIXO DA AERONAVE</label>
                        <input type="text" class="form-control" id="aaa" name="aaa" value="<?php echo $dados['PREFIXO']; ?>">
                    </div>
                    <br>

                    <div class="col-md-3">
                        <label for="aaaaaa" class="form-label">QUANTIDADE ABASTECIDA</label>
                        <input type="text" class="form-control" id="aaaaaa" name="aaaaaa" value="<?php echo $dados['QTD_LITRO']; ?>">
                    </div>


                   
                    
                    <div class="col-md-3">
                        <label for="observacao" class="form-label">OBSERVAÇÕES </label>
                        <input type="text" class="form-control" id="observacao" name="observacao" value="<?php echo $dados['observacoes']; ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="funcionario" class="form-label">FUNCIONÁRIO SBMI</label>
                        <input type="name" class="form-control" id="funcionario" name="funcionario"  value="<?php echo $dados['FUNCIONARIO']; ?>"readonly >
                    </div>
                   

                    <br>
                    <br>
                    <br>
                    <div class="col-md-12">

                        <button type="submit" name ="submit" class="btn btn-danger"> <i class="fa fa-arrow-right "></i> Enviar</button>

                    </div>
        </div>
    </form>

</body>

</html>