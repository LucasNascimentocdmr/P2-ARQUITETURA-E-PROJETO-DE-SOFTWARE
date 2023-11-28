<?php
include 'dados.php';
$consulta = 'SELECT * FROM desembarques  ORDER BY DATADE DESC';
                                                    
$query = mysqli_query($mysqli, $consulta);
                                                    
while($dados = mysqli_fetch_array($query)){
    $datade = date('d/m/Y',strtotime(str_replace("-","/",$dados['DATADE'])));

echo "<tr>";
echo "<td><strong>$datade</strong></td>";
echo "<td>" . utf8_encode($dados['HORA_PREVDE']) . "</td>";
echo "<td>" . utf8_encode($dados['HORA_REALDE']) . "</td>";
echo "<td>" . utf8_encode($dados['ORIGEMDE']) . "</td>";
echo "<td>" . utf8_encode($dados['DESTINODE']) . "</td>";
echo "<td>" . utf8_encode($dados['NUM_VOODE']) . "</td>";
echo "<td>" . utf8_encode($dados['PREFIXODE']) . "</td>";
echo "<td>" . utf8_encode($dados['DESEMBARQUESDE']) . "</td>";
echo "<td>" . utf8_encode($dados['empresa']) . "</td>";
echo "<td>" . utf8_encode($dados['OBSERVACOESDE']) . "</td>";
echo "<td>" . utf8_encode($dados['FUNCIONARIO']) . "</td>";
echo "<td><a href='editar_desembarque.php?id=" . $dados['ID_DESEMBARQUES'] . "'>Editar</a> </td>";
echo "</tr>";

}  


mysqli_close($mysqli);                

?>