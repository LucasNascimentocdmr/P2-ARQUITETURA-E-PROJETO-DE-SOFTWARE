<?php
include 'dados.php';
$consulta = 'SELECT * FROM FUNCIONARIOS ';
                                                   
$query = mysqli_query($mysqli, $consulta);
                                                    
while($dados = mysqli_fetch_array($query)){
    

  
    echo "<tr>";  
    echo "<th>";
    echo "<th>";
    echo "<th>";
    echo "<th>";
    echo "<th>";
    echo "<th>";
    echo "<th>";
    echo "<th>";
    echo "<th>";
    echo " <td> $dados[nome_funcionario]</td> ";
     
  

}  


mysqli_close($mysqli);

?>
