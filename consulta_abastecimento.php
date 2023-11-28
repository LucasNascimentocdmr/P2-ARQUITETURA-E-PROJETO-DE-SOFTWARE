<?php
include 'dados.php';
$consulta = 'SELECT * FROM abastecimento ORDER BY DATA_ABAST ASC';
                                                    
$query = mysqli_query($mysqli, $consulta);
                                                    
while($dados = mysqli_fetch_array($query)){
      $DATA_ABAST = date('d/m/Y',strtotime(str_replace("-","/",$dados['DATA_ABAST'])));

    echo "<tr>";
           echo "<td><strong>$DATA_ABAST</strong></td>";
           echo "<td>" . utf8_encode($dados['HORA_ABAST']) . "</td>";
           echo "<td>" . utf8_encode($dados['empresa']) . "</td>";
           echo "<td>" . utf8_encode($dados['PREFIXO']) . "</td>";
           echo "<td>" . utf8_encode($dados['TIPO_AVIACAO']) . "</td>";
           echo "<td>" . utf8_encode($dados['QTD_LITRO']) . "</td>";
           echo "<td>" . utf8_encode($dados['observacoes']) . "</td>";
           echo "<td>" . utf8_encode($dados['FUNCIONARIO']) . "</td>";
            echo "<td><a href='editar_abastecimento.php?id=" . $dados['ID_ABAST'] . "'>Editar</a> </td>";
        echo "</tr>";

}  


mysqli_close($mysqli);                

?>


