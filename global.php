<?php

//Conexão com o banco de dados

$host = "localhost";
$user = "root";
$pass = "";
$db = "clientes";


$conn = new mysqli($host, $user, $pass, $db);

$query = mysqli_query($conn, "SELECT * FROM clientes");

if($resultado = mysqli_fetch_assoc($query)) {
    
}

if ($conn -> connect_errno) {
    die ("Erro ao conectar no Mysqli" . $conn -> connect_error);
}

//Chama Funções
include("function.php");

//Configuração
$titulo = "WebSite";