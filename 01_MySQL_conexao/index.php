<?php
//CONEXÃO COM O BANCO DE DADOS

// Exemplo 01
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

// Exemplo 02
$conn = new mysqli("localhost", "root", "", "cursophp");

// Exemplo 03
$conn = new mysqli($host, $user, $pass, $db);

?>