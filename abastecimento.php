<?php
$servername = "";
$database ="";
$username = "";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "";


$da        = date('Y-m-d',strtotime(str_replace("/","-",$_POST['a'])));
$ho        = $_POST['aa'];

$pref      = $_POST['aaa'];
$tipo      = $_POST['aaaaa'];
$qtd       = $_POST['aaaaaa'];
$func = $_POST['funcionario'];
$observacao = $_POST['observacao'];
$empresa = $_POST['empresa'];



 

$sql = " INSERT INTO abastecimento (DATA_ABAST, HORA_ABAST, PREFIXO, TIPO_AVIACAO, QTD_LITRO, FUNCIONARIO,observacoes, empresa) VALUES ('$da', '$ho', '$pref', '$tipo', '$qtd', '$func', '$observacao','$empresa')";

if (mysqli_query($conn, $sql)) {
      echo  '<script language="javascript">';   
      echo 'alert("Dados Cadastrados, SBMI AGRADECE AOS SEUS SERVIÇOS");';
      echo 'location.href="select.php";';    
      echo '</script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

