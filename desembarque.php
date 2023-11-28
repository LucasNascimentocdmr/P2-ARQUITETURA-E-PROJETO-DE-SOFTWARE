<?php
$servername = "localhost";
$database ="u942302018_passanger";
$username = "u942302018_admin_lucas";
$password = "Codemar2023@";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$dataa      = date('Y-m-d',strtotime(str_replace("/","-",$_POST['dataa'])));
$horp       = $_POST['horp'];
$horr       = $_POST['horr'];
$origm      = $_POST['origm'];
$destn      = $_POST['destn'];
$von        = $_POST['von'];
$prefi      = $_POST['prefi'];
$desemb     = $_POST['desemb'];
$obser      = $_POST['obser'];
$funcionario      = $_POST['funcionario'];
$empresa      = $_POST['empresa'];

 

$sql = "INSERT INTO desembarques (datade,hora_prevde, hora_realde, origemde, destinode, num_voode, prefixode, desembarquesde, observacoesde, funcionario, empresa) VALUES ('$dataa', '$horp', '$horr', '$origm', '$destn', '$von', '$prefi', '$desemb', '$obser', '$funcionario', '$empresa')";

if (mysqli_query($conn, $sql)) {
     echo "<script language='javascript'>";
      echo "alert('.DATA DAS INFORMAÇÕES: $dataa  /  HORA PREVISTA: $horp  / HORA REAL: $horr  /  ORIGEM: $origm  /  DESTINO: $destn  /  Nº DO VOO: $von  /  PREFIXO DA AERONAVE: $prefi  /  DESEMBARQUES: $desemb  /  OBSERVAÇÕES: $obser  /  FUNCIONÁRIO SBMI: $funcionario');";
      echo 'location.href="select.php";'; 
      Echo "</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>