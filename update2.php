<?php
include("conexao_BD.php");

$Anamnese = utf8_encode($_POST["Anamnese"]);
$Resposta = $_POST["Resposta"];
$codigo = $_POST["codigo"];

$update = "UPDATE anamneses SET anamnese='$Anamnese', resposta='$Resposta[0]' WHERE codigo=$codigo";

if( $conexao->query($update)  === TRUE )
{
	echo "Anamnese atualizada com sucesso.<br><br>";
	echo "<a href='index.php'>Clique aqui para voltar a pagina de listagem.</a>";
}else{
	echo "Falha ao tentar atualizar anamnese.<br>".$conexao->error;
}
$conexao->close();
?>