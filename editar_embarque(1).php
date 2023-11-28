<?php
include 'dados.php';

// Verifica se o ID do passageiro foi fornecido na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta os dados do passageiro com base no ID
    $consulta = "SELECT * FROM passageiros WHERE ID_PASSAGEIROS = $id";
    $resultado = mysqli_query($mysqli, $consulta);

    if ($resultado) {
        $dados = mysqli_fetch_assoc($resultado);
        // Restante do código de edição do funcioinário
    } else {
        echo "Erro na consulta: " . mysqli_error($mysqli);
    }

    // Verifica se o formulário foi enviado
    if (isset($_POST['submit'])) {
        
        $data             = $_POST['data'];
        $horap            = $_POST['horap'];
        $horar            = $_POST['horar'];
        $origem           = $_POST['origem'];
        $destino         = $_POST['destino'];
        $voon = $_POST['voon'];
        $prefixo = $_POST['prefixo'];
        $embarques = $_POST['embarques'];
        $observacoes = $_POST['observacoes'];
        $funcionario = $_POST['funcionario'];
        $empresa = $_POST['empresa'];
        

        // Atualiza os dados do passageiro no banco de dados
        $atualizacao = "UPDATE passageiros SET DATA_INFO = '$data', HORA_PREV = '$horap', HORA_REAL = '$horar', ORIGEM = '$origem', DESTINO = '$destino', NUM_VOO = '$voon', PREFIXO = '$prefixo', EMBARQUES = '$embarques', OBSERVACOES = '$observacoes', FUNCIONARIO = '$funcionario', empresa = '$empresa' WHERE ID_PASSAGEIROS = $id ";




        mysqli_query($mysqli, $atualizacao);

        // Redireciona para a página de visualização dos funcionários
        header('Location: about.php');
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
                        <label for="data" class="form-label">DATA DAS INFORMAÇÕES</label>
                        <input type="date" class="form-control" id="data" name="data" value="<?php echo $dados['DATA_INFO']; ?>">
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
                        <label for="horap" class="form-label">HORÁRIO PREVISTO</label>
                        <input type="time" class="form-control" id="horap" name="horap" value="<?php echo $dados['HORA_PREV']; ?>">
                    </div>
                    
                    <div class="col-md-3">
                        <label for="horar" class="form-label">HORÁRIO REAL</label>
                        <input type="time" class="form-control" id="horar" name="horar" value="<?php echo $dados['HORA_REAL']; ?>">
                    </div>
                    
                    <div class="col-md-3">
                        <label for="origem" class="form-label">ORIGEM</label>
                        <input type="text" class="form-control" id="origem" name="origem" value="<?php echo $dados['ORIGEM']; ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="destino" class="form-label">DESTINO</label>
                        <input type="text" class="form-control" id="destino" name="destino" value="<?php echo $dados['DESTINO']; ?>">
                    </div>

                    <div class="col-md-3">
                        <label for="voon" class="form-label">VOO Nº</label>
                        <input type="text" class="form-control" id="voon" name="voon" value="<?php echo $dados['NUM_VOO']; ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="prefixo" class="form-label">PREFIXO DA AERONAVE</label>
                        <input type="text" class="form-control" id="prefixo" name="prefixo" value="<?php echo $dados['PREFIXO']; ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="embarques" class="form-label">EMBARQUES</label>
                        <input type="number" class="form-control" id="embarques" name="embarques" value="<?php echo $dados['EMBARQUES']; ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="observacoes" class="form-label">OBSERVAÇÕES</label>
                        <input type="text" class="form-control" id="observacoes" name="observacoes" value="<?php echo $dados['OBSERVACOES']; ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="funcionario" class="form-label">FUNCIONARIO SBMI</label>
                        <input type="name" class="form-control" id="funcionario" name="funcionario" value="<?php echo isset($nomeUsuario) ? $nomeUsuario : ''; ?>"  readonly>
                    </div>


                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="col-md-12">

                       <button type="submit" name="submit" class="btn btn-danger"> <i class="fa fa-arrow-right "></i> Enviar</button>


                    </div>

        </div>
    </form>

</body>

</html>