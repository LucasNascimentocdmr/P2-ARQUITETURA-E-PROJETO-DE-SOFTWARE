<?php
include 'dados.php';

$consulta = 'SELECT * FROM passageiros  ORDER BY DATA_INFO DESC';

$query = mysqli_query($mysqli, $consulta);



while ($dados = mysqli_fetch_array($query)) {
    $data_inf = date('d/m/Y', strtotime($dados['DATA_INFO']));
    
    echo "<tr>";
    echo "<td><strong>$data_inf</strong></td>";
echo "<td>" . utf8_encode($dados['HORA_PREV']) . "</td>";
echo "<td>" . utf8_encode($dados['HORA_REAL']) . "</td>";
echo "<td>" . utf8_encode($dados['ORIGEM']) . "</td>";
echo "<td>" . utf8_encode($dados['DESTINO']) . "</td>";
echo "<td>" . utf8_encode($dados['NUM_VOO']) . "</td>";
echo "<td>" . utf8_encode($dados['PREFIXO']) . "</td>";
echo "<td>" . utf8_encode($dados['EMBARQUES']) . "</td>";
echo "<td>" . utf8_encode($dados['empresa']) . "</td>";
echo "<td>" . utf8_encode($dados['OBSERVACOES']) . "</td>";
echo "<td>" . utf8_encode($dados['FUNCIONARIO']) . "</td>";
echo "<td><a href='editar_embarque(1).php?id=" . $dados['ID_PASSAGEIROS'] . "'>Editar</a> </td>";
    echo "</tr>";
}


mysqli_close($mysqli);
