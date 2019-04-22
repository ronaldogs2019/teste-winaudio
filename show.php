<?php
include("head.php");
include("conexao_BD.php");

$codigo = $_GET['codigo'];

$select = "SELECT * FROM anamneses WHERE codigo = $codigo";

$result = $conexao->query($select);

if($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc()) {

?>
<body>
	    <div class="container">
    		<div class="row">
    		    <div class="col">
                    <div class="d-flex justify-content-center">
                        <h2>Visualizar Anamnese</h2>
                    </div>
                    <div class="form-group">
                        <label for="Anamnese">Anamnese:</label><input type="text" class="form-control" id="Anamnese" name="Anamnese" value="<?php echo utf8_encode($row['anamnese']); ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Resposta">Resposta:</label>
                        <div class="radio">
                            <label><input type="radio" id="Resposta" name="Resposta[]" value="1" <?php echo $row["resposta"] == 1 ? 'checked' : ''?> disabled> Sim</label>
                            <label><input type="radio" id="Resposta" name="Resposta[]" value="0" <?php echo $row["resposta"] == 0 ? 'checked' : ''?> disabled> Não</label>
                        </div>                
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary" type="submit" href="index.php">Voltar</a>
                    </div>  
                </div>
            </div>
	    </div>
        <?php
                }
            }
                $result->close();
                $conexao->close();
        ?>
</body>
</html>