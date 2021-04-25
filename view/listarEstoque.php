<?php require_once("../controller/c_ListarEquipamento.php")?>
<!DOCTYPE html>

<html lang="pt-br">
<html>
    <?php include("init.php") ?>


    

    <body>
    <div class="container-fluid">
        <?php include("menu.php")?>
        <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Situacao</th>
                <th>Tipo</th>
                <th>Quantidade</th>
                <th>Observação</th>
                <th>Editar</th>
                <th>Excluir</th>
                
            </tr>
        </thead>
        <tbody>
            <?php new listarEstoque();  ?>

        </tbody>
    </table>
    </div>

    
    </body>
  

</html>