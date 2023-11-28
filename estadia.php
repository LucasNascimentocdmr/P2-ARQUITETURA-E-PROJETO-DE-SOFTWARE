
<?php
$servername = "";
$database = "";
$username = "";
$password =  "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "";


$data           = date('y-m-d',strtotime(str_replace("/","-",$_POST['data'])));
$prefixo        = $_POST['prefixo'];
$aciona         = $_POST['aciona'];
$corte          = $_POST['corte'];
$posição        = $_POST['posição'];
$patio          = $_POST['patio'];
$empresa          = $_POST['empresa'];




 

$sql = " INSERT INTO ESTADIA (DATAA, PREFIXO,ACIONAMENTO, CORTE, POSIÇÃO, PATIO, EMPRESA ) VALUES ('$data', '$prefixo', '$aciona', '$corte', '$posição', '$patio', '$empresa')";

if (mysqli_query($conn, $sql)) {
      echo  '<script language="javascript">';   
      echo 'alert("CONTAGEM DE PERMANENCIA DE SOLO INICIADA....");';
      echo 'location.href="select.php";';    
      echo '</script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

