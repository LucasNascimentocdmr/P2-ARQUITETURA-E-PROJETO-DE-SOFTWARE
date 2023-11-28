<!DOCTYPE html>
<html>

<head>
    <title>Ticket de Estacionamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 300px;
            border: 1px solid #000;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .logo {
            max-width: 150px;
        }

        .info {
            padding: 20px;
            border-top: 1px dashed #ccc;
            text-align: center;
        }

        .info p {
            margin: 5px 0;
        }

        .header h4 {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <?php
    // Conexão com o banco de dados
    include 'dados.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Consulta os dados do veículo com base no ID
        $consulta = "SELECT * FROM PARK WHERE ID = $id";
        $resultado = mysqli_query($mysqli, $consulta);

        if ($resultado) {
            $dados = mysqli_fetch_assoc($resultado);

            // Informações para impressão
            $data = $dados['DATA'];
            $veiculo = $dados['VEICULO'];
            $placa = $dados['PLACA'];
            $mplaca = $dados['MPLACA'];
            $modelo = $dados['MODELO'];
            $cor = $dados['COR'];
            $entrada = $dados['ENTRADA'];
            $saida = $dados['SAIDA'];
            $dsaida = $dados['DSAIDA'];
            $tempo = $dados['TEMPO'];



            // Divide o tempo em horas e minutos
            list($horas, $minutos) = explode(':', $tempo);

            // Converte o tempo total em minutos
            $tempoTotalMinutos = ($horas * 60) + $minutos;

            // Cálculo do valor a pagar
            if ($tempoTotalMinutos <= 120) {  // Até 2 horas (120 minutos)
                $valorPagar = 2.50;
            } elseif ($tempoTotalMinutos <= 720) {  // Até 12 horas (720 minutos)
                $valorPagar = 14.00;
            } else {  // Após 12 horas
                $horasExcedidas = ceil(($tempoTotalMinutos - 720) / 60);  // Calcula as horas excedidas arredondadas para cima
                $valorPagar = 14.00 + ($horasExcedidas * 2.50);
            }

            echo '<div class="header">';
            echo '<img src="LOGO.PNG" alt="Logo" class="logo">';
            echo '<h3>AUTOPARK - SBMI </h3>';
            echo '<h4>Comprovante de Estacionamento</h4>';
            echo '<p></p>';
            echo '</div>';

            echo '<div class="info">';
            echo "<p><b>Data:</b> " . date('d-m-Y', strtotime($data)) . "</p>";
            echo "<p><b>Tipo de Veículo:</b> $veiculo</p>";
            echo "<p><b>Placa:</b> $placa</p>";
            echo "<p><b>Tipo de Placa:</b> $mplaca</p>";
            echo "<p><b>Modelo: </b>$modelo</p>";
            echo "<p><b>Cor:</b> $cor</p>";
            echo "<p><b>Entrada: </b>$entrada</p>";
            //echo "<p><b>Saída:</b> $saida</p>";

            echo '</div>';

            echo '<div class="header">';
            //echo "<p><b>Data de Saída:</b> " . date('d-m-Y', strtotime($dsaida)) . "</p>";
            //echo "<p><b>Tempo Estacionado:</b> </p>";
            //echo "<p> $tempo Horas</p>";
            //echo '<h4><b>Total a Pagar:</b></h4>';
            //echo "<h3>R$ $valorPagar,00</h3>";
            
            echo '<p>------------------------------------------------</p>';
            echo '<h3>OUVIDORIA MARICÁ ROTATIVO</h3>';
            echo '<h4>(21) 97071-1170</h4>';
            echo '<h4>maricarotativo@codemar-sa.com.br</h4>';
            echo '<p>------------------------------------------------</p>';
            echo '<h4>AEROPORTO DE MARICÁ</h4>';
            echo '<h4>CODEMAR-SA.COM.BR</h4>';
            echo '<h4>CNPJ: 20.009.382/0001-21</h4>';
            echo '<h4>RUA JOVINO D. OLIVEIRA</h4>';
            echo '<h4>MARICÁ/RJ</h4>';
            echo '</div>';
        } else {
            echo "Erro na consulta: " . mysqli_error($mysqli);
        }
    } else {
        // ID não fornecido, redireciona para a página de seleção de ação
        header('Location: entrada.php');
        exit;
    }
    ?>
</body>

</html>