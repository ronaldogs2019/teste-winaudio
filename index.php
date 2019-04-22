<?php
include("conexao_BD.php");
include("head.php")
?>
<body>
	<div class="container">
		<div class="row">
		    <div class="col">
                <div class="d-flex justify-content-center">
                    <h2>Listagem de Anamneses</h2>
                </div>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-primary" type="button" href="cadastro.php">Nova Anamnese</a>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col py-3">   
                <div class="d-flex justify-content-start">                   
    		    	<table class="table table-bordered">
    				    <thead>
        				    <tr>
            				    <th scope="col">Código</th>
            				    <th scope="col">Anamnese</th>
            				    <th scope="col">Resposta</th>
            				    <th scope="col">Opções</th>
            				</tr>
            			</thead>
            			<tbody>
                            <?php
                                $select = "SELECT * FROM anamneses";

                                $result = $conexao->query($select);

                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc())
                                    {
                                        ?>
                                    <tr>
                                        <td><?php echo $row['codigo']; ?></td>
                                        <td><?php echo utf8_encode($row['anamnese']); ?></td>
                                        <td><?php echo $row['resposta'] ? 'Sim' : 'Não'; ?></td>
                                        <td class="d-flex justify-content-around"><input type="submit" class="btn btn-primary" onclick="javascript:location.href='show.php?codigo=<?php echo $row['codigo'];?>';" value="V"><input type="submit" class="btn btn-primary" onclick="javascript:location.href='update.php?codigo=<?php echo $row['codigo'];?>';" value="A"><input type="submit" class="btn btn-primary" onclick="javascript:location.href='delete.php?codigo=<?php echo $row['codigo'];?>';" value="E"></td>
                                    <?php
                                    }
                                }
                                $result->close();
                                $conexao->close();
                            ?>
    				    </tbody>
    				</table>
                </div>           
		    </div>  
        </div>
	</div>
</body>
</html>