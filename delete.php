<?php
include("conexao_BD.php");

$codigo = $_GET["codigo"];

$delete = "DELETE FROM anamneses WHERE codigo=$codigo";

if( $conexao->query($delete)  === TRUE )
{
	echo "Anamnese deletada com sucesso.<br><br>";
	echo "<a href='index.php'>Clique aqui para voltar a pagina de listagem.</a>";
}else{
	echo "Falha ao tentar deletar anamnese.<br>".$conexao->error;
}
$conexao->close();
?>