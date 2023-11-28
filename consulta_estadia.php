<?php
include 'dados.php';

$consulta = 'SELECT * FROM ESTADIA ORDER BY DATAA DESC';

$query = mysqli_query($mysqli, $consulta);

while ($dados = mysqli_fetch_array($query)) {
    $data_inf = date('d/m/Y', strtotime(str_replace("-", "/", $dados['DATAA'])));
    
    $hora_inicio = $dados['CORTE'];
    $hora_fim = $dados['ACIONAMENTO'];
    
    $intervalo = '';
    if ($hora_inicio && $hora_fim) {
        $intervalo = calcularIntervalo($hora_inicio, $hora_fim);
    }
    
    echo "<tr>";
    
    echo "<td>" . utf8_encode($dados['DATAA']) . "</td>";
    echo "<td>" . utf8_encode($dados['PREFIXO']) . "</td>";
    echo "<td>" . utf8_encode($dados['ACIONAMENTO']) . "</td>";
    echo "<td>" . utf8_encode($dados['CORTE']) . "</td>";
    echo "<td>" . utf8_encode($dados['POSIÇÃO']) . "</td>";
    echo "<td>" . utf8_encode($dados['PATIO']) . "</td>";
    echo "<td>" . $intervalo . "</td>"; // Exibe o intervalo
    
    echo "</tr>";
}

mysqli_close($mysqli);

// Função para calcular o intervalo entre duas horas
function calcularIntervalo($hora_inicio, $hora_fim) {
    $inicio = new DateTime($hora_inicio);
    $fim = new DateTime($hora_fim);
    
    $diferenca = $inicio->diff($fim);
    
    return $diferenca->format('%H:%I:%S');
}
