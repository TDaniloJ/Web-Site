<?php

//Conexão com o banco de dados

$host = "localhost";
$user = "root";
$pass = "";
$db = "clientes";


$conn = new mysqli($host, $user, $pass, $db);


if ($conn -> connect_errno) {
    die ("Erro ao conectar no Mysqli: " . $conn -> connect_error);
}

//Chama Funções
include("function.php");

//Configuração
$titulo = "WebSite";