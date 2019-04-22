<?php
include("head.php")
?>
<body>
    <form method="post" action="insert.php">
	    <div class="container">
    		<div class="row">
    		    <div class="col">
                    <div class="d-flex justify-content-center">
                        <h2>Nova Anamnese</h2>
                    </div>
                    <div class="form-group">
                        <label for="Anamnese">Anamnese:</label><input type="text" class="form-control" id="Anamnese" name="Anamnese" required>
                    </div>
                    <div class="form-group">
                        <label for="Resposta">Resposta:</label>
                        <div class="radio">
                            <label><input type="radio" id="Resposta" name="Resposta[]" value="1" required> Sim</label>
                            <label><input type="radio" id="Resposta" name="Resposta[]" value="0" required> Não</label>
                        </div>                
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>  
                </div>
            </div>
	    </div>
    </form>
</body>
</html>