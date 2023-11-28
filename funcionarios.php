<?php
$servername = "";
$database ="";
$username = "";
$password = "";
// Criando conexão
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}



$usuario  =  $_POST['users'];




$sql = "INSERT INTO funcionarios (nome_funcionario) VALUES ('$usuario')";

if (mysqli_query($conn, $sql)) {
      echo '<script language="javascript">';   
      echo 'alert("Dados Cadastrados, SBMI AGRADECE AOS SEUS SERVIÇOS");';
      echo 'location.href="select.php";';    
      echo '</script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>