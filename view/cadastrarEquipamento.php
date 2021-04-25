
<!DOCTYPE html>
<html lang="pt-br">
<html>
    <?php include("init.php") ?>
    

    <body>
        <?php include("menu.php")?>
        <div class="container-fluid">
        
        <form method="post" action="../controller/c_cadastroEquipamento.php" id="form" name="form">
        
            <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Nome do Equipamento:</p></label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o Nome do Equipamento" required>
           </div>
           </br>

           <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Situação:</p></label>
                <select class="form-control form-control" id="situacao" name="situacao" required>
                <option>Disponivel</option>
                <option>Indisponivel</option>
                </select>
           </div>
           </br>

           <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Tipo:</p></label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Insira o Tipo de Equipamento" required>
           </div>
           </br>

           <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Quantidade:</p></label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Insira o Quantidade" required>
           </div>
           </br>

           <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Observação:</p></label>
                <input type="text" class="form-control" id="observacao" name="observacao" placeholder="Insira uma Observação" required>
           </div>
           </br>

           <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>



        </form>
           
    

      </div>
    </body>
  

</html>