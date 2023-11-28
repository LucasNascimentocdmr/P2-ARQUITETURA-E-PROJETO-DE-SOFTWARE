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

$data   = date('Y-m-d', strtotime(str_replace("/", "-", $_POST['data'])));
$horap       = $_POST['horap'];
$horar       = $_POST['horar'];
$origem      = $_POST['origem'];
$destino     = $_POST['destino'];
$voon        = $_POST['voon'];
$prefixo     = $_POST['prefixo'];
$embarques   = $_POST['embarques'];
$observacoes = $_POST['observacoes'];
$funcionario = $_POST['funcionario'];
$empresa     = $_POST['empresa'];



$sql = "INSERT INTO passageiros (data_info,hora_prev, hora_real, origem, destino, num_voo, prefixo, embarques, observacoes, funcionario, empresa) VALUES ('$data', '$horap', '$horar', '$origem', '$destino', '$voon', '$prefixo', '$embarques', '$observacoes', '$funcionario','$empresa')";

if (mysqli_query($conn, $sql)) {
      echo "<script language='javascript'>";
      echo "alert('.DATA DAS INFORMAÇÕES: $data  /  HORA PREVISTA: $horap  / HORA REAL: $horar  /  ORIGEM: $origem  /  DESTINO: $destino  /  Nº DO VOO: $voon  /  PREFIXO DA AERONAVE: $prefixo  /  EMBARQUES: $embarques  /  OBSERVAÇÕES: $observacoes  /  FUNCIONÁRIO SBMI: $funcionario');";
      echo 'location.href="select.php";'; 
      Echo "</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
