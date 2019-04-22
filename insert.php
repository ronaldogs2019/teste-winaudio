<?php
include("conexao_BD.php");

$Anamnese = utf8_encode($_POST["Anamnese"]);
$Resposta = $_POST["Resposta"];

$insert = "INSERT INTO anamneses( anamnese, resposta) VALUES('$Anamnese', '$Resposta[0]')";

if( $conexao->query($insert)  === TRUE )
{
	echo "Cadastro de anamnese efetuado com sucesso.<br><br>";
	echo "<a href='index.php'>Clique aqui para voltar a pagina de listagem.</a>";
}else{
	echo "Falha no cadastro de anamnese.<br>".$conexao->error;
}

$conexao->close();
?>