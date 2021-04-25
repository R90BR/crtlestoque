
<!DOCTYPE html>
<html lang="pt-br">
<html>
    <?php include("init.php") ?>
    

    <body>
        <?php include("menu.php")?>
        <?php include("../controller/c_editarEquipamento.php")?>
        <div class="container-fluid">
        
        <form method="post" action="../controller/c_editarEquipamento.php" id="form" name="form">
            </br>
            <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Nome do Equipamento:</p></label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o Nome do Equipamento" value="<?php echo $editar->getNome(); ?>" required>
           </div>

           <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Situação:</p></label>
                <select class="form-control form-control" id="situacao" name="situacao" value="<?php echo $editar->getSituacao(); ?>"required>
                <option>Disponivel</option>
                <option>Indisponivel</option>
                </select>
           </div>
           </br>

           <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Tipo:</p></label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Insira o Tipo de Equipamento" value="<?php echo $editar->getTipo(); ?>" required>
           </div>
           </br>

           <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Quantidade:</p></label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Insira o Quantidade" value="<?php echo $editar->getQuantidade(); ?>"required>
           </div>
           </br>

           <div class="form-group col-md-4">
                <label for="exampleFormControlInput1"><p>Observação:</p></label>
                <input type="text" class="form-control" id="observacao" name="observacao" placeholder="Insira uma Observação" value="<?php echo $editar->getObservacao(); ?>"required>
           </div>
           </br>
                         
           

           <div class="form-group">
               <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="submit" name="submit">Atualizar</button>
            </div>



        </form>
           
    

      </div>
    </body>
  

</html>