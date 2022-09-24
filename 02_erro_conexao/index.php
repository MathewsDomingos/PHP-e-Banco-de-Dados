<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno){
  echo "Falha na conhexão! <br />";
  echo "Erro: ".$conn->connect_error;
}else{
  echo "<h1>conexão bem sucedida!</h1>";
}


?>