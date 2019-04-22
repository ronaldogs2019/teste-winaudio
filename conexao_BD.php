<?php
$usuario = "root";
$senha = "";
$host = "localhost";
$banco_de_dados = "teste";

$conexao = mysqli_connect($host, $usuario, $senha, $banco_de_dados);

if ($conexao->connect_error) {
    die("Falha na conexao com banco de dados.: " . $conexao->connect_error);
} 
?>